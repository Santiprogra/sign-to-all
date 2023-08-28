<?php

    class Conexion{
        public static function conexionbd(){
            try {
                $con = new PDO('mysql:host=localhost;dbname=colegio',"root","");

                $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERR_NONE);
            } catch (Exception $e) {

                die ("ERROR EN LA CONEXION").$e -> getMessage();
                //throw $th;
            }
            
            return $con;
        }
    }

?>