<?php

require_once 'DB.php';

abstract class CrudUser extends DB {
    
    protected $tabela;
    public $nome;
    public $email;
    public $senha;
    public $data;
    
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    

    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }


    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function getSenha() {
        return $this->senha;
    }


    public function setData($data) {
        $this->data = $data;
    }
    public function getData() {
        return $this->data;
    }
    
}
