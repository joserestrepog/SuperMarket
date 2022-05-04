<?php
    class Connection
    {
        private function __construct()
        {
            $conn = pg_connect("host=192.168.1.150 port=5432 dbname=SuperMarket user=postgres password=postgres") or die('No se ha podido conectar: ' . pg_last_error());
            if ($conn){
                echo "Conexión exitosa"."<br>"."<br>";
            }
            
        }
    
        public static function getInstance()
        {
            static $instance = null;
            if (null === $instance) {
                $instance = new static();
            } else {
                echo 'Ya hay una conexión a la base de datos <br />';
            }
    
            return $instance;
        }
    }
    
    
           
 
?>