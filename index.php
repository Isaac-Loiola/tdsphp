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

echo "Olá mundo!"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "Isaac";
        $idade = 17;
        $email = "isaacoliveirakopi@gmail.com"
    ?>
    <h2>Nome: 
        <?php
            #concatenação de strings
            echo "Meu nome é: ".$nome.",\n tenho ".$idade." anos,\n e meu email é ".$email."";  
        ?>
    </h2>
    <?php
        
    ?>
</body>
</html>