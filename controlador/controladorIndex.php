<?php

    require_once('modelo/modelousuario.php');

    $usuario = new modelousuario();

    if(isset($_POST['enviar'])){

        $docu = $_POST['doc'];
        $nome = $_POST['nom'];
        $apee = $_POST['ape'];
        $rol = $_POST['rol'];
        $resultado = "0";

        $usuario -> agregarusuario($docu,$nome,$apee,$rol,$resultado);

        if($usuario){
            echo "<script type='text/javascript'> alert('usuario registrado ya puedes iniciar sesión');self.location = 'index.php' ;</script>";
        } else {
            echo "<script type='text/javascript'> alert('usuario no registrado');self.location = 'index.php' ;</script>";

        }


    }

    
    if(isset($_POST['login'])){

        $documento = $_POST['documento'];

        $usuario = $usuario ->login($documento);

        if($usuario != null){
            session_start();

            foreach($usuario as $sesion){

                $_SESSION['nombre'] = $sesion[1];
                $_SESSION['ape'] = $sesion[2];
                $_SESSION['documento'] = $sesion[0];
                $_SESSION['rango'] = $sesion[3];
                
                echo "<script type='text/javascript'>alert('Bienvenido ".$sesion[1]."'); self.location = '".$sesion[3].".php';</script>";


            }
        } else {
            echo "<script type='text/javascript'>alert('No se encuentra registrado');self.location = 'index.php' ;</script>";

        }


    }



    require_once('vista/vistaIndex.php')

?>