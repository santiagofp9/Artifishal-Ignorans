<section class="container">      
    <!-- Comiezo de tabla promo-->
    <div class="row ">
      
      <div class="col-xs-12 col-md-12 col-lg-12 imgtabla">
        
        <img id="logo2" src="img/logo2.jpg" alt=" ">
        <table id="tabla" class="table table-striped table-bordered">
                <thead>
                    <tr class="bg-primary text-white tituloTabla">
                        <th>Promocion</th>
                        <th>Año</th>
                        <th>Fabrica</th>
                        <th>Activa</th> <!-- Aquí hace falta una función para activar y desactivar la promo -->
                        <th class="text-center">Acción</th>
                    </tr>
                </thead>
          <?php
    include 'conex.php';
        $con = "select promocion.promocion, promoyear.promoyear, fabrica.fabrica, promocion.id_promocion
        FROM promocion INNER JOIN promoyear
        ON promoyear.id_promoyear = promocion.fk_promoyear
        INNER JOIN fabrica 
        ON fabrica.id_fabrica = promocion.fk_fabrica;";
        $r = mysqli_query($link, $con);
    while ($a = mysqli_fetch_array($r)){?>
    <tr>
        <td><?php echo $a[0];?> </td>
        <td><?php echo $a[1];?> </td>
        <td><?php echo $a[2];?> </td>
        <td><?php echo $a[4];?> </td> <!-- Aquí hace falta una función para activar y desactivar la promo -->
        <td><a href="modificar.php?simp=<?php echo $a[3];?>">Editar</a> / 
            <a href="delete.php?simpDelete=<?php echo $a[3];?>">Eliminar</a>
        </td>
    </tr>
    <div class="cajamensaje">

<?php

if(isset($_GET['msj'])){
    if($_GET['msj'] == 'Error'){
      echo '<script type="text/javascript">;
      alert("No se pudo borrar");
      window.location.replace ("http://localhost/FORMULARIO/Artifishal-Ignorans-master/Sprint%203/index.php");
      </script>';

    }else{
      echo  '<script type="text/javascript">;
      alert("Borrado con éxito");
      window.location.replace ("http://localhost/FORMULARIO/Artifishal-Ignorans-master/Sprint%203/index.php");
      </script> ';
        
    }
}

?>

</div>
<?php
}
?>
            </table>
           
      </div>
        
    </div>



<?php

$ocu = $_POST['oculto'];





if($ocu == 5){
    $fab =$_POST['fab'];
    $ciu = $_POST['ciudad'];
    $fabt ="insert into fabrica (fabrica, fk_ciudad) value ('$fab', '$ciu')";
    include 'conex.php';
    mysqli_query($link,$fabt);
    header("location:index.php");
}


echo mysqli_error($link);
?>