<?php
    class BDConection{
        private $servidor = "localhost"; //dirección del servidor
        private $usuario = "root"; //Usuario principal
        private $password = "130406"; //Contraseña con la que inicia sesion
        private $nombreBD = "cursos"; //Nombre de la Base de datos
        
        private $conectionSuccesfull = false;
        private $conexion;
        
        public function __construct(){}
        
        public function startConection(){            
            $this->conexion = new mysqli($this->servidor, $this->usuario, $this->password, $this->nombreBD);

            if ($this->conexion->connect_error) {
                die("Error de conexión: " . $this->conexion->connect_error);
            }
            
            $this->conectionSuccesfull = true;
            
            return $this->conexion;
        }
        
        public function checkConection(){
            if($this->conectionSuccesfull){
                echo "Conexión Exitosa";
            }
            else{
                echo "Conexión Faillda, revisar parametros de conexion";
            }
        }
        
        public function successConection(){
            return $this->conectionSuccesfull;
        }
        
        public function closeConection(){
            $this->conexion->close();
        }
    }
?>