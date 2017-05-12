<?php

require_once 'DB.php';

abstract class CrudSala extends DB {
    
    protected $tabela;
    public $nome_sensor;
    public $estado;
    public $data;
    
}
