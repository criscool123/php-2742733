<?php
try {
    $conexion = new PDO("mysql: host=localhost; dbname=colegio", "root", "");
    echo "Conexion Ok";
} catch (PDOException $e) {
    echo "Error;" . $e->getMessage();
}

$nombre = "Alberto";
$materia = "Sociales";
$estado = "Casado";


$statement = $conexion->prepare("INSERT INTO `profesores`(`ID`, `nombre`, `Edad`, `Estado civil`, `Materia`, `Documento`) VALUES (NULL,:nombre, '25', :estado, :materia,'1035667')");

$statement-> execute (array (":nombre"=>$nombre,":materia"=>$materia, ":estado"=>$estado));

$statement = $statement->fetchAll();

print_r($statement);

foreach ($statement as $item){
    echo $item ["ID"] .$item["nombre"]. "<br>";
}

?>
