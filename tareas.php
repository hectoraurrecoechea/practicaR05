<?php
session_start();
include_once "conexion.php";
if (isset($_SESSION["usuario"]) && isset($_SESSION["pass"]) && isset($_SESSION["id_usuario"])){
    $id_usuario = $_SESSION["id_usuario"];
}
else{
    header("location:index.php");
}
$con =getConexion();
$consulta ="SELECT id_lista,tarea,id_usuario FROM listas where id_usuario='$id_usuario'";
$con->query($consulta);
if ($resultado=$con->query($consulta)){
$fila=$resultado->fetch_assoc();
?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Lista de tareas de <?=$_SESSION["usuario"]?></h1>
<form action="anadir.php" method="post">
    <input type="text" name="tarea" placeholder="Escriba una nueva tarea">
    <button>Añadir</button>
</form>
<?php
while ($fila){
echo "<ul><li>".$fila["tarea"]." <a href='borrarTarea.php?id=".$fila["id_lista"]."'>borrar</a></li></ul>";
$fila=$resultado->fetch_assoc();
}
}

?>
<form action="borrarTareasss.php" method="post">
    <button>Borrar Todo</button>
</form>
<a href="cerrarSesion.php">Cerrar sesion</a>
</body>
</html>