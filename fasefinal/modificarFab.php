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





<section class="container modificarFab">


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


    </section>
