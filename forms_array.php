<form method="get">
    Nome: <input type="text" name="nome" id="">
    <br>
    Senha: <input type="password" name="senha" id="">


    <input type="submit" value="Enviar">
</form>
<!-- GET - vai na URL : POST -  -->

<!-- GET o dado é enviado na URL -->

<!-- POST o dado é enviado dentro do corpo da requisição -->

<!-- REQUEST recupara o dado sendo tanto POST ou GET -->

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
    echo "<br>O Token é:". $_POST['token'];
}
?>
<br>
------------------------------------
<br>
<form method="post">
    Idade: <input type="number" name="idade" id="">
    <input type="submit" value="Enviar">
</form>

<?php 
if(isset($_REQUEST['idade'])){
    echo "Idade recebida: ".$_REQUEST['idade'];
}

?>
<br>

------------Validação--------------

<br>
<form action="dados.php" method="post">
    Usuário: <input type="text" name="usuario">
    <input type="submit" value="Enviar">
</form>


<br>
-----------------------------------
<br>

 <?php 
    $endereco = "https://republicavirtual.com.br/web_cep.php?cep=08225380&formato=json";
    print_r($endereco);
 ?>

 <br>
 ----------------------------------------
 <br>

 <form action="" method="post">
    Selecione seus cursos: <br>
    <input type="checkbox" name="cursos[]" value="PHP">PHP<br>
    <input type="checkbox" name="cursos[]" value="C#">C#<br>
    <input type="checkbox" name="cursos[]" value="HTML">HTML<br>
    <input type="checkbox" name="cursos[]" value="CSS">CSS<br>
    <input type="checkbox" name="cursos[]" value="Boostrap">Boostrap<br>
    <input type="checkbox" name="cursos[]" value="Linux">Linux<br>

    <input type="submit" value="Enviar">
 </form>

 <?php 
 if(isset($_POST['cursos'])){
    foreach($_POST['cursos'] as $curso){
        echo "Curso escolhido: ". $curso."<br>";
    }
 }
 ?>