<?php
class Conexion{
    public static function conectar(){
        try{
            $cn = new PDO("mysql:host=localhost;dbname=bd_orm","root","");
        }catch(PDOException $ex){
            die($ex->getMessage());
        }
        echo "conectado correctamente";
    }
}
Conexion::conectar();