<?php include_once('conex.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
  <title>Hello, world!</title>
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
          <div class="row">
              <div class="col-xs-6 col-md-6 col-lg-6 centrocab">
               <img id="logo2" src="img/logo2.jpg" alt=" ">
              </div>
          </div>
          <!--hueco login-->
          
          <div class="col-xs-2 col-md-2 col-lg-2 loginarea">
            <div class="form-group row">
            <div class="col-xs-8 col-md-8 col-lg-8">
              <div class="form-group row">
                <div class="col-xs-12 col-md-12 col-lg-12 uplogincol">
                  <input type="text" class="form-control" name="user" placeholder="Usuario">
                </div>
              </div>
              <div class="form-group row">
                  <div class="col-xs-12 col-md-12 col-lg-12">
                    <input type="password" class="form-control" name="pass" placeholder="Contraseña">
                  </div>
              </div>
            </div> 
            <div class="col-xs-3 col-md-3 col-lg-3 submitbtn">
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
<section class="container">      
    <!-- Comiezo de tabla con imagen-->
    <!--<div class="row ">
      
      <div class="col-xs-12 col-md-12 col-lg-12 imgtabla">
        
       
        <table id="tabla" class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white tituloTabla">
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Promoción</th>
						<th>Fábrica</th>
						<th class="text-center">Acción</th>
					</tr>
				</thead>
          <?php
    include 'conex.php';
        $con = "select coder.nombre, coder.apellidos, promocion.promocion, fabrica.fabrica, coder.id_coders
        FROM coder INNER JOIN promocion
        ON promocion.id_promocion = coder.fk_promocion
        INNER JOIN fabrica 
        ON fabrica.id_fabrica = promocion.fk_fabrica;";
        $r = mysqli_query($link, $con);
    while ($a = mysqli_fetch_array($r)){?>
    <tr>
        <td><?php echo $a[0];?> </td>
        <td><?php echo $a[1];?> </td>
        <td><?php echo $a[2];?> </td>
        <td><?php echo $a[3];?> </td>
        <td><a href="modificar.php?simp=<?php echo $a[4];?>">Editar</a> / 
            <a href="delete.php?simpDelete=<?php echo $a[4];?>">Eliminar</a>
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
        
    </div>-->
      
    <!-- fin de tabla con imagen-->  
      
    
    <!-- comienzo formulario -->
    
   
    
    
    
<div class="row"> 
    <div class="col-xs-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" id="bagregar" href="#formularios, #tablafabrica" type="button" data-toggle="collapse" data-target="#formularios, #tablafabrica" aria-expanded="false" aria-controls="formularios">
    Fabrica
    </button> 
</div>
</div>
    
 
    
<div class="row collapse" id="tablafabrica"><!-- tabla de fabrica-->
      
     
        <div class="col-xs-12 col-md-12 col-lg-12 tablaconsulta">
       
        <table id="tablafabrica" class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white tituloTabla">
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Promoción</th>
						<th>Fábrica</th>
						<th class="text-center">Acción</th>
					</tr>
				</thead>
          <?php
    include 'conex.php';
        $con = "select coder.nombre, coder.apellidos, promocion.promocion, fabrica.fabrica, coder.id_coders
        FROM coder INNER JOIN promocion
        ON promocion.id_promocion = coder.fk_promocion
        INNER JOIN fabrica 
        ON fabrica.id_fabrica = promocion.fk_fabrica;";
        $r = mysqli_query($link, $con);
    while ($a = mysqli_fetch_array($r)){?>
    <tr>
        <td><?php echo $a[0];?> </td>
        <td><?php echo $a[1];?> </td>
        <td><?php echo $a[2];?> </td>
        <td><?php echo $a[3];?> </td>
        <td><a href="modificar.php?simp=<?php echo $a[4];?>">Editar</a> / 
            <a href="delete.php?simpDelete=<?php echo $a[4];?>">Eliminar</a>
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
    <!--fin tabla fabrica-->     
    
    
    
    
    
<div class="collapse" id="formularios">   
      <!-- row fabrica-->
<div id="fabrica">   
    <h1>Fabrica</h1>
    <form action="insert.php" method="post" id="formFabrica">
      <div class="form-row">
        <div class="col">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" name="fab" class="form-control v32" id="nombreFabrica"  placeholder="Nombre de fabrica">
        <span id="mensaje"></span>
        </div>
        <div class="col">
        <label for="formGroupExampleInput">Ciudad</label>
        <select name="ciudad" id="fabciudad" class="form-control">
        <?php 
            include 'conex.php';
            $consulta = "select id_ciudad, ciudad from ciudad";
            $resultado = mysqli_query($link,$consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>">
                    <?php echo $arr[1];?>
                               
                </option>
         <?php       }  ?>
        </select>
        </div>
        <input type="hidden" name="oculto" value="1">
      </div> 

      <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" id="enviarf" type="submit">Enviar</button>
    </div>   
</div> 
     
    </form>
</div>

  
    
    
    
</div>   
      <!--fin row fabrica-->
      
      <!--comienzo row promo-->
    
 <div class="row"> 
    <div class="col-xs-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" id="bagregar2" href="#formularios2, #tablapromo" type="button" data-toggle="collapse" data-target="#formularios2, #tablapromo" aria-expanded="false" aria-controls="formularios2">
    Promoción
    </button> 
</div>
</div>   
    
    
 
 <div class="row collapse" id="tablapromo"><!-- tabla de promo-->
      
      <div class="col-xs-12 col-md-12 col-lg-12 tablaconsulta">
        
       
        <table id="tabla" class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white tituloTabla">
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Promoción</th>
						<th>Fábrica</th>
						<th class="text-center">Acción</th>
					</tr>
				</thead>
          <?php
    include 'conex.php';
        $con = "select coder.nombre, coder.apellidos, promocion.promocion, fabrica.fabrica, coder.id_coders
        FROM coder INNER JOIN promocion
        ON promocion.id_promocion = coder.fk_promocion
        INNER JOIN fabrica 
        ON fabrica.id_fabrica = promocion.fk_fabrica;";
        $r = mysqli_query($link, $con);
    while ($a = mysqli_fetch_array($r)){?>
    <tr>
        <td><?php echo $a[0];?> </td>
        <td><?php echo $a[1];?> </td>
        <td><?php echo $a[2];?> </td>
        <td><?php echo $a[3];?> </td>
        <td><a href="modificar.php?simp=<?php echo $a[4];?>">Editar</a> / 
            <a href="delete.php?simpDelete=<?php echo $a[4];?>">Eliminar</a>
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
        
    </div>      <!-- fin tabla de promo-->
    
    
    
    
    
    
    
    
<div class="collapse" id="formularios2">     
<div id="promo">   
    <h1>Promo</h1>
    <form action="insert.php" method="post" id="formPromocion">
      <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" name="promo" class="form-control v32"  id="nombrePromocion" placeholder="Nombre de promoción">
        <span class="mensaje"></span>
      </div>
      <div class="form-row">
        <div class="col">
        <label for="formGroupExampleInput2">Año</label>
        <select name="promoy" id="promoyear" class="form-control">
        <?php 
            include 'conex.php';
            $consulta = "select id_promoyear, promoyear from promoyear";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
         <?php       }  ?>
        </select>
        </div>
        <div class="col">
        <label for="formGroupExampleInput2">Fábrica</label>
        <select name="fabpromo" id="fabpromo" class="form-control v32">
        <?php 
            include 'conex.php';
            $consulta = "select id_fabrica, fabrica from fabrica";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
            <?php      }  ?>
        </select>
        </div>
        <input type="hidden" name="oculto" value="2">
      </div>

      <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" id="enviarp" type="submit">Enviar</button>
    </div>   
</div> 
    </form>
</div>     
    
</div> 
      <!--fin row promo-->
      
      <!--comiezo row coders-->
    
<div class="row"> 
    <div class="col-xs-12 col-md-12 col-lg-12 ">
    <button class="btn btn-danger" id="bagregar3" href="#formularios3, #tablacoders" type="button" data-toggle="collapse" data-target="#formularios3, #tablacoders" aria-expanded="false" aria-controls="formularios3">
    Coders
    </button> 
</div>
</div>    
    
    
 <div class="row collapse" id="tablacoders"><!-- tabla de coders-->
      
      <div class="col-xs-12 col-md-12 col-lg-12 tablaconsulta">
        
       
        <table id="tabla" class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white tituloTabla">
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Promoción</th>
						<th>Fábrica</th>
						<th class="text-center">Acción</th>
					</tr>
				</thead>
          <?php
    include 'conex.php';
        $con = "select coder.nombre, coder.apellidos, promocion.promocion, fabrica.fabrica, coder.id_coders
        FROM coder INNER JOIN promocion
        ON promocion.id_promocion = coder.fk_promocion
        INNER JOIN fabrica 
        ON fabrica.id_fabrica = promocion.fk_fabrica;";
        $r = mysqli_query($link, $con);
    while ($a = mysqli_fetch_array($r)){?>
    <tr>
        <td><?php echo $a[0];?> </td>
        <td><?php echo $a[1];?> </td>
        <td><?php echo $a[2];?> </td>
        <td><?php echo $a[3];?> </td>
        <td><a href="modificar.php?simp=<?php echo $a[4];?>">Editar</a> / 
            <a href="delete.php?simpDelete=<?php echo $a[4];?>">Eliminar</a>
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
        
    </div>      <!-- fin tabla de promo-->   
    
    
    
    
    
    
    
    
<div class="collapse" id="formularios3"> 
 <div id="coders"> 
     <h1>Coders</h1>
    <form action="insert.php" method="post" id="formCoders">
      <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" name="nomc" class="form-control v24"  id="nombreCoder" placeholder="Nombre de coder">
        <span class="mensaje"></span>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Apellidos</label>
        <input type="text" name="apec" class="form-control v50"  id="apellidoCoder" placeholder="Apellido de coder">
        <span class="mensaje"></span>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Fecha de nacimiento</label>
        <input type="text" name="anac" class="form-control vdate" id="nacimientoCoder"  placeholder="Fecha de nacimiento">
        <span class="mensaje"></span>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">DNI</label>
        <input type="text" name="dni" class="form-control v10" id="dniCoder"  placeholder="No. Identificación">
        <span class="mensaje"></span>
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
        <input type="hidden" name="oculto" value="3">
      </div>  
      <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" id="enviarc" type="submit">Enviar</button>
    </div>   
</div> 
    </form>
    
</div>     
    
</div> 
    <!--fin row coders-->  
    

    
    
    
    

    <!--fin formulario-->  
      
    <div class="mensaje"> 
    <?php  
    if (isset($_GET['msj'])){
        if($_GET['msj']== 1){
        echo "error en la modificacion";
        }
        else{
        echo "exito";
        }
    }
    
    ?>

    </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/fancy.js"></script>
    
  </body>
</html>
