<?php 
include_once "usuario.php";

    $user = new Usuario();

    // echo "Inserindo usuário: ";

    // $user->setNome("Joana Machado");
    // $user->setEmail("joanamacha@gmail.com");

    if($user->obterPorId($_GET['id'])){
        echo "Usuário ".$user->getNome() ." localizado";
    }
    else{
        echo "Usuario não localizado!";
    }
    
?>