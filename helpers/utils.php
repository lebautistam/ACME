<?php

class utils{

    public static function deleteSession($name){

        if(isset($_SESSION[$name])){
            unset($_SESSION[$name]);
        }

        return $name;
    }

    public static function mistakes($errores, $campo){

        $alert='';
        if(isset($errores[$campo]) && !empty($campo)){

            $alert="<strong>" . $errores[$campo] . "</strong>";
        }

        return $alert;

    }
}