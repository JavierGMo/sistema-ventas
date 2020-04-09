<?php
    class BaseDeDatos{
        public $usuario = "root";
        public $clave = "";
        public $servidor = "localhost";
        public $nombreBD = "cideca";
        public $conexion;

        public function obtenerConexion(){
            $this->conexion = null;
            
            try{
                $this->conexion = new PDO("mysql:host=" . $this->servidor 
                                            . ";dbname=" . $this->nombreBD 
                                            , $this->usuario, $this->clave );
                $this->conexion->exec("set names uft8");
                //echo "Se hizo la conexión\n";
                return $this->conexion;
            }catch(PDOException $exception){
                echo "Error de conexión: " . $exception->getMessage();
            }
        }
    }
?>