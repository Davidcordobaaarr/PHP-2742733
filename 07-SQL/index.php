<?php

    //DOCUMENTACION: SQL w3school

    //1. SQL SQL select
    //SELECT materia, FROM profesores 
    //

    //2. SQL select distinc 
    //SELECT DISTINCT`ID`, `Nombre`, `edad`,`Documento` FROM `profesores`;
    //solo extrae datos unicos sin repetirlos 

    //3. SQL select where
    //SELECT * FROM `profesores` WHERE 1;
    //captura valores unicos de una columna

    //4. SQL select orederBY
    //SELECT `ID`, `Nombre`, `Documento` FROM `estudiantes` WHERE 1 ORDER BY `ID`;
    // ordena los resultados de una peticion en orden ascendente.

    //5. SQL select AND 
    //SELECT * FROM `estudiantes` WHERE `media tecnica` ='sistemas' AND `Nombre` LIKE 's%';
    //Selecciona y analisa una lista con un factor en comun como una inicial o un tipo de documento en especifico...

    //6. SQL select OR  
    //SELECT `ID`, `Nombre`, `Documento` FROM `estudiantes` WHERE 'media tecnica' = 'multimedia' OR `edad` > 18;
    //seleccionamos el nombre, la media tecnica y su documento, con el factor de que sea mayor de edad puede permanecer a varias categorias si hubieran mas personas mayores a 18 años
    
    //7. SQL select NOT
    //SELECT * FROM profesores WHERE NOT `estado civil` = 'casado';
    //Excluye a los profesores casados

    //8. SQL select INSERT INTO
    //INSERT INTO `profesores`(, `Nombre`, `Documento`) VALUES ('thomas','02133');
    //insertamos a un nuevo profesor en la tabla de profesores...

    //9. SQL select null values
    //SELECT `nombre` FROM `estudiantes` WHERE `nombre` IS NOT NULL;
    //selecciona el valor no vacio de la tabla de los estudiantes seleccionando el nombre el cual no es nulo

    //10. SQL select UPDATE
    //UPDATE `estudiantes` SET `edad`= '14' WHERE `ID` = 2;
    //Actualiza los datos de la tabla 

    //11. SQL select DELETE
    //DELETE FROM `estudiantes` WHERE `nombre`= 'yurley';
    //ELimina los datos ya exitentes de la tabla..

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>