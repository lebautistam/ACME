<?php
class vehicle{

    private $cedulaOwner;
    private $cedulaDriver;
    private $placa;
    private $color;
    private $marca;
    private $tipo;
    private $db;
    
    
    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getCedulaOwner()
    {
        return $this->cedulaOwner;
    }

    public function setCedulaOwner($cedulaOwner)
    {
        $this->cedulaOwner = intval($cedulaOwner);

    }

    public function getCedulaDriver()
    {
        return $this->cedulaDriver;
    }

    public function setCedulaDriver($cedulaDriver)
    {
        $this->cedulaDriver = intval($cedulaDriver);

    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function setPlaca($placa)
    {
        $this->placa = $this->db->real_escape_string($placa);

    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $this->db->real_escape_string($color);

    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $this->db->real_escape_string($marca);

    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

    }

    public function save(){

        $sql="INSERT INTO vehiculos  VALUES(NULL, {$this->getCedulaDriver()}, {$this->getCedulaOwner()},";
        $sql .=" '{$this->getPlaca()}', '{$this->getColor()}', '{$this->getMarca()}', '{$this->getTipo()}'";
        $sql .= ", CURDATE(), NULL )";
        //  var_dump($sql);
        //  die();
        $save=$this->db->query($sql);

        $result=false;
        if($save){
            $result=true;
        }
        return $result;

    }
}