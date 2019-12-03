<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
  <title>Simplon CRUD</title>
  </head>
<body>
<section class="container-fluid">
        
   <!-- Cabecera-->
      
       <!--hueco logo-->
      
      <header class="row cabecera">
          <div class="col-xs-4 col-md-4 col-lg-4 alogo">
              
          <img src="img/logo3.png" id="logo3" alt="">  
              
          </div>
          
          <!--hueco en blanco-->
        
              <div class="col-xs-4 col-md-4 col-lg-4 centrocab" id="logo2">
                  
               <!--<img id="logo2" src="img/logo2.jpg" alt=" ">-->
              </div>
          
          <!--hueco login-->
          
          <div class="col-xs-4 col-md-4 col-lg-4 loginarea">
            <div class="form-group row">
            <div class="col-xs-8 col-md-8 col-lg-8">
              <div class="form-group row">
                <div class="col-xs-12 col-md-12 col-lg-12 uplogincol">
                  <input type="text" class="form-control" name="user" id="user" placeholder="Usuario">
                </div>
              </div>
              <div class="form-group row">
                  <div class="col-xs-12 col-md-12 col-lg-12 ">
                    <input type="password" class="form-control" name="pass" id="password" placeholder="Contraseña">
                  </div>
              </div>
            </div> 
            <div class="col-xs-4 col-md-4 col-lg-4 submitbtn">
                <div class="form-group row">
                    <input type="submit" name="submit" class="col-xs-12 col-md-12 col-lg-12 form-control submitbutton btn btn-danger" value="Submit">
                </div>
            </div> 
          </div>   
              
        </div> 
          
           <!--hueco en blanco-->
        
        </div>
          
          
      </header>
      
    <!-- Fin de Cabecera-->
      
 </section>     


</body>





<section class="container modificarCoder">

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
            $consulta3 = "select id_promocion, promocion from promocion where statusPromocion = 1";
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
    if (mysqli_error()){
        header("location:index.php?msj=1");
    }
    else{
         header("location:index.php?msj=0");
    }
   
    }
    echo mysqli_error($link);
    
?>

</section>
