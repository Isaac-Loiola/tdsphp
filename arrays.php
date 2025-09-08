----------------- Arrays -----------------
<?php 

$nomes = [];
$nomes[] = "Ana";
$nomes[] = "Roberto";
$nomes[] = "Augusto";
$nomes[] = "Eduardo";
$nomes[] = "Julia";

foreach($nomes as $nome){
    echo $nome."<br>";
}

echo "<br>";

$usuarios = [];
$usuarios[] = ['nome'=>"José", 'idade'=> 25];
$usuarios[] = ['nome' => "Lucia", 'idade' => 32];


foreach($usuarios as $usuario){
    echo "<br> Nome: ". $usuario['nome']. "<br> Idade: ".$usuario['idade'];
    echo "<br> <br>";
}

echo "<br> <br>";

$formDados = [];
if($_POST){
    $formDados['nome'] = $_POST['nome'];
    $formDados['telefone '] = $_POST['telefone'];
    print_r($formDados);
}

?>
<form method="post">
    Nome: <input type="text" name="nome"> <br>
    Telefone: <input type="tel" name="telefone"> <br>
    <input type="submit" value="Enviar">
</form>