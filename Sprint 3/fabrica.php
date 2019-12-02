
<section class="container">      
    <!-- Comiezo de tabla fabrica-->
    <div class="row ">
      
      <div class="col-xs-12 col-md-12 col-lg-12 imgtabla">
        
        <img id="logo2" src="img/logo2.jpg" alt=" ">
        <table id="tabla" class="table table-striped table-bordered">
                <thead>
                    <tr class="bg-primary text-white tituloTabla">
                        <th>Fabrica</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Activa</th> <!-- Aquí hace falta una función para activar y desactivar la fábrica -->
                        <th class="text-center">Acción</th>
                    </tr>
                </thead>
          <?php
    include 'conex.php';
        $con = "select farbica.fabrica, ciudad.ciudad, pais.pais, fabrica.id_fabrica
        FROM fabrica INNER JOIN ciudad
        ON ciudad.id_ciudad = fabrica.fk_ciudad
        INNER JOIN pais 
        ON pais.id_pais = ciudad.fk_pais;";
        $r = mysqli_query($link, $con);
    while ($a = mysqli_fetch_array($r)){?>
    <tr>
        <td><?php echo $a[0];?> </td>
        <td><?php echo $a[1];?> </td>
        <td><?php echo $a[2];?> </td>
        <td><?php echo $a[4];?> </td> <!-- Aquí hace falta una función para activar y desactivar la fábrica -->
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





if($ocu == 4){
    $fab =$_POST['fab'];
    $ciu = $_POST['ciudad'];
    $fabt ="insert into fabrica (fabrica, fk_ciudad) value ('$fab', '$ciu')";
    include 'conex.php';
    mysqli_query($link,$fabt);
    header("location:index.php");
}

echo mysqli_error($link);
?>