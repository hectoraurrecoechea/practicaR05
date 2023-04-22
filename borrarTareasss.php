<?php
session_start();
include_once "conexion.php";
if (isset($_SESSION["usuario"]) && isset($_SESSION["pass"]) && isset($_SESSION["id_usuario"])){
    $usuario=$_SESSION["usuario"];
    $pass=$_SESSION["pass"];
    $id_usuario=$_SESSION["id_usuario"];
    $con =getConexion();
    $consulta = "DELETE FROM listas WHERE id_usuario=$id_usuario";
    $con->query($consulta);
    header("location:tareas.php");
}
else{
    echo "no borrao";
}
?>