<?php

    //entrar en la base de datos 

    try {
        $conexion = new PDO("mysql: host=localhost; dbname=institucion", 'root','');
        echo "conexion OK";
    } catch (PDOException $e) {
       echo "Error: " . $e->getMessage();
    }

    $nombre = 'Alberto'; 
    $estado = 'soltero';
    $materia = 'deportes';
    

    //preparar una sentencia SQL y guardamos una variable

    $statement = $conexion->prepare("INSERT INTO `profesores`( `ID`, `Nombre`, `Estado civil`, `Materia`, `Documento`) VALUES (NULL, :nombre, :estado ,:materia, '1122345')");

    //ejecutar el statement 
    $statement->execute(array(":nombre"=>$nombre, ":estado"=>$estado, ":materia"=>$materia));

    //fetch() regresa un resultado fetchAll () regresa todos los resultados 
    $statement = $statement->fetchAll();

    //print_r($statement); 

    foreach ($statement as $item) {
        echo$item['ID'] . ' - '. $item['Nombre'] . '<br>';
    }




?>

