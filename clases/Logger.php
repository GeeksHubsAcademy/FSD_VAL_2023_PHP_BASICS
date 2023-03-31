<?php

    class Logger {
        protected $file;

        function __construct($nombreArchivo)
        {
            $this->file = fopen($nombreArchivo, "w");            
        }

        public function createInfoMessage($message)
        {
            $date = new DateTime();
            fputs($this->file, "[".$date->format('Y-m-d H:i:s')."] ".$message);
        }
    }

    $logger = new Logger("prueba.txt");
    $logger->createInfoMessage("Hoola a todos. \r");
    $logger->createInfoMessage("Esto es otro mensaje")


?>