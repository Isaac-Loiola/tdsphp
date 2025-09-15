<?php 
include_once "usuario.php";

    $user = new Usuario();

    echo "Inserindo usuário: ";

    $user->setNome("Joana Machado");
    $user->setEmail("joanamacha@gmail.com");

    if($user->obterPorId(10)){
        echo "Usuário ".$user->getNome() ." localizado";
    }
    else{
        echo "Usuario não localizado!";
    }
    echo "<br>";
     
    echo "<br>";

    $user->setNome("Gilmara das Couves Parreira");
    $user->setEmail("gilmara@couves.com");

    if($user->atualizar(10)){
        echo "Usuário atualizado com sucesso <br>";
        echo "ID: ".$user->getId() . "<br>";
        echo "Nome: ".$user->getNome() . "<br>";
        echo "Email: ".$user->getEmail() . "<br>";
        echo "Cadastro: ".$user->getDataCad() . "<br>";
    }
    else{
        echo "Usuario não localizado!";
    }
    echo "<br>";

    echo "<br>";

    if($user->excluir(10)){
        echo "Usuário excluido com sucesso <br>";
    }
    else{
        echo "Usuario não localizado!";
    }

    
?>