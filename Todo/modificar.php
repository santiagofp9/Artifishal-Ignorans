

<?php
$mod3 = $_GET['modCoder'];
$sqlcon3="select nombre, apellido1, apellido2, dni, nacimiento, nacionalidad, fk_promocion from coder where id_coders = '$mod3' ";
include 'conex.php';
$r3= mysqli_query($link,$sqlcon3);
$a3 = mysqli_fetch_array($r3);
?> 
<form method="post">
      <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" name="nomc" class="form-control v24"  value="<?php echo $a3[0];?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">1º Apellido</label>
        <input type="text" name="apec1" class="form-control v50"  value="<?php echo $a3[1];?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">2º Apellido</label>
        <input type="text" name="apec2" class="form-control v50"  value="<?php echo $a3[2];?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Fecha de nacimiento</label>
        <input type="text" name="anac" class="form-control vdate"  value="<?php echo $a3[3];?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">DNI</label>
        <input type="text" name="dni" class="form-control v10"  value="<?php echo $a3[4];?>">
      </div>
      <div class="form-row">
        <div class="col">
        <label for="formGroupExampleInput2">Nacionalidad</label>
        <select name="nac" id="nac" class="form-control">
        <?php 
            include 'conex.php';
            $consulta3 = "select id_pais, nacionalidad from pais";
            $resultado3 = mysqli_query($link, $consulta3);
            while ($arr3 = mysqli_fetch_array($resultado3)) { ?>
                <option value="<?php echo $arr3[0];?>"selected>
                    <?php echo $arr3[1];?>
                               
                </option>
            <?php      }  ?>
        </select>
        </div>
        <div class="col">
        <label for="formGroupExampleInput2">Promoción</label>
        <select name="fknazi" id="fknazi" class="form-control">
        <?php 
            include 'conex.php';
            $consulta3 = "select id_promocion, promocion from promocion";
            $resultado3 = mysqli_query($link, $consulta3);
            while ($arr3 = mysqli_fetch_array($resultado3)) { ?>
                <option value="<?php echo $arr3[0];?>"selected>
                    <?php echo $arr3[1];?>
                               
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
    $apec1  =$_POST['apec1'];
    $apec2  =$_POST['apec2'];
    $dni  =$_POST['dni'];
    $anac =$_POST['anac'];
    $nac  =$_POST['nac'];
    $fknazi= $_POST['fknazi'];
    
    $update3 ="update coder set 
    nombre ='$nomc', apellido1='$apec1', apellido2='$apec2', dni='$dni', nacimiento='$anac', nacionalidad='$nac', fk_promocion='$fknazi' where id_coders = '$mod3'";

    mysqli_query($link,$update3);
    echo $update3;
    /*if (mysqli_error()){
        header("location:index.php?msj=1");
    }
    else{
         header("location:index.php?msj=0");
    }*/
   
    }
    echo mysqli_error($link);
    
?>


