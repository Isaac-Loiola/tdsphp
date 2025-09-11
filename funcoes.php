<?php 
require_once "db.php";

    function formatarPreco(float $valor) : string{
        return "R$ ". number_format($valor, 2, ",", ".");
    }

    // Insere um produto no banco de dados!
    function InserirProduto(string $nome, float $preco) : bool{
        $pdo = getConnection();
        $cmd = $pdo->prepare("insert into produtos (nome, preco, datacad)
        values (:nome, :preco, default");
        return $cmd->execute([
            ':nome' => $nome,
            ':preco' => $preco
        ]);
    }

    function listarProdutos () : array{
        $pdo = getConnection();
        $cmd = $pdo->query("select * from produtos order by nome desc");
        return $cmd->fetch(); 
    }

    function buscarPorId (int $id) : ?array{
        $pdo = getConnection();
        $cmd = $pdo -> prepare("select * from produtos where id = :id");
        $cmd->execute([
            ':nome' => $id
        ]);
        $produto = $cmd->fetch();
        return $produto?:null;
    }

    function editarProduto (int $id, string $nome, float $preco) : bool {
        $pdo = getConnection();
        $cmd = $pdo->prepare("update produtos set nome = :nome, preco = :preco where id = :id");
        return $cmd->execute([
            ':nome' => $nome,
            ':preco' => $preco,
            ':id' => $id
        ]);
    }

    function excluirProduto (int $id) : bool{
        $pdo = getConnection();
        $cmd = $pdo->prepare("delete from produtos where id = :id");
        return $cmd->execute([
            ':id' => $id
        ]);
    }
?>