<?php 

try{
    $pdo = new PDO("mysql:host=10.91.47.77;dbname-modelophp_db", "root", "123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "A conexão rolou!";

    // Inserindo usuario
}
catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}

?>