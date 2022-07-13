<?php
require_once 'models/owner.php';
require_once 'models/driver.php';
require_once 'models/vehicle.php';
class vehicleController{

    public function index(){
        $vehi=new owner();
        $owner_ide=$vehi->getIdentification();

        $driver=new driver();
        $driver_ide=$driver->getIdentificationDriver();
        // var_dump($driver_ide->fetch_object());
        // die();
          
        require_once 'views/vehicle/register.php';

    }

    public function save(){
        //recoger los datos del formulario del
        if (!empty($_POST)){
            $cedula_owner=isset($_POST['propietario']) ? $_POST['propietario'] : false;
            $cedula_driver=isset($_POST['conductor']) ? $_POST['conductor'] : false;
            $placa=trim(strtoupper(isset($_POST['placa']) ? $_POST['placa'] : false));
            $color=trim(ucfirst(isset($_POST['color']) ? $_POST['color'] : false));
            $marca=trim(ucfirst(isset($_POST['marca']) ? $_POST['marca'] : false));
            $tipo=isset($_POST['tipo']) ? $_POST['tipo'] : false;

            //Validar los datos antes de enviar a bd
            $errores=array();
            //Validar campo placa
            if(!empty($placa)){
                $placa_valida=true;
            }else{
                $placa_valida=false;
                $errores['placa']= "Campo obligatorio";
            }
            if(strlen($placa)<5 || strlen($placa)>10){
                $placa_valida=false;
                $errores['placalen']= "Introduzca una placa entre 5-10 caracteres";
            }else{
                $placa_valida=true;
            }
            // Validar campo color
            if(!empty($color) && !is_numeric($color) && !preg_match("/[0-9]/",$color)){
                $color_valido=true;
            }else{
                $color_valido=false;
                $errores['color']= "El color no es valido";
            }
            /*validamos el campo marca */
            if(!empty($marca) && !is_numeric($marca) && !preg_match("/[0-9]/",$marca)){
                $marca_valido=true;
            }else{
                $marca_valido=false;
                $errores['marca']= "La marca no es valida";
            }
            

            /**
             * Validamos que no hayan errores para enviar a la bd
             */

            if(count($errores)==0){
                $vehicle=new vehicle();
                $vehicle->setCedulaOwner($cedula_owner);
                $vehicle->setCedulaDriver($cedula_driver);
                $vehicle->setPlaca($placa);
                $vehicle->setColor($color);
                $vehicle->setMarca($marca);
                $vehicle->setTipo($tipo);
                $saved=$vehicle->save();

                if($saved)
                {
                    $_SESSION['vehicle']='completed';
                     header("Location:".base_url."owner/index");
                     exit();
                }

            }else
            {
                $_SESSION['errores']=$errores;
                header("Location:".base_url."vehicle/index");
                exit();
            }
        }else
        {
            $_SESSION['vehicle']='imcopleted';
            require_once 'views/vehicle/register.php';
        }

    }

}