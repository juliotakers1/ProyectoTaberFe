<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../logo.png" />
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asistencias</title>

    
</head>
<body>
<!--el container se puede poner aqui-->
<div class="container">
<section class="title mx-10">
		<!--<h1 class="">Colegio Cristiano Tabernáculo de la Fe</h1>-->
	</section>
<nav class="navegacion">
		<ul class="menu">

			<!-- <li class="first-item">
				<a href="./inicio.html">
					<img src="../img/home.jpg" alt="" class="imagen">
					<span class="text-item">Inicio</span>
					<span class="down-item"></span>
                </a>
               
			</li>-->

			<li>
				<a href="./AgregarAsistencia.php">
					<img src="../img/us.jpg" alt="" class="imagen">
					<span class="text-item">Asistencia</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
                    
				<a href="./AgregarReserva.php">
					<img src="../img/servicios.jpg" alt="" class="imagen">
					<span class="text-item">Reservación</span>
                    <span class="down-item"></span>
                   
                </a>
               
           
			<li>
				<a href="AgregarAlumno.php">
					<img src="../img/blog.jpg" alt="" class="imagen">
					<span class="text-item">Alumnos</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="../vistas/AgregarUsuario.php">
					<img src="../img/web.jpg" alt="" class="imagen">
					<span class="text-item">Usuarios</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="../includes/logout.php">
					<img src="../img/salirr.jpg" alt="" class="imagen">
					<span class="text-item">Salir</span>
					<span class="down-item"></span>
				</a>
			</li>

		</ul>
    </nav>
  
   
    <h1 class="text-center">Listado Asistencia</h1>
    <button type="button" class="btn btn-info " data-toggle="modal" onclick="location.href='../vistas/AgregarAsis.php'">
Parvúlos Primaria
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/primeroPrimaria.php'">
Primero Primaria
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/segundoPrimaria.php'">
Segundo Primaria
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/terceroPrimaria.php'">
Tercero Primaria
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/cuartoPrimaria.php'">
Cuarto Primaria
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/quintoPrimaria.php'">
Quinto Primaria
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/sextoPrimaria.php'">
Sexto Primaria
</button>
<br>
<br>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/primeroBasico.php'">
Primero Básico
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/segundoBasico.php'">
Segundo Básico
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/terceroBasico.php'">
Tercero Básico
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/cuartoBachCL.php'">
Cuarto Bach CL
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/quintoBachCL.php'">
Quinto Bach CL
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/cuartoBachPC.php'">
Cuarto Bach CP
</button>
<button type="button" class="btn btn-info" data-toggle="modal" onclick="location.href='../grados2/quintoBachPC.php'">
Quinto Bach CP
</button>
<br>
<br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertar">
Ingresar Asistencia
</button>
    <br>
    <br>

    <!--boton agregar-->

    
    <table class="table table-striped">
    <thead>
    <tr>
    <th scope="col" for="">Fecha</th>
    <th scope="col" for="">Nombre Estudiante</th>
    
    <th scope="col" for="">Apellido Estudiante</th>
	<th scope="col" for="">Grado</th>
	<th scope="col"for="">Asistencia</th>

    <th scope="col">Eliminar</th>
    
    </tr>
    </thead>
   
   <script type="text/javascript" src="index.js"></script>
    <?php
    include_once("../includes/conexion.php");

    
    //SELECT * FROM tabla ORDER BY columna para seleccionar por columna
    
    $query="SELECT a.fecha, b.NOMBRE_ESTUDIANTE, b.APELLIDO_ESTUDIANTE, c.NOMBRE_GRADO, a.ASISTENCIA
    FROM asistencia a
    INNER JOIN estudiantes b ON a.CODIGO_ESTUDIANTE= b.CODIGO_ESTUDIANTE
	INNER JOIN grado c ON a.CODIGO_GRADO= c.CODIGO_GRADO
  WHERE c.CODIGO_GRADO = 1
  ORDER BY a.fecha";
    $consulta=$base_de_datos->query($query);
    while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
    {
      echo '
      
        
      
	<tr>
	<td>'.$fila['fecha'].'</td>
	<td>'.$fila['NOMBRE_ESTUDIANTE'].'</td>
	<td>'.$fila['APELLIDO_ESTUDIANTE'].'</td>
    <td>'.$fila['NOMBRE_GRADO'].'</td>
    <td>'.$fila['ASISTENCIA'].'</td>
    
    
<td> <button type="button" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#eliminar">
Eliminar
</button></td>

    </tr>
    ';
    }
   
    ?>
    
  
    
  
    
    </table>
      
    
  


    <!-- Modal insertar -->
<div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresar Asistencias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--formulario-->

           <!--formulario-->

           <form action="registrarAs.php" method="POST" id="form_insert">
  
        <div class="form-group">
        <table class="table table-striped">
    <thead>
    <tr>
    <th scope="col" >Fecha</th>
    <th scope="col" >Nombre Estudiante</th>
    
   
	<th scope="col" >Grado</th>
	<th scope="col" >Asistencia</th>
	
    
    </tr>
    </thead>
    <?php $fcha = date("Y-m-d");?>
   <script type="text/javascript" src="index.js"></script>
   <?php
    include_once("../includes/conexion.php");
    $hoy =getdate();
    
    //SELECT * FROM tabla ORDER BY columna para seleccionar por columna
    
    $query="SELECT  b.NOMBRE_ESTUDIANTE, b.APELLIDO_ESTUDIANTE, c.NOMBRE_GRADO, b.CODIGO_ESTUDIANTE, c.CODIGO_GRADO
    FROM  estudiantes b 
	INNER JOIN grado c ON b.CODIGO_GRADO= c.CODIGO_GRADO
  WHERE b.CODIGO_GRADO = 1";
    $consulta=$base_de_datos->query($query);
    while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
    {
      echo '
      
        
      
	<tr>
	<td><input type="date" name="fecha" id="fecha" value="'.$fcha.'"></td>
	<td ><select required name="estudiante[]" id="estudiante[]">
  <option value="'.$fila['CODIGO_ESTUDIANTE'].'">'.$fila['NOMBRE_ESTUDIANTE'].' '.$fila['APELLIDO_ESTUDIANTE'].'</option>
  </select>  </td>

    <td  > <select required name="grado[]" id="grado[]" >
    <option value="'.$fila['CODIGO_GRADO'].'">'.$fila['NOMBRE_GRADO'].'</option>
    </select>
   </td>
   
    <td><label for="">SI</label>
    <input type="checkbox"  required name="asistencia[]" value="si">
    </td>
    
    
   
    </tr> 
    ';
    }
    
    ?>
   
    
 
    
    </table>
  
        </form>
      
        <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

        <button type="submit" class="btn btn-primary">Guardar</button>
        
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
       
   
          
        
		  

 

<!-- Modal borrar -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Asistencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4>Estas seguro de Eliminar?</h4>
        <!--formulario-->

        <form action="../vistas/eliminarAs.php" method="POST">
        <input type="hidden" name="fecha" id="delete_codigo">
        <div class="form-group">
  
        
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Si Eliminar</button>
        </div>
        </div>
        
        </form>
      
      
      </div>
    </div>
  </div>
</div>

<script>
$('.editbtn').on('click',function () {
  
  $tr=$(this).closest('tr'); 
  var datos=$tr.children("td").map(function() {
    return $(this).text();

  });
  $('#codigo').val(datos[0]);
  $('#nombre').val(datos[1]);
  $('#apellido').val(datos[2]);
  $('#grado').val(datos[3]);
  $('#asistencia').val(datos[4]);
  
  
});
</script>

<script>
$('.deletebtn').on('click',function () {
  
  $tr=$(this).closest('tr'); 
  var datos=$tr.children("td").map(function() {
    return $(this).text();

  });
  $('#delete_codigo').val(datos[0]);
  
  
});
</script>
<script> src="js/main.js"</script>
</body>
</html>