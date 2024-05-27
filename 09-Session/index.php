<?php session_start();

if( $_SERVER["REQUEST_METHOD"] == 'POST' ){

        $usuario = $_POST['user'];
        $password = $_POST['password'];

        $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
        $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;
        
        if( empty($usuario) or empty($password) ){
            echo 'rellene completo el formulario';
        }else{
            echo $usuario . ' - ' . $password;
            if( $usuario == $user_register && $password == $pass_register){
                echo 'listo, iniciaste sesion 👻';
                header('location: user.php');
            }else{  echo 'Tu usuario no existe😴';}
                
            
        }

        

}
    //$_SESSION['pais'] = 'colombia';
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

    <form action="index.php" method="POST">
        <label for="user">usuario</label>
        <input type="text" placeholder="usuario" name="user">
        <label for="password">contraseña</label>
        <input type="text" placeholder="password" name="password">
        <button type="submit">Inicio sesion</button>
        
    
    </form>

    <a href="./registro.php">registrate</a>
    

    
</body>
</html>