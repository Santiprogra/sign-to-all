<?php
require_once("modelo/modelousuario.php");

$user = new modelousuario();


session_start();

$documento = $_SESSION['documento'];

if (!$documento) {
    header("Location: Index.php");
}

if(isset($_POST['guardado'])){


    $resultado = $_POST['resultado'];


    if($user ->actualizarusuario($documento,$resultado)){

        echo "<script type='text/javascript'>alert('Ya se subio tu resultado'); self.location = 'index.php';</script>;";

        session_destroy();

    } else {

        session_destroy();

        echo "<script type='text/javascript'>alert('Error al subir el resultado'); self.location = 'index.php';</script>;";

    }

}








require_once("vista/estudiante.php");
