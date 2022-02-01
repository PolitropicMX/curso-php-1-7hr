<?php
    // creacion de una clase
    class persona{
        public $nombre;// atributos
        private $edad;
        protected $altura;
        // metodos
        function __construct($nuevonombre,$f,$g){
            $this->nombre = $nuevonombre;
            $this->edad = $f;
            $this->altura = $g;
        }
        public function imprimirNombre(){
            echo "Hola soy ".$this->nombre."<br/>";
            echo "tengo ".$this->edad."<br/>";
            echo "mido ".$this->altura."<br/>";
        }
    }
    class trabajador extends persona{
        public $puesto;
        public function puesto($f){
            $this->puesto = $f;
        }
        public function hola(){
            echo "hola soy ".$this->nombre." y soy un ".$this->puesto;
        }

    }

    $objAlumno = new persona("Fernando",22,1.72);// instancia o creacion de un objeto
    $objAlumno->imprimirNombre();
    

    $objtrabajador = new trabajador();
    $objtrabajador->asignarNombre("Erika",21,1.68);
    $objtrabajador->puesto = "Arquitecta";
    $objtrabajador->hola()
?>