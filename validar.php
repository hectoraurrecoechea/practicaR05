<?php
session_start();
include_once "conexion.php";
    if (isset($_POST["usuario"]) && isset($_POST["pass"]) && strlen($_POST["usuario"])>0 && strlen($_POST["pass"])>0){
        try {
            $con = getConexion();
            $usuario = $_POST["usuario"];
            $pass = $_POST["pass"];
            $consulta = "SELECT id_usuario,usuario,contraseña FROM usuarios WHERE usuario='$usuario' AND contraseña='$pass'";
            if ($con->query($consulta)) {
                $resultado = $con->query($consulta);
                $fila = $resultado->fetch_assoc();
                if ($fila["usuario"] == $usuario && $fila["pass"] = $pass) {
                    $_SESSION["usuario"] = $usuario;
                    $_SESSION["pass"] = $pass;
                    $_SESSION["id_usuario"]=$fila["id_usuario"];
                    header("location:tareas.php");
                } else {
                    $mensaje = "usuario o contraseñas incorrectos";
                    setcookie("mensaje", $mensaje);
                    header("location:index.php");
                }
            }
        }
        catch (mysqli_sql_exception $e){
            setcookie("error",$e->getCode());
        }
    }
else{
    $mensaje="Inserte usuario y contra";
    setcookie("mensaje",$mensaje);
    header("location:index.php");
}

?>
