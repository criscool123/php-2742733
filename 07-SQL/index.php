<?php


//Ejemplos:

//1. SELECT 
//SELECT nombre, Edad FROM profesores;
//Nos ayuda a seleccionar y mostrar solo lo que le pedimos que nos muestre en las columnas y el from
//es para decirle cual tabla es la que queremos que modifique.

//2.select-DISTINCT
//SELECT DISTINCT `Estado civil` FROM `profesores`;
//Este es muy parecido al primero pero con la diferencia de que cuando se repite alguna cosa en alguna columna el solo va poner una de las repetidas. 

//3.Select-WHERE
//SELECT * FROM profesores WHERE `Estado civil` = 'soltero';
// Este lo que hace es seleccionar la tabla que queremos modificar pero el where actua como una
//condicion para que solo aparezca las personas que tienen esa condicion en la columna asignada.


//4.select-ORDER BY
//SELECT * FROM profesores ORDER BY nombre, Edad;
// Este ayuda a modificar la tabla que queremos modificar pero ordena las columnas que le asignamos en orden alfabetico.

//5.select-AND
//SELECT *FROM profesores WHERE `Estado civil` = 'casado' AND nombre LIKE 'A%';
//Este es muy parecido a la condicion where pero ay un AND que actua como otra condicion 
//por ejemplo selecione a los profesores con la condicion de que solo esten los casados pero tambien
//con la condicion de que solo ponga los que empiezan por el nombre con la letra A.

//6.select-OR
//SELECT * FROM profesores WHERE `Estado civil` = 'soltero' OR `Estado civil` = 'Divorciado';
//Este es muy parecido al AND solo utiliza la palabra OR
//por ejemplo selecione a los profesores con la condicion de que solo esten los casados pero tambien
//con la condicion de esten los divorciados.

//7.select-WHERE NOT
//SELECT * FROM profesores WHERE NOT `Materia` = 'ingles';
////Este es muy parecido al where pero incluye los not lo cual seleccionamos la columna que queremos que modifique pero con una condicion que no este cierta cosa
//por ejemplo selecione la tabla profesores y selecione la columna materia pero tambien
//con la condicion de que no esten los que dan ingles.

//8.select-INSERT INTO
//INSERT INTO profesores (`nombre`,`Edad`, `Estado civil`, `Materia`, ` Documento`) VALUES ('Julian', '47', 'casado', 'fisica', '10547373');
//nos ayuda a insertar otra fila

//9.select-NULL-VALUES
//SELECT nombre, Edad, Documento, Materia FROM profesores WHERE Edad IS NOT NULL; SELECT nombre, Edad, Documento, Materia FROM profesores WHERE Edad IS  NULL;
//el null selecciona los valores para hacerlos vacios y los is not null selecciona los para no hacerlos vacios

//10.select-pg_update
//UPDATE `profesores` SET `nombre` = 'Lucas' WHERE `ID`= 3;
//Actualiza los datos ya existentes pero se puede modificar en una columna

//11.select-pg_delete
//DELETE FROM `profesores` WHERE `nombre`= 'osvaldo';
//Elimina los datos ya existentes de la tabla


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