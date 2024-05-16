<?php

    // Verifica si se ha enviado la edad como parámetro GET
    if(isset($_GET['edad'])) {
        $edad = intval($_GET['edad']); // Obtiene la edad como un número entero

        // Comprueba si la edad es mayor o igual a 18
        if($edad >= 18) {
            echo "<p>Eres mayor de edad.</p>";
        } else {
            echo "<p>No eres mayor de edad.</p>";
        }
    } else {
        echo "<p>No se ha proporcionado una edad.</p>";
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Verificar si es mayor de edad</h2>
    <form action="verificar_edad.php" method="GET">
        <label for="edad">Ingresa tu edad:</label>
        <input type="number" id="edad" name="edad" required>
        <button type="submit">Verificar</button>
    </form>





    
</body>
</html>