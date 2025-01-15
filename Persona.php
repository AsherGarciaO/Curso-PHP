<?php
    class Persona{
        //Paradigma Orientado a Objetos (POO)
        //public: permite todo acceso
        //protected: permite acceso a elementos heredados
        //private: no hay acceso
        
        //setters(set => establecer) & getters(get => obtener)
        // -> Propiedades/Atributos
        protected $nombre = "";
        protected $apellido = "";
        protected $edad = 0;
        
        // -> Constructor
        public function __construct($nombre, $apellido, $edad) {
            $this->edad = $edad;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }
        
        // -> Acciones/Métodos/Funciones
        public function presentar(){
            echo "Hola, me llamo ".$this->nombre." ".$this->apellido." y tengo ".$this->edad." años.";
        }
    }
?>