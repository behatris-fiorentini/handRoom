<?php

require_once 'DB.php';

abstract class CrudSens extends DB {
    
    protected $tabela;
    public $nome_sensor;
    public $data;    
    
    public function setNome_sensor($nome_sensor) {
        $this->nome_sensor = $nome_sensor;
    }
    public function getNome_sensor() {
        return $this->nome_sensor;
    }

    public function setData($data) {
        $this->data = $data;
    }
    public function getData() {
        return $this->data;
    }
    
}
