<form method="get">
    Nome: <input type="text" name="nome" id="">
    <br>
    Senha: <input type="password" name="senha" id="">


    <input type="submit" value="Enviar">
</form>
<!-- GET - vai na URL : POST -  -->

<!-- GET o dado é enviado na URL -->

<!-- POST o dado é enviado dentro do corpo da requisição -->

<?php 
// Manipulação de Strings
if(isset($_GET['nome']) and isset($_GET['senha'])){
    echo "Olá, ".$_GET['nome'];
    echo "<br>A senha digitada foi: ".$GET['senha'];
}


?>

<br>
------------------------------------
<br>

<form method="post">
    Email: <input type="email" name="email">
    Token: <input type="password" name="token">

    <input type="submit" value="Enviar">
</form>
<?php 

if(isset($_POST['email'])){
    echo "Seu email é: ". $_POST['email'];
    echo "O Token é:". $_POST['token'];
}
?>