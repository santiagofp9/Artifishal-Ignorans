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
              
          <a href="index.php"><img src="img/logo3.png" id="logo3" alt=""></a>  
              
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
<section class="container modificarPromo">
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
            $consulta2 = "select id_fabrica, fabrica from fabrica where fabricaStatus = 1";
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

</section>

