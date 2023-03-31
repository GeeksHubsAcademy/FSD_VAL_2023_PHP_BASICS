<?php

use JetBrains\PhpStorm\Deprecated;

    class Persona
    {
        protected $name;
        protected $age;
        protected $identityNumber;

        function __construct($nombre, $edad, $numeroIdentidad)
        {
            $this->name = $nombre;
            $this->age = $edad;
            $this->identityNumber = $numeroIdentidad;
        }

        protected function getName(){
            return $this->name;
        }
        
        public function setName($newName){
            $this->name = $newName;
        }

        public function toArray() {
            $result = [
                "name" => $this->name,
                "age" => $this->age,
                "identityNumber" => $this->identityNumber
            ];

            return get_object_vars($this);
        }

        public function getFullPersona() {
            return $this->name." tiene ".$this->age." años";
        }

        static function saludo()
        {
            return "hola";
        }
    }

    class Profesion extends Persona{
        private $profesion;

        function __construct($profesion, $name, $edad, $identityNumber)
        {
            parent::__construct($name, $edad, $identityNumber);
            $this->profesion = $profesion;
        }

        public function getProfesion()
        {
            return $this->profesion;
        }

        public function setProfesion($newProfesion)
        {
            $this->profesion = $newProfesion;
        }

        public function getName()
        {
            return $this->name;
        }
    }


    $profesion1 = new Profesion("desarrollador", "David", "28", "98765432A");


    echo $profesion1->getName();


    // Persona::saludo();

    // $persona1 = new Persona("Felipe", "32", "123456789Z");

    // echo $persona1->toArray();

?>


