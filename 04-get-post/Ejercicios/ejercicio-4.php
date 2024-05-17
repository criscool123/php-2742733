<?php
if(isset($_POST["metro"]) && isset($_POST["lisa"])) {
    $metro = $_POST["metro"];
    $lisa = $_POST["lisa"];

    // Verificar si la superficie es lisa o no
    if($lisa == "Si") {
        $costo_por_metro = 2000; // Si es lisa, el costo por metro cuadrado es de 2000 pesos
    } else {
        $costo_por_metro = 4000; // Si no es lisa, el costo por metro cuadrado es de 4000 pesos
    }

    // Calcular el costo total
    $costo_total = $metro * $costo_por_metro;

    echo "El costo total es: $costo_total pesos";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Costo de Pintura</title>
</head>
<body>
    
<form action="" method="post">
    <label for="metro" required >Metros cuadrados</label>
    <input id="metro" type="text" placeholder="Metros cuadrados..." required name="metro"> 

    <label for="lisa" required >¿Superficie lisa?</label>
    <select id="lisa" name="lisa" required>
        <option value="Si">Sí</option>
        <option value="No">No</option>
    </select>

    <button type="submit">Enviar</button>
</form>

</body>
</html>