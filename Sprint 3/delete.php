<?php 
    include 'conex.php';
    $borrar = $_GET['simpDelete'];
    $delete = "delete FROM coder WHERE id_coders = '$borrar'";
    mysqli_query($link, $delete);
    echo mysqli_error($link);

    if(mysqli_error($link)){
        header("location:index.php?msj=Error");
        
    }
    else {
        header("location:index.php?msj=Funciona");
        echo  '<script type="text/javascript">;
        alert("Borrado con éxito");
        window.location.replace ("http://localhost/FORMULARIO/Artifishal-Ignorans-master/Sprint%203/index.php");
        </script> ';
    }
?>
