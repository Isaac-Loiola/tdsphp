<?php 
include_once "db.php";

// POO com PHP 
class Usuario{

    // Atributos
    private $id;
    private $nome;
    private $email;
    private $datacad;

    private $pdo;

    public function __construct(){
        $pdo = getConnection();
    }

    //Getters e Setters - Propriedades ou métodos de acesso!
    public function getId(){
        return $this->id; // o banco é quem atribui 
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getDataCad(){
        return $this->datacad;
    }
}


?>