<?php

$ocu = $_POST['oculto'];


/*
$nomc  =$_POST['nomc'];
$apec  =$_POST['apec'];
$dni  =$_POST['dni'];
$anac =$_POST['anac'];
$nac  =$_POST['nac'];*/


if($ocu == 1){
    $fab =$_POST['fab'];
    $ciu = $_POST['ciudad'];
    $fabt ="insert into fabrica (fabrica, fk_ciudad) value ('$fab', '$ciu')";
    include 'conex.php';
    mysqli_query($link,$fabt);
}elseif($ocu == 2){
    $promo =$_POST['promo'];
    $promoy =$_POST['promoy'];
    $promot ="insert into promocion (promocion,fk_promoyear,fk_fabrica) value ('$promo','$promoy','$fab')";
    include 'conex.php';
    mysqli_query($link,$promot);
}
/*
$ciu ="insert into ciudad (ciudad) value ('$ciu')";
include 'conex.php';
mysqli_query($link,$ciu);

$pis ="insert into pais (pais) value ('$pis')";
include 'conex.php';
mysqli_query($link,$pis);*/




/*
$promoyt ="insert into promoyear (promoyear) value ('$promoy')";
include 'conex.php';
mysqli_query($link,$promoyt);

$codert ="insert into coder (nombre,apellidos,dni,nacimiento,nacionalidad) 
value ('$nomc','$apec','$dni','$anac','$nac')";
include 'conex.php';
mysqli_query($link,$codert);*/


?>
