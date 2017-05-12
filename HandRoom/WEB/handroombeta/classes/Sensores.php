<?php

require_once 'CrudSens.php';

class Sensores extends CrudSens {
    
    protected $tabela = 'sensor';
    
    public function findUnit($id_sensor) {
        $sql = "SELECT * FROM $this->tabela WHERE id_sensor = :id_sensor";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id_sensor', $id_sensor, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }

    
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
    
    
    public function insert() {
        $sql = "INSERT INTO $this->tabela (nome_sensor, data) VALUES (:nome_sensor, NOW())";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome_sensor', $this->nome_sensor);
        
        return $stm->execute();

    }
    
    
    public function update($id_sensor) {
        $sql = "UPDATE $this->tabela SET nome_sensor = :nome_sensor WHERE id_sensor = :id_sensor";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id_sensor', $id_sensor, PDO::PARAM_INT);
        $stm->bindParam(':nome_sensor', $this->nome_sensor);

        return $stm->execute();
    }

    
    public function delete($id_sensor) {
        $sql = "DELETE FROM $this->tabela WHERE id_sensor = :id_sensor";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id_sensor', $id_sensor, PDO::PARAM_INT);
        return $stm->execute();
    }


    public function buscaData(){
        $sql = "SELECT * FROM $this->tabela WHERE data like '%:data%'";
        $stm = DB::prepare($sql);
        $stm->bindParam(':data', $this->data);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function buscaSensor(){
        $sql = "SELECT * FROM $this->tabela WHERE data like '%:nome_sensor%'";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome_sensor', $this->nome_sensor);
        $stm->execute();
        return $stm->fetchAll();
    }
    
}
