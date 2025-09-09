<?php 
    // Definindo timezone para America/Sao_Paulo
    date_default_timezone_set('America/Sao_Paulo');

    // Classe de Data
    $dataHoje = new DateTime();
    echo "Hoje: ".$dataHoje->format('d/m/y z:h:i:s e')."<br>";


    $prazo = new DateTime();

    $diasEntrega = 12;

    $prazo->modify("+$diasEntrega days");
    echo "Prazo de entrega: ".$prazo->format("d:m:y");

    // diferença entre datas
    $dataVencimento = new DateTime('2025-09-01');
    $dataPagamento = new DateTime('2025-09-15');
    $diasAtraso = $dataVencimento->diff($dataPagamento);

    echo "<br>".$diasAtraso->days ." dias de atraso";
?>