<?php 

// estruturas condicionais (if, if..else, if..elseif.. switch, ?:(ternário), ?? (coalecência))

# ex 1
$idade = 45;

if($idade >= 18){
    echo "Você é maior de idade";
}

echo "<br>";
# ex 2

$num  = 5;
if($num % 2 == 0){
    echo "Numero pár";
}else{
    echo "Numero ímpar";
}

echo "<br>";

# ex 3

$nota = 7;
if ($nota >= 9) {
    echo "Exelente";
} elseif ($nota >= 6) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}

echo "<br>";
# ex 4
$dia = 3;
switch($dia){
    case 1:
        echo "domingo";
        break;

    case 2: 
        echo "segunda-feira";
        break;
    case 3:
        echo "terça-feira";
        break;

    default:
        echo "outro dia da semana";
        break;
}

echo "<br>";
# ex 5

$login = true;
echo $login ? "Bem vindo" : "Acesso negado";

echo "<br>";
# ex 6

// isset - função para verificar se há um valor atribuido na variável.
// if( isset($login)){
//     echo " A variável login tem um valor atribuido!";
// }

$nome = $_GET['nome'] ?? "Visitante"; # coalecência
echo "Olá $nome!";

$teste;

echo "<br>";

//Laços de repetição - while, do..while, for, foreach, controle de laõ (break, continue)

# ex 1

$i = 1;
while($i <= 5){
    echo "<br> contando: $i";

    $i++;
}

echo "<br>";
# ex 2

$j = 1;
do {
    echo "Numero $j - ";
    $j++;
}while($j < 8);

echo "<br>";
# ex 3
for($k = 1; $k <=5; $k++){
    echo "Valor: $k <br>";
}


echo "<br>";
# ex 4
$frutas = ['nome' => "Maça", 'tipo' => "Gala", 'validade' => "out/2025"];
foreach($frutas as $chave => $valor){
    echo "$chave: $valor <br>";
}

echo "<br>";

$carros = ["Fusca", "Escort", "Corsa", "Monza"];
foreach($carros as $carro){
    echo "Carro: $carro <br>";
}

echo "<br>";
# ex 5
for($k = 1; $k <=5; $k++){
    if($k == 2) continue; # pula o 2
    if($k == 4) break; # para no 4

    echo "Valor: $k <br>";
}

echo "<br>";

// Matrizes no PHP
/*
    Arrays indexadas / arrays associativos / arrays multidimensionais/ Funções úteis para arrays (count, array_push, in_array, array_keys, sort, rsort)
*/
# ex 1 matriz indexada
$numeros = [10,20,30];
echo $numeros[1];

echo "<br>";
# ex 2 - matriz associativa
$veiculos = ['Tipo' => "Carro", 'Marca' => "Toyota", 'Modelo' => "Corolla", 'Ano' => "2022"];
echo $veiculos['Marca'];
echo "<br>";

echo "<br>";
# ex 3 - matriz multidimensional
$alunos = [
    ["nome" => "Ana", "idade" => "19"],
    ["nome" => "Everson", "idade" => "68"],
    ["nome" => "José", "idade" => "12"]
];

echo $alunos[1]['nome']." - ".$alunos[1]['idade'];

echo "<br>";
# ex 4
$cores = ["azul", "vermelho", "preto", "cinza", "amarelo"];
echo "Quantidade ".count($cores);


echo "<br>";

# ex 5 - Inserindo com array_push
$animais = ['Cachorro', 'Gato'];
array_push($animais, 'Pássaro');

foreach($animais as $animal){
    echo $animal."<br>";
}


echo "<br>";
# ex 6 - ordenação array
$valores = [5, 3, 8, 10, 1];
sort($valores);
print_r($valores);


echo "<br>";
# ex 7


echo "<br>";
# ex 4


echo "<br>";
# ex 3


echo "<br>";
# ex 4
?>

<form action="estruturas.php" method="get">
    <input type="text" name="nome" id="">
    <button type="submit">Entrar</button>
</form>