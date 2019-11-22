<?php

$fab =$_POST['fab'];
$promo =$_POST['promo'];
$promoy =$_POST['promoy'];

$nomc  =$_POST['nomc'];
$apec  =$_POST['apec'];
$dni  =$_POST['dni'];
$anac =$_POST['anac'];
$nac  =$_POST['nac'];

$fabt ="insert into fabrica (fabrica) value ('$fab')";
include 'conex.php';
mysqli_query($link,$fabt);

/*

$promot ="insert into promocion (promocion) value ('$promo')";
include 'conex.php';
mysqli_query($link,$promot);

$promoyt ="insert into promoyear (promoyear) value ('$promoy')";
include 'conex.php';
mysqli_query($link,$promoyt);

$codert ="insert into coder (nombre,apellidos,dni,nacimiento,nacionalidad) 
value ('$nomc','$apec','$dni','$anac','$nac')";
include 'conex.php';
mysqli_query($link,$codert);*/

echo mysqli_error($link); 
?>
