<!DOCTYPE html>
<html>
<head>
    <title>Encontrar el número mayor</title>
</head>
<body>

<form method="POST" action="post">
    Ingrese el primer número: <input type="text" name="num1"><br><br>
    Ingrese el segundo número: <input type="text" name="num2"><br><br>
    Ingrese el tercer número: <input type="text" name="num3"><br><br>
    <input type="submit" value="Encontrar el número mayor">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    
    
    $mayor = $num1; 
    
    if ($num2 > $mayor) {
        $mayor = $num2; 
    }
    
    if ($num3 > $mayor) {
        $mayor = $num3; 
    }
    
    
    echo "El número mayor es: " . $mayor;
}
?>

</body>
</html>
