<?php

$Cliente = "17";
if($Cliente >="12"){
echo "Caja Normal";
}
else if($Cliente <="12"){
  echo "Caja Rapida";  
}

echo "<br>";
echo "<br>";


$Cliente = "7";
if($Cliente >="12"){
echo "Caja Normal";
}
else if($Cliente <="12"){
  echo "Caja Rapida";  
}

echo "<br>";
echo "<br>";



$Nombre = "Mario";

if($Nombre != "Mario"){
echo "Puedes ingresar al VIP";   
 }
    
 else{
echo "no puedes ingresar al VIP";

 }

 echo "<br>";
$Edad = 18;

if($Edad < 18){
echo "Puedes ingresar a la discoteca";   
}

else{
echo "no puede ingresar a la discoteca";    
}



echo "<br>";
echo "<br>";




$Nombre = "Mario";

if($Nombre == "Mario"){
echo "Puedes ingresar al VIP";   
 }
    
 else{
echo "no puedes ingresar al VIP";

 }

 echo "<br>";
$Edad = 18;

if($Edad >= 18){
echo "Puedes ingresar a la discoteca";   
}

else{
echo "no puede ingresar a la discoteca";    
}

echo "<br>";
echo "<br>";


$Estatura = "1,70cm";
if($Estatura == "1,70cm"){
  echo "puedes entrar al equipo ";
}

else{
  echo "No puedes entrar al equipo";
}

echo "<br>";
echo "<br>";

$Velocidad = "27 km";
if($Velocidad == "27 km"){
  echo "Puedes entrar al equipo";
}

else{
  echo "No puedes entrar al equipo";
}

echo "<br>";
echo "<br>";

$Edad = "18";
if($Edad == 18){
echo "entras a divisiones mayores";
}

else{
  echo "entras a Divisiones menores";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$Estatura = "1,70cm";
if($Estatura < "1,70cm"){
  echo "puedes entrar al equipo ";
}

else{
  echo "No puedes entrar al equipo";
}

echo "<br>";
echo "<br>";

$Velocidad = "27 km";
if($Velocidad < "27 km"){
  echo "Puedes entrar al equipo";
}

else{
  echo "No puedes entrar al equipo";
}

echo "<br>";
echo "<br>";

$Edad = "18";
if($Edad < 18){
echo "entras a divisiones mayores";
}

else{
  echo "entras a Divisiones menores";
}

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
