<?php

class Database{
    public static function connect(){
        // $db= new mysqli('puntodondeseencutralabasededatos', 'nombre de usuario', 'contrase├▒abasededatos', 'nombreDB');
        $db= new mysqli('localhost', 'root', '', 'Acme');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}