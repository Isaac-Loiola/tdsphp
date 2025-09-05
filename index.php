<?php

// Comentário de linha

/*
    Comentário de bloco
*/

# Comentário de linha

/*
    PHP é um linguagem de programação volrada principalmente para dev WEB.
    Server-side.
    Funciona em conjunto com HTML, CSS, JS e integra com Banco de dados.
    Nasceu em 1994.
    Estrutura pra funcionar ( Server Linux, WAMPP, XAMPP, Laragon) - Ambiente de desenvolvimento.
    Orientado a expressão.

*/

// echo "Olá mundo!"; 

// Declaração de variáveis no PHP
$A123;
$x = 1.6; // = (atribuição) / == (comparação) / === (comparação absoluta tipo e valor)

$X = 2; // PHP é case sensitive (faz diferenciação entre maiúsculo e minúsculo)

$escola = "Senac";
$numero = 8266;
$valorOnibus = 5;
$portaoAberto = true;

echo "Estudo no $escola em $numero da Av.Itaquera,
e pago $valorOnibus na passagem de onibus.
Aberto = $portaoAberto";


// variáveis globais no PHP
// echo $_SERVER;

// print_r($_SERVER);


// constantes no PHP
echo "<br>";

define("TESTE", "conteúdo de um constante");
define("DB_NAME", "ComercialDB01");
define("DB_USER", "root");
define("DB_PASSWD", "123 ");
define("DB_SERVER", "10.91.47.77");

echo DB_NAME." - ".DB_USER;


// Operadores no PHP
echo "<br>";
$a = 2;
$b = 10;

echo -$a."<br>";
echo -$b."<br>";
echo "$a + $b = ".$a+$b."<br>"; # adição
echo "$a - $b = ".$a-$b."<br>"; # subtração
echo "$a / $b = ".$a/$b."<br>"; # divisão
echo "$a % $b = ".$a%$b."<br>"; # resto da divisão (mod)
echo "$a ** $b = ".$a**$b."<br>"; # exponenciação (Elevado)

echo "$a com incremento de 1 ".$a++."<br>"; # incrementação
echo "$b com decremento de 1 ".--$b."<br>"; # decremento

echo "$a com incremento de 1 ".$a++."<br>"; # incrementação
echo "$b com decremento de 1 ".$b--."<br>"; # decremento

echo" b - $b / a - $a <br>";
?>""