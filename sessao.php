<form method="post">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="number" name="idade"><br>
    <input type="submit" value="Cadastrar">
</form>
<form action="" method="post">
    <input type="submit" value="Apagar" name="apagar">
</form>
<?php 
session_start();
if(!isset($_SESSION['cadastros'])){
    $_SESSION['cadastros'] = [];
}
if($_POST){
    if(isset($_POST['nome'])){
        $_SESSION['cadastros'][] = [
            'nome' => $_POST['nome'],
            'idade' => $_POST['idade']            
        ];
    }
}

if(isset($_POST['apagar'])){
   session_destroy(); 
}
echo "<h3>Cadastros</h3>";
if(isset($_SESSION['cadastro'])){
    foreach($_SESSION['cadastros'] as $cad)
        echo "<br> Nome: {$cad['nome']} - Idade {$cad['idade']} <br>";
}

?>

