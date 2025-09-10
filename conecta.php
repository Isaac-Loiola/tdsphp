<?php 

try{
    $pdo = new PDO("mysql:host=10.91.47.77;dbname=modelophp_db", "root", "123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "A conexão rolou!";

    // Inserindo usuario
    $stmt = $pdo->prepare("insert into usuarios (nome, email, datacad)
    values (:nome, :email, default)");

    $stmt->execute([
        ":nome" => "Isaac Loiola",
        ":email" => "isaackopi@icloud.com"
    ]);
}
catch(PDOException $e){
    if(strpos($e->getMessage(), "Duplicate") !== false){
        echo "Email já cadastrado na base de dados. <br>";
    }
    else{
        echo $e->getMessage();
    }
}

?>