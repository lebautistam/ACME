<?php

class report
{
    private $db;

    public function __construct()
    {
        $this->db=DataBase::connect();
    }

    public function getReport()
    {
        // $sql= "SELECT p.Id, CONCAT(p.Primer_nombre,' ',p.Segundo_nombre,' ',p.Primer_apellido,' ',p.Segundo_apellido) AS 'Fullname_p',
        //         CONCAT(c.Primer_nombre,' ',c.Segundo_nombre,' ',c.Primer_apellido,' ',c.Segundo_apellido) AS 'Fullname_c',
        //          v.Placa, v.Marca FROM propietarios p INNER JOIN conductores c ON c.Id=v.Conductor_id INNER JOIN vehiculos v ON c.Propietario_id=v.Propietario_id AND c.Id=v.Conductor_id";
        $sql="SELECT v.Placa, v.Marca, v.Id, CONCAT(p.Primer_nombre,' ',p.Segundo_nombre,' ',p.Primer_apellido,' ',p.Segundo_apellido) AS 'Fullname_p',
         CONCAT(c.Primer_nombre,' ',c.Segundo_nombre,' ',c.Primer_apellido,' ',c.Segundo_apellido) AS 'Fullname_c' FROM vehiculos v INNER JOIN propietarios p
         ON v.Propietario_id=p.Id INNER JOIN conductores c ON v.Conductor_id=c.Id";

        $save=$this->db->query($sql);
        return $save;
    }
    
}