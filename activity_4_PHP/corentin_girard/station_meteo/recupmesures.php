<?php
$Mesures = fopen("mesures.txt","w");
$temp = $_GET["temp"];
$lum = $_GET["lum"];
fputs($Mesures,$temp."\n");
fputs($Mesures,$lum."\n");
?>

<!-- 
Q14 : http://localhost:8080/corentin_girard/station_meteo/recupmesures.php?temp=18.1&lum=40
-->