<?php

require_once('modelo/modelousuario.php');

$usuario = new modelousuario();

session_start();

$documento = $_SESSION['documento'];

$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['ape'];

$estudiante = $usuario ->mostrarestudiantes();

if (!$documento) {
    header("Location: Index.php");
}


if(isset($_POST['exit'])){

    if ($documento) {
        session_destroy();
        header("Location:index.php");
    }

}


require_once("vista/profesor.php");

?>