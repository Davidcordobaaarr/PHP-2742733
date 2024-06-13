<?php require('conexion.php');

if  ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "datos enviados";
    $tituloCurso = $_POST['tituloCurso'];
    $imagenCurso = $_POST['imagenCurso'];
    $descripcionCurso = $_POST['descripcionCurso'];
    $estudiantesCurso = $_POST['estudiantesCurso'];

    $statement = $conexion->prepare("INSERT INTO `cursos`(`imagen`, `curso`, 
    `descripcion`, `estudiantes`) VALUES (?,?,?,?)");

    $statement->execute(array($imagenCurso,$tituloCurso,$descripcionCurso,$estudiantesCurso) );

    $_SESSION['mensaje'] = 'tarea agregada exitosamente';
    $_SESSION['color'] = 'success';

    header('Location: user.php');
}

?>



