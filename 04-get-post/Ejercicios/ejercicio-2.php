<?php
if(isset($_POST["Horas"]) && isset($_POST["Valor"])) {
    $Horas = $_POST["Horas"];
    $Valor = $_POST["Valor"];
    $Resultado = $Horas * $Valor;

    if($Resultado >= 2200000) {
        echo " $Resultado Hay retencion";
    } else {
        echo "  $Resultado No hay retencion";
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
    
<form action="" method="post">

<label for="Horas" required >Horas trabajadas</label>
<input id="Horas" type="text" placeholder"Horas..." required name="Horas"> 
<label for="Valor" required >Valor de la hora</label>
<input id="Valor" type="text" placeholder"Valor..." required name="Valor">
<br>

<button type="submit"> Enviar</button>
<br>
</form>

</body>
</html>