
<?php 

//ESTATUS FABRICA
    include 'conex.php';
    $estado = $_GET['simpDeleteFab'];
    $delete = "UPDATE fabrica SET fabricaStatus= 0 WHERE id_fabrica = '$estado'";
    mysqli_query($link, $delete);
    echo mysqli_error($link);

    if(mysqli_error($link)){
        header("location:index.php?msj=Error");
        
    }
    else {
        header("location:index.php?msj=Funciona");
        echo  '<script type="text/javascript">;
        alert("Status actualizado con éxito");
        window.location.replace ("http://localhost/FORMULARIO/Artifishal-Ignorans-master/Sprint%203/index.php");
        </script> ';
    }
?>


<?php 

// ESTATUS PROMOCION
    $estado = $_GET['simpDeletePromo'];
    $delete = "UPDATE promocion SET statusPromocion= 0 WHERE id_promocion = '$estado'";
    mysqli_query($link, $delete);
    echo mysqli_error($link);

    if(mysqli_error($link)){
        header("location:index.php?msj=Error");
        
    }
    else {
        header("location:index.php?msj=Funciona");
        echo  '<script type="text/javascript">;
        alert("Status actualizado con éxito");
        window.location.replace ("http://localhost/FORMULARIO/Artifishal-Ignorans-master/Sprint%203/index.php");
        </script> ';
    }
?>



<?php 

// ESTATUS CODER

    $estado = $_GET['simpDeleteCoder'];
    $delete = "UPDATE coder SET status= 0 WHERE id_coders = '$estado'";
    mysqli_query($link, $delete);
    echo mysqli_error($link);

    if(mysqli_error($link)){
        header("location:index.php?msj=Error");
        
    }
    else {
        header("location:index.php?msj=Funciona");
        echo  '<script type="text/javascript">;
        alert("Status actualizado con éxito");
        window.location.replace ("http://localhost/FORMULARIO/Artifishal-Ignorans-master/Sprint%203/index.php");
        </script> ';
    }
?>
