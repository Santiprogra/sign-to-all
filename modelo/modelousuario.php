<?php

require_once('conexion.php');

class modelousuario
{

    public function login($documento)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE Documento = ?";
            $ps = Conexion::conexionbd()->prepare($sql);

            $ps->bindParam(1, $documento);

            $ps->execute();

            $datos = $ps->fetchAll();
        } catch (Exception $e) {

            echo "Exepcion en la busqueda" . $e;
            //throw $th;
        }

        return $datos;
    }

    public function agregarusuario($doc, $nom, $ape, $rol, $res)
    {

        try {
            if (modelousuario::login($doc) != null) {
                $res = false;
            } else {
                $sql = "INSERT INTO usuario VALUE(?,?,?,?,?) ";
                $ps = Conexion::conexionbd()->prepare($sql);

                $ps->bindParam(1, $doc);
                $ps->bindParam(2, $nom);
                $ps->bindParam(3, $ape);
                $ps->bindParam(4, $rol);
                $ps->bindParam(5, $res);


                if ($ps->execute()) {
                    $res = true;
                } else {
                    $res = false;
                }
            }
        } catch (Exception $e) {

            echo ("Error en agregar usuario") . $e;
            //throw $th;
        }

        return $res;
    }

    public function actualizarusuario($doc, $resultado)
    {
        try {
            if (modelousuario::login($doc) != null) {
                $sql = "UPDATE usuario set respuesta=? where Documento = ? ";
                $ps = Conexion::conexionbd()->prepare($sql);

                $ps->bindParam(1, $resultado);
                $ps->bindParam(2, $doc);


                if ($ps->execute()) {
                    $res = true;
                } else {
                    $res = false;
                }
            } else {
                $res = false;
            }
        } catch (Exception $e) {

            echo ("Error en actualizar usuario") . $e;
            //throw $th;
        }

        return $res;
    }

    public function mostrarestudiantes()
    {
        try {
            $sql = "SELECT * FROM usuario WHERE rol = 'Estudiante'";
            $ps = Conexion::conexionbd()->prepare($sql);

            $ps->execute();

            $datos = $ps->fetchAll();
        } catch (Exception $e) {

            echo "Exepcion en la busqueda" . $e;
            //throw $th;
        }

        return $datos;
    }

}
