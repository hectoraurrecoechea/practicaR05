<?php
session_start();
include_once "conexion.php";

if (isset($_POST["tarea"]) && isset($_SESSION["id_usuario"]) && strlen($_POST["tarea"])>0){
    $con = getConexion();
    $tarea = $_POST["tarea"];
    $id_usuario = $_SESSION["id_usuario"];
    $consulta = "INSERT INTO listas (tarea,id_usuario) VALUES('$tarea',$id_usuario)";
    $con->query($consulta);
    header("location:tareas.php");
}
else{
    echo "no estamos dentro";
}
?>
