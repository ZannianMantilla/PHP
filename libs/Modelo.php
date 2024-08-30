<?php

class Modelo{
    protected $id;
    protected $table;
    protected $db;

    public function __construct(
        $id,
        $table,
        PDO $connection
    )
    {
        $this->id = $id;
        $this->table = $table;
        $this->db= $connection;
    }

    public function getAll(){
        $stm = $this->db->prepare("select * from {$this->table}");
        $stm->execute();
        return $stm->fetchAll();
    }

    public function getUserbyId($id){
        $stm = $this->db->prepare("select * from {$this->table} where id =:id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetch();
    }

    public function Update($id){
        $stm = $this->db->prepare("select * from {$this->table} where id =:id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetch();
    }
}