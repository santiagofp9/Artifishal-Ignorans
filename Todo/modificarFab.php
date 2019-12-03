<?php

$mod1 = $_GET['modFab'];
$sqlcon1="select fabrica, fk_ciudad from fabrica where id_fabrica = '$mod1' ";
include 'conex.php';
$r1= mysqli_query($link,$sqlcon1);
$a1 = mysqli_fetch_array($r1);
?> 
<form method="post">
      <div class="form-group">
        <label for="formGroupExampleInput">Fábrica</label>
        <input type="text" name="fab" class="form-control v24"  value="<?php echo $a1[0];?>">
      </div>

      <div class="form-row">
        <div class="col">
        <label for="formGroupExampleInput2">Ciudad</label>
        <select name="ciudadf" id="fabciudad" class="form-control">
        <?php 
            include 'conex.php';
            $consulta1 = "select id_ciudad, ciudad from ciudad";
            $resultado1 = mysqli_query($link, $consulta1);
            while ($arr1 = mysqli_fetch_array($resultado1)) { ?>
                <option value="<?php echo $arr1[0];?>"selected>
                    <?php echo $arr1[1];?>
                               
                </option>
            <?php      }  ?>
        </select>
        </div>

        
      <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" id="enviarf" type="submit">Enviar</button>
    </div>   
</div> 
    </form>

    <?php
    if(isset($_POST['fab'])){ 
    $fab  =$_POST['fab'];
    $ciudadf  =$_POST['ciudadf'];

    
    $update1 ="update fabrica set 
    fabrica ='$fab', fk_ciudad='$ciudadf' where id_fabrica = '$mod1'";

    mysqli_query($link,$update1);

    if (mysqli_error()){
        header("location:index.php?msj=1");
    }
    else{
         header("location:index.php?msj=0");
    }
   
    }
    echo mysqli_error($link);
    
?>



