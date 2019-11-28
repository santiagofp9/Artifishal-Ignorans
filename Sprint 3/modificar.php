<?php

$simplon = $_GET['simp'];
$sqlcon="select nombre, apellidos, dni, nacimiento, nacionalidad, fk_promocion from coder where id_coders = '$simplon' ";
include 'conex.php';
$r= mysqli_query($link,$sqlcon);
$a = mysqli_fetch_array($r);
?> 
<form method="post">
      <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" name="nomc" class="form-control v24"  value="<?php echo $a[0];?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Apellido</label>
        <input type="text" name="apec" class="form-control v50"  value="<?php echo $a[1];?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Fecha de nacimiento</label>
        <input type="text" name="anac" class="form-control vdate"  value="<?php echo $a[2];?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">DNI</label>
        <input type="text" name="dni" class="form-control v10"  value="<?php echo $a[3];?>">
      </div>
      <div class="form-row">
        <div class="col">
        <label for="formGroupExampleInput2">Nacionalidad</label>
        <select name="nac" id="nac" class="form-control">
        <?php 
            include 'conex.php';
            $consulta = "select id_pais, nacionalidad from pais";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
            <?php      }  ?>
        </select>
        </div>
        <div class="col">
        <label for="formGroupExampleInput2">Promoción</label>
        <select name="fknazi" id="fknazi" class="form-control">
        <?php 
            include 'conex.php';
            $consulta = "select id_promocion, promocion from promocion";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
            <?php      }  ?>
        </select>
        </div>
        
      </div>  
      <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" id="enviarc" type="submit">Enviar</button>
    </div>   
</div> 
    </form>

    <?php
    if(isset($_POST['nomc'])){ 
    $nomc  =$_POST['nomc'];
    $apec  =$_POST['apec'];
    $dni  =$_POST['dni'];
    $anac =$_POST['anac'];
    $nac  =$_POST['nac'];
    $fknazi= $_POST['fknazi'];
    
    $update ="update coder set 
    nombre ='$nomc', apellidos='$apec', dni='$dni', nacimiento='$anac', nacionalidad='$nac', fk_promocion='$fknazi' where id_coders = '$simplon'";

    mysqli_query($link,$update);
    echo $update;
    /*if (mysqli_error()){
        header("location:index.php?msj=1");
    }
    else{
         header("location:index.php?msj=0");
    }*/
   
    }
    echo mysqli_error($link);
    
?>


