<?php
error_reporting(E_ERROR);
$driver = new mysqli_driver();
$driver->report_mode=MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;

function getConexion(){
    $con = new mysqli("localhost","usuarios", "12345", "practica05"); //conexion con bd
    return $con;
}
function error($codigo){
    if ($codigo==2002)
        return "Ha fallado la conexión a la bd";
    elseif ($codigo==1045)
        return "usuario o contraseña incorrecto";
    elseif ($codigo==1044)
        return "No se pudo abrir la bd";
    else
        return "Error deconocido";
}
?>