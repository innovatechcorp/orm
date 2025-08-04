<?php
include "../config/config.php";
class Conexion{
    public static function conectar(){
        try{
            $cn = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASSWORD);
        }catch(PDOException $ex){
            die($ex->getMessage());
        }
        echo "conectado correctamente";
    }
}
Conexion::conectar();