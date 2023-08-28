<?php
require_once("modelo/modelousuario.php");

$user = new modelousuario();


session_start();

$documento = $_SESSION['documento'];

if (!$documento) {
    header("Location: Index.php");
}









require_once("vista/inicio.php");
