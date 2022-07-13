<?php

class driver{

    private $cedula;
    private $nombre1;
    private $nombre2;
    private $apellido1;
    private $apellido2;
    private $direccion;
    private $telefono;
    private $ciudad;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getCedula()
    {
        return $this->cedula;
    }

    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

    }

    public function getNombre1()
    {
        return $this->nombre1;
    }

    public function setNombre1($nombre1)
    {
        $this->nombre1 =$this->db->real_escape_string($nombre1);

    }

    public function getNombre2()
    {
        return $this->nombre2;
    }

    public function setNombre2($nombre2)
    {
        $this->nombre2 =$this->db->real_escape_string($nombre2);

    }

    public function getApellido1()
    {
        return $this->apellido1;
    }

    public function setApellido1($apellido1)
    {
        $this->apellido1 =$this->db->real_escape_string($apellido1);

    }

    public function getApellido2()
    {
        return $this->apellido2;
    }

    public function setApellido2($apellido2)
    {
        $this->apellido2 =$this->db->real_escape_string($apellido2);

    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);

    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $this->db->real_escape_string($ciudad);

    }

    public function save(){

        $sql="INSERT INTO conductores VALUES(NULL, {$this->getCedula()}, '{$this->getNombre1()}',";
        $sql .=" '{$this->getNombre2()}', '{$this->getApellido1()}', '{$this->getApellido2()}', '{$this->getDireccion()}'";
        $sql .= ", {$this->getTelefono()},'{$this->getCiudad()}', CURDATE(), NULL )";
        // var_dump($sql);
        // die();
        $save1=$this->db->prepare($sql);
        $save=$save1->execute();

        $result=false;
        if($save){
            $result=true;
        }
        return $result;

    }

    public function getIdentificationDriver(){

        $sql="SELECT * FROM conductores ORDER BY Id DESC";
        $data=$this->db->query($sql);

        return $data;
    }


}