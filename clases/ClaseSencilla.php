<?php
    class ClaseSencilla
    {
        // Declaración de una propiedad
        public $var = 'un valor predeterminado';
        public $job = "job";
        
        //Declaración de un método
        public function mostrarVar() {
            echo $this->var;
        }
    }

    $clase1 = new ClaseSencilla();
    $clase2 = new ClaseSencilla();

    $clase1->mostrarVar();


?>