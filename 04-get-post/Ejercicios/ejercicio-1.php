<?php


$Edad = $_GET["Edad"];

if($Edad >= 18){
echo "Eres mayor de edad";
}

else{
  echo "Eres menor de edad";
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
    
<form action="" method="">
    <label for="Edad">Edad</label>
<input type="text" placeholder"Edad..." name="Edad">

<button type="submit"> Enviar</button>
<br>

</body>
</html>