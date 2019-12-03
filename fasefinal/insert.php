<?php

$ocu = $_POST['oculto'];





if($ocu == 1){
    $fab =$_POST['fab'];
    $ciu = $_POST['ciudad'];
    $fabt ="insert into fabrica (fabrica, fk_ciudad, fabricaStatus) value ('$fab', '$ciu', 1)";
    include 'conex.php';
    mysqli_query($link,$fabt);
    header("location:index.php");
}elseif($ocu == 2){
    $promo =$_POST['promo'];
    $promoy =$_POST['promoy'];
    $fkfab =$_POST['fabpromo'];
    $promot ="insert into promocion (promocion,fk_promoyear,fk_fabrica, statusPromocion) value ('$promo','$promoy','$fkfab', 1)";
    include 'conex.php';
    mysqli_query($link,$promot);
    header("location:index.php");
}elseif($ocu == 3){
    $nomc  =$_POST['nomc'];
    $apec1  =$_POST['apec1'];
    $apec2  =$_POST['apec2'];
    $dni  =$_POST['dni'];
    $anac =$_POST['anac'];
    $nac  =$_POST['nac'];
    $fknazi= $_POST['fknazi'];
    $codert ="insert into coder (nombre,apellido1,apellido2,dni,nacimiento,nacionalidad,fk_promocion, status) value ('$nomc','$apec1','$apec2','$dni','$anac','$nac','$fknazi', 1)";
    include 'conex.php';
    mysqli_query($link,$codert);
    header("location:index.php");
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

echo mysqli_error($link);
?>
