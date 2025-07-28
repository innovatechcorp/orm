<?php

class Ruta {
    //Método que permite ingresar un controlador con sus respectivas rutas}
    private $_controladores = array();
    public function controladores($controlador){
        $this->_controladores = $controlador;
    // LLamada al metodo que hace el proceso de rutas
    self::submit();    
    }
    public function submit(){
        //recupera url del proyecto
        $uri = isset($_GET["uri"])?$_GET["uri"]:"/";
        //divide la url en paths y forma un array
        $paths =explode("/",$uri);
        //condicion para saber si se encuentra en un controlador o ruta principal
        if($uri =="/"){
            //principal
            //Busca si existe la ruta / en el array de controladores
            $res = array_key_exists("/",$this->_controladores);
            //Comprobando
            if($res !="" && $res ==1){
                foreach($this->_controladores as $ruta=>$controller){
                    //Comprobamos si las rutas son iguales
                    if($ruta=="/"){
                        //Asignamos a una variable la ruta
                        $controlador = $controller;
                    }
                }
               $this->getController();
            }
        }else{
            //controladores y metodos
            
        }
    }
}