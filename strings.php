<?php 
    //  Funções para string 
    $nomeProduto = "   notebook dell Inspirion   ";
    echo "Nome original: $nomeProduto <br>";

    $nomeFormatadoTrim = trim($nomeProduto);
    echo "Nome Formatado Sem Espaços: $nomeFormatadoTrim <br>";

    // Nome 
    $nomeFormatado = ucfirst($nomeFormatadoTrim);
    echo "Nome Formatado: $nomeFormatado <br>";

    $nomeFormatado = ucwords($nomeFormatado);
    echo "Nome Formatado com Letras Maiusculas: $nomeFormatado <br>";

    echo "A string possui ".strlen($nomeFormatado)." caracteres." ;

    $email = "isaAAcoliveirakopi@Gmail.com";
    echo "Email digitado: ".strtolower(trim($email));

    echo "<br>";

    $frase = "Eu gosto do senac Itaquera";
    echo "Nós estamos no ".substr(trim($frase), 11, 6);

    echo "<br>";

    $slug = strtolower(str_replace(" ", "-", trim($nomeProduto)));

    echo $slug."<br>";

    $explodido = explode(" ", trim($frase), 3);
    print_r($explodido);
?>