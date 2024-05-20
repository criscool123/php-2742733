
<?php

function validarEdad($edad){   
if($edad >= 18){
    echo "Mayor de edad";
}
else{
    echo "Menor de edad";
}
}

validarEdad(isset($_POST["edad"]) ? $_POST["edad"]:12);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>

    <h1>Funciones</h1>

    <form action="<?php echo $_SERVER["php_SELF"]?>" method="POST" >
</form>
</body>
</html>