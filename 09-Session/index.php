<?php

    //session_start(); //inicializa una sesion 

    //$_SESSION['nombre'] = 'josefina';
    $_SESSION['pais'] = 'colombia';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>pagina de inicio</h1>

    <form action="registro.php" method="POST">
        <label for="user">usuario</label>
        <input type="text" placeholder="usuario" name="usuario">
        <label for="password">contraseña</label>
        <input type="text" placeholder="contraseña" name="contraseña">
        <button type="submit">Registro</button>
        
    
    </form>

    <a href="./user.php">user page</a>
    <a href="./cerrar.php">cerrar</a>

    
</body>
</html>