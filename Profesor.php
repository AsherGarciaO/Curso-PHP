<?php
    class Profesor extends Persona{
        public function __construct($nombre, $apellido, $edad) {
            parent::__construct($nombre, $apellido, $edad);
        }
        
        public function presentar(){
            echo "Me llamo ".$this->nombre." y trabajo como profesor";
        }
        
        public function enseñar(){
            echo $this->nombre." esta enseñando.";
        }
    }
?>
