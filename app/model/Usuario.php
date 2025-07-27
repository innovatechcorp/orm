<?php

class Usuario{
    private $id;
    private $email;
    private $nombre;
    private $pass;
    private $estado;
    private $privilegio;

    function __construct($id,$email,$nombre,$pass,$estado,$privilegio){
        
        $this->id = $id;
        $this->email = $email;
        $this->nombre = $nombre;
        $this->pass = $pass;
        $this->estado = $estado;
        $this->privilegio = $privilegio;
            
    }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function setUsuario($usuario){
            $this->id = $usuario;
        }
        public function getPass(){
            return $this->pass;
        }
        public function setPass($pass){
            $this->pass = $pass;
        }
        public function getEstado(){
            return $this->estado;
        }
        public function setEstado($estado){
            $this->estado = $estado;
        }
        public function getPrivilegio(){
            return $this->privilegio;
        }
        public function setPrivilegio($privilegio){
            $this->privilegio = $privilegio;
        }
    
          

}