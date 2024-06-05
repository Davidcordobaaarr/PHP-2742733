<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'datos enviadoshbjhj';

    echo '<br>';
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];



    if (empty($usuario) or empty($password) or empty($email)) {
        echo 'rellene completo el formulario';
    } else {
        //echo $usuario . ' - ' . $password;
        $_SESSION['userRegister'] = $usuario;
        $_SESSION['passRegister'] = $password;
        $_SESSION['emailRegister'] = $email;

        //echo ' - variables de sesion guardadas🥶';
        //header('location: index.php');

        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp;", 'root', '');
            echo "conexion OK";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }



        $statement = $conexion->prepare("INSERT INTO `userapp`( `ID`, `username`, `correo`, `contraseña`) VALUES (NULL, :username, :pass ,:correo)");


        $statement->execute(array(":username" => $usuario, ":pass" => $password, ":correo" => $email));






        /* 
                foreach ($statement as $item) {
                    echo$item['ID'] . ' - '. $item['Nombre'] . '<br>'; */
    }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registroo.css">



</head>

<body>

    <div class="cajatodo">

        <div class="cardsita">
            <div class="mx-auto p-2" class="card" style="width: 18rem;">
                <div class="card-body">
                    <h1 class="register text-primary">registrate</h1>
                    
                    <div class="registro">
                        
                        <form action="registro.php" method="POST">
                            <label class="rellenar" for="user">usuario</label>
                            <br>
                            <input class="userr" type="text" placeholder="usuario" name="user">
                            <br>
                            <label for="password">contraseña</label>
                            <br>
                            <input class="password" type="text" placeholder="password" name="password">
                            <br>
                            <label for="mail">correo</label>
                            <input class="inputt" type="email" placeholder="email" name="email">
                            <button class="registra" type="submit">registrate</button>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php if (isset($_SESSION['userRegister'])) : ?>
        <p>Datos registrados, ya puedes iniciar sesion</p>
        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'] ?> </p>
        <a href="index.php">iniciar sesion</a>
    <?php endif ?>

</body>

</html>