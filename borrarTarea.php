<?php
session_start();
include_once "conexion.php";

if (isset($_GET["id"]) && isset($_SESSION["id_usuario"])){
    $con = getConexion();
    $id = $_GET["id"];
    $id_u= $_SESSION["id_usuario"];
    $consulta = "DELETE FROM listas WHERE id_lista=$id";
    $con->query($consulta);
    $consulta->close;
    $con->close();
    //echo "estamos dentro";
    header("location:tareas.php");
}
else{
    echo "no estamos dentro";
}
?>