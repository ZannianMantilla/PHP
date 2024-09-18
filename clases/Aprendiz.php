<?php
include_once("Persona.php");
class Aprendiz extends Persona{
    private $ficha;
    private $promedio;

    public function __construct(PDO $connection) {
        parent::__construct("id", "users", $connection);
    }

    public function getficha() {
        return $this->ficha;
    }
    public function getpromedio() {
        return $this->promedio;
    }
    public function setficha($ficha){
        $this->ficha = $ficha;
    }
    public function setpromedio($promedio){
        $this->promedio = $promedio;
    }
}
?>