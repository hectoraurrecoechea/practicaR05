<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
<header>
    <h1>Acceso de usuarios</h1>
</header>
<main>
    <form action="validar.php" method="post">
    <input type="text" name="usuario" id="usuario" placeholder="Escriba su nombre de usuario"><br><br>
    <input type="password" name="pass" id="pass" placeholder="Escriba su contraseña"><br><br>
        <button>Enviar</button>
    </form>
</main>
<?php
if (isset($_COOKIE["mensaje"])){
    echo $_COOKIE["mensaje"];
    setcookie("mensaje",false);
}
?>
</body>
</html>