<?php

$metros = $_POST["metros"];
$pared = $_POST["pared"];
$precio1 = $metros * 2000 + 15000;
$precio2 = $metros * 4000 + 15000;

if ($metros == "lisa") {
    echo "el precio de la pintada es $precio1";
} else {
    echo "el precio de la pintada $precio2";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio4.php" method="POST">
        <br>
        <label for="metros"></label>
        <input id="metros" type="number" placeholder="ingrese los  m2..." name="metros">
        <br> <br>
        <label for="pared"></label>
        <input id="pared" type="text" placeholder="lisa/no lisa..." name="pared">
        <button type="submit">enviar</button>

    </form>


    
</body>
</html>