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

echo "<br>";
echo "<br>";

$amarillo = "amarillo";
$verde = "verde";
$naranja = "naranja";
$rojo = "rojo";
$marron = "marron";
$purpura = "purpura";


switch ($verde) {
  case "verde":
    echo "aire bueno";
    break;
 }

 echo "<br>";

    switch ($amarillo) {
  case "amarillo":
    echo "aire mas o menos";
    break;
 }
 echo "<br>";
 
 switch ($naranja) {
  case "naranja":
    echo "No es saludable para gente sensible";
    break;
 }
 echo "<br>";
 switch ($rojo) {
  case "rojo":
    echo "no es saludable";
    break;
 }
 echo "<br>";
 switch ($purpura) {
  case "purpura":  
    echo "muy poca saludable";
    break;
 }
 echo "<br>";
 switch ($marron) {
  case "marron":  
    echo "peligroso";
    break;
     }

?>
