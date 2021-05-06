<?php

class Conexion{
    private static $con=null;
    private static $server="localhost";
    private static $user = "root";
    private static$password = "";
    
    public static function getConexion(){
        if(self::$con == null){
        $data = "mysql:host=".self::$server.";dbname=control_clientes";
        try {
            self::$con = new PDO($data, self::$user, self::$password);
            // set the PDO error mode to exception
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$con;
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
        }
        return  null;
    }

    public static function cerrar(){
        return self::$con = null;
    }


}


?>