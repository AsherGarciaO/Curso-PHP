<?php
    class Programador extends Persona{
        public function __construct($nombre, $apellido, $edad) {
            parent::__construct($nombre, $apellido, $edad);
        }
        
        public function presentar() {
            echo "Hola, yo me llamo ".$this->nombre." y trabajo como programador";
        }
        
        public function programar(){
            echo $this->nombre." esta programando.";
        }
    }
?>