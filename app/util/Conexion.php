<?php
include "../../config/config.php";
class Conexion{
    public static function conectar(){
        try{
        $cn = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASSWORD);
        return $cn;
    }catch(PDOException $ex){
           //die($ex->getMessage());
        }
    }
}

Conexion::conectar();