<?php
class Persona extends Modelo{
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $telefono;
    protected $correo;
    protected $documento;
    protected $direccion;

    public function __construct($id, $table, $connection) {
        parent::__construct($id, $table, $connection);
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getEdad() {
        return $this->edad;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function getCorreo() {
        return $this->correo;
    }
    public function getDocumento() {
        return $this->documento;
    }
    public function getDireccion() {
        return $this->direccion;
    }
    public function setNombre($name){
        $this->nombre = $name;
    }
    public function setApellido($lastname){
        $this->apellido = $lastname;
    }
    public function setEdad($age){
        $this->edad = $age;
    }
    public function setTelefono($phone){
        $this->telefono = $phone;
    }
    public function setCorreo($email){
        $this->correo = $email;
    }
    public function setDocumento($document){
        $this->documento = $document;
    }
    public function setDireccion($adress){
        $this->direccion = $adress;
    }

    public function getFullName() {
        return "El nombre completo es: ".$this->nombre." ".$this->apellido;
    }

}
?>
