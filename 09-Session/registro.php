<?php

    if($_POST['usuario']){

    session_start();

    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contraseña'] = $_POST['contraseña'];

    echo 'puede iniciar sesion';

    }else{
        echo 'tienes que completar ek formulario';
        header ('location: index.php');
    }
?>

