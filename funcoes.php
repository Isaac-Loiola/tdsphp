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
?>