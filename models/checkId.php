<?php

require_once '../config/db.php';

if(isset($_GET['cedula']) || isset($_GET['cedula1'])){
    $tabla='';
    if(isset($_GET['cedula'])){
        $cedula=$_GET['cedula'];
        $tabla='propietarios';
    }else{
        $cedula=$_GET['cedula1'];
        $tabla='conductores';
    }
    // var_dump($cedula);
    $json_data=array();
    $check= Database::connect();
    $sql="SELECT Numero_cedula FROM $tabla WHERE Numero_cedula=$cedula";
    $select=$check->query($sql);
    $rows=$select->num_rows;
    // var_dump($sql);
    // die();
    if($rows<=0){
        $json_data['success']=0;
        $json_data['message']='';
    }else{
        $json_data['success']=1;
        $json_data['message']='<p class="error">Este documento ya esta registrado</p>';
    }

    header('Content-Type: application/json; charset-utf-8');
    echo json_encode($json_data);
}