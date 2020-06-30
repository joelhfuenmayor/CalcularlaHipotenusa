<?php

$base = $_GET["cbase"];
 
$altura = $_GET["caltura"];
 
$Hipo = sqrt(pow($base,2) + pow($altura,2));
 
echo "Valor de Hipotenusa del Triangulo Rectangulo es: " . $Hipo;echo" Cm";
 
?> 