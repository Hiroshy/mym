<?php
    const DB_TYPE="mysql";
    const DB_SERVIDOR="localhost";
    const DB_CHARSET="utf8";

    abstract class DB {
        // Usuario de la base de datos
        private static $db_usuario="root";
        // Clave de la base de datos
        private static $db_pass="";
        // Nombre del servidor
        private static $db_servidor=DB_SERVIDOR;
        // Nombre de la base de datos
        private static $db_nombre="amreal";
        // Codificación de la base de datos
        private static $db_charset=DB_CHARSET;
        // Conexión con la base de datos
        private $conexion;
        
        public function conectar(){
            try{
                $str=DB_TYPE.":host=".self::$db_servidor.";dbname=".self::$db_nombre;
                $pdo= new PDO($str,self::$db_usuario,self::$db_pass);
                $pdo->exec("SET CHARSET SET".self::$db_charset);
                return $pdo;
            }catch(PDOException $e){
                exit("Error: ".$e->getMessage());
            }
        }

        private function desconectar(){
            $this->conexion=null;
        }

        #Métodos CRUD 
        #Clase abstracta permite crear clases y no necesario desarrollar lógica
        abstract protected function seleccionar();
        abstract protected function insertar($registro);
        abstract protected function actualizar($registro);
        abstract protected function eliminar($accion,$eliminar);

        public function __destruct(){}

    }
?>