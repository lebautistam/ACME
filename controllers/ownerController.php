<?php
require_once 'models/owner.php';

class ownerController{

    public function index(){
        
        require_once 'views/owner/register.php';

    }

    public function save(){
        //recoger los datos del formulario del
        if (!empty($_POST)){
            $cedula_propietario=trim(isset($_POST['cedula']) ? $_POST['cedula'] : false);
            $nombre1_propietario=trim(ucfirst(isset($_POST['nombre1']) ? $_POST['nombre1'] : false));
            $nombre2_propietario=trim(ucfirst(isset($_POST['nombre2']) ? $_POST['nombre2'] : false));
            $apellido1_propietario=trim(ucfirst(isset($_POST['apellido1']) ? $_POST['apellido1'] : false));
            $apellido2_propietario=trim(ucfirst(isset($_POST['apellido2']) ? $_POST['apellido2'] : false));
            $direccion_propietario=trim(ucfirst(isset($_POST['direccion']) ? $_POST['direccion'] : false));
            $telefono_propietario=trim(isset($_POST['telefono']) ? $_POST['telefono'] : false);
            $ciudad_propietario=trim(ucfirst(isset($_POST['ciudad']) ? $_POST['ciudad'] : false));
            // var_dump($_POST);
            // die();
            //Validar los datos antes de enviar a bd
            $errores=array();
            //Validar campo cedula
            if(!empty($cedula_propietario) && is_numeric($cedula_propietario) && preg_match("/[0-9]/",$cedula_propietario)){
                $cedula1_valida=true;
            }else{
                $cedula_valida=false;
                $errores['cedula1']= "campo obligatorio";
            }
            if(strlen($cedula_propietario)<5 || strlen($cedula_propietario)>10){
                $cedula1_valida=false;
                $errores['cedulalen']= "introduzca una cedula entre 5-10 cifras";
            }else{
                $cedula_valida=true;
            }
            // Validar campo nombres
            if(!empty($nombre1_propietario) && !is_numeric($nombre1_propietario) && !preg_match("/[0-9]/",$nombre1_propietario)){
                $nombre1_valido=true;
            }else{
                $nombre1_valido=false;
                $errores['nombre1']= "el nombre no es valido";
            }

            if(!is_numeric($nombre2_propietario) && !preg_match("/[0-9]/",$nombre2_propietario)){
                $nombre2_valido=true;
            }else{
                $nombre2_valido=false;
                $errores['nombre2']= "el nombre no es valido";
            }
            //Validar campo apellidos
            if(!empty($apellido1_propietario) && !is_numeric($apellido1_propietario) && !preg_match("/[0-9]/",$apellido1_propietario)){
                $apellido1_valido=true;
            }else{
                $apellido1_valido=false;
                $errores['apellido1']= "El apellido no es valido";
            }

            if(!empty($apellido2_propietario) && !is_numeric($apellido2_propietario) && !preg_match("/[0-9]/",$apellido2_propietario)){
                $apellido2_valido=true;
            }else{
                $apellido2_valido=false;
                $errores['apellido2']= "El apellido no es valido";
            }
            //Validar campo direccion
            if(!empty($direccion_propietario)){
                $direccion_valido=true;
            }else{
                $direccion_valido=false;
                $errores['direccion']=  "La direccion es necesaria";
            }
            // validar campo telefono
            if(!empty($telefono_propietario) && is_numeric($telefono_propietario) && preg_match("/[0-9]/", $telefono_propietario)){
                $telefono_valido=true;
            }else{
                $telefono_valido=false;
                $errores['telefono']=  "El telefono es invalido";
            }
            if(strlen($telefono_propietario)<7 || strlen($telefono_propietario)>10){
                $cedula1_valida=false;
                $errores['telen']= "introduzca un número correcto entre 7-10 cifras";
            }else{
                $cedula_valida=true;
            }
            //validar campo ciudad
            if(!empty($ciudad_propietario) && !is_numeric($ciudad_propietario) && !preg_match("/[0-9]/",$ciudad_propietario)){
                $ciudad_valido=true;
            }else{
                $ciudad_valido=false;
                $errores['ciudad']= "La ciudad no es valida";
            }

            /**
             * Validamos que no hayan errores para enviar a la bd
             */

            if(count($errores)==0){
                $owner=new owner();
                $owner->setCedula($cedula_propietario);
                $owner->setNombre1($nombre1_propietario);
                $owner->setNombre2($nombre2_propietario);
                $owner->setApellido1($apellido1_propietario);
                $owner->setApellido2($apellido2_propietario);
                $owner->setDireccion($direccion_propietario);
                $owner->setTelefono($telefono_propietario);
                $owner->setCiudad($ciudad_propietario);
                $saved=$owner->save();

                if($saved)
                {
                    $_SESSION['owner']='completed';
                    header("Location:".base_url."driver/index");
                    exit();
                }

            }else
            {
                $_SESSION['errores']=$errores;
                header('Location:'.base_url.'owner/index');
            }
        }else
        {
            $_SESSION['owner']='imcopleted';
            require_once 'views/owner/register.php';
        }

    }

    public function seeIdentification(){

       $owner=new owner();
       $owner_ide=$owner->getIdentification();
       require_once 'views/vehicle/register.php';
         
    }

}