<?php
if(isset($_POST["numero_1"]) && isset($_POST["numero_2"]) && isset($_POST["numero_3"])) {
    $numero_1 = $_POST["numero_1"];
    $numero_2 = $_POST["numero_2"];
    $numero_3 = $_POST["numero_3"];

  
    $numero_mayor = max($numero_1, $numero_2, $numero_3);

    echo "El número mayor es: $numero_mayor";
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

<label for="numero_1" required >1 NUMERO</label>
<input id="numero_1" type="text" placeholder"numero_1..." required name="numero_1"> 
<label for="numero_2" required >2 NUMERO</label>
<input id="numero_2" type="text" placeholder"numero_2..." required name="numero_2">
<label for="numero_3" required >3 NUMERO</label>
<input id="numero_3" type="text" placeholder"numero_3..." required name="numero_3">

<button type="submit"> Enviar</button>
<br>
</form>

</body>
</html>