<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'datos enviados';
    
    echo '<br>';
         $usuario = $_POST['user'];
            $password = $_POST['password'];
            
            if( empty($usuario) or empty($password) ){
                echo 'rellene completo el formulario';
            }else{
                //echo $usuario . ' - ' . $password;
                $_SESSION['userRegister'] = $usuario;
                $_SESSION['passRegister'] = $password;
                //echo ' - variables de sesion guardadas🥶';
                //header('location: index.php');
            }
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

    <h1>registrate</h1>

    <form action="registro.php" method="POST">
        <label for="user">usuario</label>
        <input type="text" placeholder="usuario" name="user">
        <label for="password">contraseña</label>
        <input type="text" placeholder="password" name="password">
        <button type="submit">registrate</button>


    </form>

    <?php if( isset($_SESSION['userRegister']) ) : ?>
        <p>Datos registrados, ya puedes iniciar sesion</p>
        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION ['passRegister']; ?> </p>
        <a href="index.php">iniciar sesion</a>
    <?php endif ?>

</body>

</html>