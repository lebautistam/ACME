<?php
require_once 'models/driver.php';
require_once 'models/owner.php';
class driverController
{

    public function index()
    {   
        $vehi=new owner();
        $owner_ide=$vehi->getIdentification();
        require_once 'views/driver/register.php';
    }

    public function save()
    {
        //recoger los datos del formulario del
        if (!empty($_POST)) {
            // $cedula_owner=isset($_POST['propietario'])?$_POST['propietario']:false;
            $cedula_conductor = trim(isset($_POST['cedula1']) ? $_POST['cedula1'] : false);
            $nombre1_conductor = trim(ucfirst(isset($_POST['nombre1']) ? $_POST['nombre1'] : false));
            $nombre2_conductor = trim(ucfirst(isset($_POST['nombre2']) ? $_POST['nombre2'] : false));
            $apellido1_conductor = trim(ucfirst(isset($_POST['apellido1']) ? $_POST['apellido1'] : false));
            $apellido2_conductor = trim(ucfirst(isset($_POST['apellido2']) ? $_POST['apellido2'] : false));
            $direccion_conductor = trim(ucfirst(isset($_POST['direccion']) ? $_POST['direccion'] : false));
            $telefono_conductor = trim(isset($_POST['telefono']) ? $_POST['telefono'] : false);
            $ciudad_conductor = trim(ucfirst(isset($_POST['ciudad']) ? $_POST['ciudad'] : false));

            //Validar los datos antes de enviar a bd
            $errores = array();
            //Validar campo cedula
            if (!empty($cedula_conductor) && is_numeric($cedula_conductor) && preg_match("/[0-9]/", $cedula_conductor)) {
                $cedula1_valida = true;
            } else {
                $cedula_valida = false;
                $errores['cedula1'] = "la cedula no es valida";
            }
            if(strlen($cedula_conductor)<5 || strlen($cedula_conductor)>10){
                $cedula1_valida=false;
                $errores['cedulalen']= "introduzca una cedula entre 5-10 cifras";
            }else{
                $cedula_valida=true;
            }
            // Validar campo nombres
            if (!empty($nombre1_conductor) && !is_numeric($nombre1_conductor) && !preg_match("/[0-9]/", $nombre1_conductor)) {
                $nombre1_valido = true;
            } else {
                $nombre1_valido = false;
                $errores['nombre1'] = "el nombre no es valido";
            }

            if (!is_numeric($nombre2_conductor) && !preg_match("/[0-9]/", $nombre2_conductor)) {
                $nombre2_valido = true;
            } else {
                $nombre2_valido = false;
                $errores['nombre2'] = "el nombre no es valido";
            }
            //Validar campo apellidos
            if (!empty($apellido1_conductor) && !is_numeric($apellido1_conductor) && !preg_match("/[0-9]/", $apellido1_conductor)) {
                $apellido1_valido = true;
            } else {
                $apellido1_valido = false;
                $errores['apellido1'] = "El apellido no es valido";
            }

            if (!empty($apellido2_conductor) && !is_numeric($apellido2_conductor) && !preg_match("/[0-9]/", $apellido2_conductor)) {
                $apellido2_valido = true;
            } else {
                $apellido2_valido = false;
                $errores['apellido2'] = "El apellido no es valido";
            }
            //Validar campo direccion
            if (!empty($direccion_conductor)) {
                $direccion_valido = true;
            } else {
                $direccion_valido = false;
                $errores['direccion'] =  "La direccion es necesaria";
            }
            // validar campo telefono
            if (!empty($telefono_conductor) && is_numeric($telefono_conductor) && preg_match("/[0-9]/", $telefono_conductor)) {
                $telefono_valido = true;
            } else {
                $telefono_valido = false;
                $errores['telefono'] =  "El telefono es invalido";
            }
            if(strlen($telefono_conductor)<7 || strlen($telefono_conductor)>10){
                $cedula1_valida=false;
                $errores['telen']= "introduzca un número correcto entre 7-10 cifras";
            }else{
                $cedula_valida=true;
            }
            //validar campo ciudad
            if (!empty($ciudad_conductor) && !is_numeric($ciudad_conductor) && !preg_match("/[0-9]/", $ciudad_conductor)) {
                $ciudad_valido = true;
            } else {
                $ciudad_valido = false;
                $errores['ciudad'] = "La ciudad no es valido";
            }

            /**
             * Validamos que no hayan errores para enviar a la bd
             */

            if (count($errores) == 0) {
                $driver = new driver();
                // $driver->setCedula_Owner($cedula_owner);
                $driver->setCedula($cedula_conductor);
                $driver->setNombre1($nombre1_conductor);
                $driver->setNombre2($nombre2_conductor);
                $driver->setApellido1($apellido1_conductor);
                $driver->setApellido2($apellido2_conductor);
                $driver->setDireccion($direccion_conductor);
                $driver->setTelefono($telefono_conductor);
                $driver->setCiudad($ciudad_conductor);
                $saved = $driver->save();

                if ($saved) {
                    $_SESSION['driver'] = 'completed';
                    header("Location:".base_url."vehicle/index");
                    exit();
                }
            } else {
                $_SESSION['driver'] = $errores;
                header("Location:".base_url."driver/index");
                exit();
            }
        }else {
            $_SESSION['driver'] = 'imcopleted';
            header("Location:".base_url."driver/index");
            exit();
        }
    }
}
