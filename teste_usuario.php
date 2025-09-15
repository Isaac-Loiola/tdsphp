<?php 
include_once "usuario.php";

    $user = new Usuario();

    echo "Inserindo usuário: ";

    $user->setNome("Joana Machado");
    $user->setEmail("joanamacha@gmail.com");

    if($user->inserir()){
        echo "Usuário ".$user->getNome() ."inserido com sucesso!";
    }
    else{
        echo "Usuario não cadastrado!";
    }
    
?>