<?php

$fab =$_POST['fabrica'];
$promo =$_POST['promocion'];
$promoy =$_POST['promoyear'];

$nomc  =$_POST['nombre'];
$apec  =$_POST['apellidos'];
$dni  =$_POST['dni'];
$anac =$_POST['nacimiento'];
$nac  =$_POST['nacionalidad'];

$fabt ="insert into fabrica (fabrica) value ('$fab')";
include 'conex.php';
mysqli_query($link,$fabt);

$promot ="insert into promocion ('promocion') value ('$promo')";
include 'conex.php';
mysqli_query($link,$promot);

$promoyt ="insert into promoyear ('promoyear') value ('$promoy')";
include 'conex.php';
mysqli_query($link,$promoyt);

$codert ="insert into coder ('nombre','apellidos','dni','nacimiento','nacionalidad') 
value ('$nomc','$apec','$dni','$anac','$nac')";
include 'conex.php';
mysqli_query($link,$codert);

mysql_error($link); 
?>