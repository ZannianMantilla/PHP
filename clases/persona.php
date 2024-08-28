<?php
class Persona {
    private $nombre;
    private $apellido;
    private $edad;

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        return $this->apellido = $apellido;
    }
    public function setEdad($edad){
        return $this->edad = $edad;
    }

    public function getFullName(){
        return "El nombre completo es: ".$this->nombre." ".$this->apellido;
    }
}