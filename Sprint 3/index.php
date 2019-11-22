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
          <div class="col-xs-3 col-md-3 col-lg-3 alogo">
              
          <img src="img/logo3.png" id="logo3" alt="">  
              
          </div>
          
          <!--hueco en blanco-->
          
          <div class="col-xs-6 col-md-6 col-lg-6 centrocab">
          
          </div>
          
          <!--hueco login-->
          
          <div class="col-xs-3 col-md-3 col-lg-3 loginarea">
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
        <div class="col-xs-1 col-md-1 col-lg-1 blank">
        </div>
          
          
      </header>
      
    <!-- Fin de Cabecera-->
      
 </section>     
<section class="container">      
    <!-- Comiezo de tabla con imagen-->
    <div class="row ">
      
      <div class="col-xs-12 col-md-12 col-lg-12 imgtabla">
        
        <img id="logo2" src="img/logo2.jpg" alt=" ">
        <table id="tabla" class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white tituloTabla">
						<th>ID#</th>
						<th>Coder</th>
						<th>Promoción</th>
						<th>Fábrica</th>
						<th class="text-center">Acción</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$s	=	'';
					foreach($userData as $val){
						$s++;
					?>
					<tr>
						<td><?php echo $s;?></td>
						<td><?php echo $val['username'];?></td>
						<td><?php echo $val['useremail'];?></td>
						<td><?php echo $val['userphone'];?></td>
						<td align="center">
							<a href="edit-users.php?editId=<?php echo $val['id'];?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
							<a href="delete.php?delId=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
           
      </div>
        
    </div>
      
    <!-- fin de tabla con imagen-->  
      
    
    <!-- comienzo formulario -->
<div class="row"> 
    <div class="col-xs-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" id="bagregar" href="#formularios" type="button" data-toggle="collapse" data-target="#formularios" aria-expanded="false" aria-controls="formularios">
    Agregar
    </button> 
</div>
</div>
    
    
<div class="collapse" id="formularios">   
      <!-- row fabrica-->
<div id="fabrica">   
    <h1>Fabrica</h1>
    <form>
      <div class="form-row">
        <div class="col">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" name="fab" class="form-control"  placeholder="Nombre de fabrica">
        </div>
        <div class="col">
        <label for="formGroupExampleInput">Ciudad</label>
        <select name="ciudad" id="fabciudad" class="form-control">
        <?php
            include 'conex.php';
            $consulta = "select ciudad from ciudad";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
         <?php       } ?>
        </select>
        </div>
      </div>
     
    </form>
</div>     
      <!--fin row fabrica-->
      
      <!--comienzo row promo-->
     
<div id="promo">   
    <h1>Promo</h1>
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" name="promo" class="form-control"  placeholder="Nombre de promoción">
      </div>
      <div class="form-row">
        <div class="col">
        <label for="formGroupExampleInput2">Año</label>
        <select name="promoyear" id="promoyear" class="form-control">
        <?php
            include 'conex.php';
            $consulta = "select promoyear from promoyear";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
         <?php       } ?>
        </select>
        </div>
        <div class="col">
        <label for="formGroupExampleInput2">Fábrica</label>
        <select name="fabpromo" id="fabpromo" class="form-control">
        <?php
            include 'conex.php';
            $consulta = "select fabrica from fabrica";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
         <?php       } ?>
        </select>
        </div>
      </div>
    </form>
</div>     
      <!--fin row promo-->
      
      <!--comiezo row coders-->
 <div id="coders"> 
     <h1>Coders</h1>
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" name="nomc" class="form-control"  placeholder="Nombre de coder">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Apellido</label>
        <input type="text" name="apec" class="form-control"  placeholder="Apellido de coder">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Fecha de nacimiento</label>
        <input type="text" name="anac" class="form-control"  placeholder="Fecha de nacimiento">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">DNI</label>
        <input type="text" name="dni" class="form-control"  placeholder="No. Identificación">
      </div>
      <div class="form-row">
        <div class="col">
        <label for="formGroupExampleInput2">Nacionalidad</label>
        <select name="nac" id="nac" class="form-control">
        <?php
            include 'conex.php';
            $consulta = "select nacionalidad from pais";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
         <?php       } ?>
        </select>
        </div>
        <div class="col"><!-- a modificar-->
        <label for="formGroupExampleInput2">Promoción</label>
        <select name="nac" id="nac" class="form-control">
        <?php
            include 'conex.php';
            $consulta = "select nacionalidad from pais";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
         <?php       } ?>
        </select>
        </div>
      </div>  
    </form>
</div>     
    <!--fin row coders-->  
    
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
    <button class="btn btn-danger" id="enviar" type="submit">Enviar</button>
    </div>   
</div> 
    
</div>       
    
    

    <!--fin formulario-->  
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/fancy.js"></script>

  </body>
</html>
