<?php
    require('../Conexion/BaseDeDatos.php');
    class Usuario{
        private $nombre;
        private $apellido;
        private $email;
        private $calle;
        private $estado;
        private $codigoPostal;
        private $fechaNacimiento;
        private $rol;
        private $contrasenia;
        public function __construct(){
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setApellido($apellido){
            $this->apellido = $apellido;
        }
        public function getApellido(){
            return $this->apellido;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setCalle($calle){
            $this->calle = $calle;
        }
        public function getCalle(){
            return $this->calle;
        }
        public function setEstado($estado){
            $this->estado = $estado;
        }
        public function getEstado(){
            return $this->estado;
        }
        public function setCodigoPostal($codigoPostal){
            $this->codigoPostal = $codigoPostal;
        }
        public function getCodigoPostal(){
            return $this->codigoPostal;
        }
        public function setFechaNacimiento($fechaNacimiento){
            $this->fechaNacimiento = $fechaNacimiento;
        }
        public function getFechaNacimiento(){
            return $this->fechaNacimiento;
        }
        public function setRol($rol){
            $this->rol = $rol;
        }
        public function getRol(){
            return $this->rol;
        }
        public function setContrasenia($contrasenia){
            $this->contrasenia = $contrasenia;
        }
        public function getContrasenia(){
            return $this->contrasenia;
        }
        public function registroUsuario(){
            try{
                $conexion = new BaseDeDatos();
                $bd = $conexion->obtenerConexion();
                $stmt = $bd->prepare(
                        "INSERT INTO usuarios(nombre,apellido,email,calle,estado,codigopostal,fechanacimiento,rol,contrasenia) 
                        VALUES (:nombre,:apellido,:email,:calle,:estado,:codigopostal,:fechanacimiento,:rol,:contrasenia)"
                    );
                $hash_password= hash('sha256', $this->contrasenia); //Contraseña encriptada
                //statement
                $stmt->bindParam("nombre", $this->nombre,PDO::PARAM_STR) ;
                $stmt->bindParam("apellido", $this->apellido,PDO::PARAM_STR) ;
                $stmt->bindParam("email", $this->email,PDO::PARAM_STR) ;
                $stmt->bindParam("calle", $this->calle,PDO::PARAM_STR) ;
                $stmt->bindParam("estado", $this->estado,PDO::PARAM_STR) ;
                $stmt->bindParam("codigopostal", $this->codigoPostal,PDO::PARAM_STR) ;
                $stmt->bindParam("fechanacimiento", $this->fechaNacimiento,PDO::PARAM_STR) ;
                $stmt->bindParam("rol", $this->rol,PDO::PARAM_STR) ;
                $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
                $stmt->execute();
                $conexion = null;
                $bd = null;
            }
            catch(PDOException $e) {
                echo "Error: ". $e->getMessage();
            }
        }
        public function loginUsuario(){
            try{
                $conexion = new BaseDeDatos();
                $bd = $conexion->obtenerConexion();
                
                $stmt = $bd->prepare("SELECT id,email, rol FROM usuarios WHERE email=:emailLogin AND contrasenia=:hash_password"); 

                $hash_password= hash('sha256', $this->contrasenia); //Contraseña encriptada 
                $stmt->bindParam("emailLogin", $this->email,PDO::PARAM_STR) ;
                $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
                $stmt->execute();
                $count=$stmt->rowCount();
                $data=$stmt->fetch(PDO::FETCH_OBJ);
                $conexion = null;
                $bd = null;
            }catch(PDOException $e) {
                echo "Error: ". $e->getMessage();
            }
                
        }
    }
?>