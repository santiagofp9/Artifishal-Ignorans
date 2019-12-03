<?php

$mod2 = $_GET['modPromo'];
$sqlcon2="select promocion, fk_promoyear, fk_fabrica from promocion where id_promocion = '$mod2' ";
include 'conex.php';
$r2= mysqli_query($link,$sqlcon2);
$a2 = mysqli_fetch_array($r2);
?> 
<form method="post">
      <div class="form-group">
        <label for="formGroupExampleInput">Promoción</label>
        <input type="text" name="promo" class="form-control v24"  value="<?php echo $a2[0];?>">
      </div>

      <div class="form-row">
        <div class="col">
        <label for="formGroupExampleInput2">Año Promoción</label>
        <select name="promoy" id="promoyear" class="form-control">
        <?php 
            include 'conex.php';
            $consulta2 = "select id_promoyear, promoyear from promoyear";
            $resultado2 = mysqli_query($link, $consulta2);
            while ($arr2 = mysqli_fetch_array($resultado2)) { ?>
                <option value="<?php echo $arr2[0];?>"selected>
                    <?php echo $arr2[1];?>
                               
                </option>
            <?php      }  ?>
        </select>
        </div>

        <div class="col">
        <label for="formGroupExampleInput2">Fábrica</label>
        <select name="fabpromo" id="fabpromo" class="form-control">
        <?php 
            include 'conex.php';
            $consulta2 = "select id_fabrica, fabrica from fabrica";
            $resultado2 = mysqli_query($link, $consulta2);
            while ($arr2 = mysqli_fetch_array($resultado2)) { ?>
                <option value="<?php echo $arr2[0];?>"selected>
                    <?php echo $arr2[1];?>
                               
                </option>
            <?php      }  ?>
        </select>
        </div>
        
      </div>  
      <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" id="enviarp" type="submit">Enviar</button>
    </div>   
</div> 
    </form>

    <?php
    if(isset($_POST['promo'])){ 
    $promo  =$_POST['promo'];
    $promoyear  =$_POST['promoy'];
    $fabpromo  =$_POST['fabpromo'];
    
    $update2 ="update promocion set 
    promocion ='$promo', fk_promoyear='$promoyear', fk_fabrica='$fabpromo' where id_promocion = '$mod2'";

    mysqli_query($link,$update2);

    if (mysqli_error()){
        header("location:index.php?msj=1");
    }
    else{
         header("location:index.php?msj=0");
    }
   
    }
    echo mysqli_error($link);
    
?>



