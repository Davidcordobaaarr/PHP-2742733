<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="user.css">
</head>

<body>

    <?php if (isset($_SESSION['userRegister'])) : ?>

        <div class="padre">

            <div class="welcome">


                <h1> Bienvenido 🎶 <?php echo $_SESSION['userRegister']; ?> </h1>
                <a href="./cerrar.php">cerrar sesion </a>
                <a href="./index.php">Home</a>

            <?php else : ?>

                <h1>no has iniciado sesion</h1>
                <a href="./index.php">iniciar sesion</a>

            <?php endif ?>

            </div>

        </div>

        <form action="agregar_curso.php" method="POST">
            <label for="tituloCurso">Agregar curso</label>
            <input type="text" name="tituloCurso" id="tituloCurso" placeholder="Agregar curso">
            <label for="imagenCurso">Agregar imagen</label>
            <input type="file" name="imagenCurso" id="imagenCurso" placeholder="Agregar imagen">
            <label for="descripcion">Descripcion Curso</label>
            <input type="text" id="descripcion" name="descripcionCurso" placeholder="descripcion">
            <label for="estudiantes">Estudiantes</label>
            <input type="text" id="estudiantes" name="estudiantesCurso" placeholder="estudiantes">
            <input type="submit" value="registrar curso">
            
        </form>

</body>

</html>