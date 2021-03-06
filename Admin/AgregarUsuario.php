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

<br>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>

    
</head>
<body onload="lista_libros('');">
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
				<a href="./AgregarAsis.php">
					<img src="../img/us.jpg" alt="" class="imagen">
					<span class="text-item">Asistencia</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
                    
				<a href="../vistas/AgregarReserva.php">
					<img src="../img/servicios.jpg" alt="" class="imagen">
					<span class="text-item">Reservación</span>
                    <span class="down-item"></span>
                   
                </a>
               
           
			<li>
				<a href="../vistas/AgregarAlumno.php">
					<img src="../img/blog.jpg" alt="" class="imagen">
					<span class="text-item">Alumnos</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="#">
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
  <br>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertar">
Nuevo Usuario
</button>
    <br>
    <br>
    <!--boton agregar-->

    
    <table class="table table-striped">
    <thead>
    <tr>
    <th scope="col">Codigo</th>
    <th scope="col">Nombre</th>
    
    <th scope="col">Usuario</th>
    <th scope="col">Contraseña</th>
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>
    
    </tr>
    </thead>
   
   <script type="text/javascript" src="index.js"></script>
    <?php
    include_once("../includes/conexion.php");

    
    //SELECT * FROM tabla ORDER BY columna para seleccionar por columna
    
    $query="SELECT * FROM usuarios";
    $consulta=$base_de_datos->query($query);
    while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
    {
      echo '
      
        
      
    <tr>
    <td>'.$fila['CODIGO_USUARIO'].'</td>
    <td>'.$fila['NOMBRE_USUARIO'].'</td>
    <td>'.$fila['USERNAME'].'</td>
    <td>'.$fila['PASS'].'</td>
    
    <td> <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#editar">
Editar
</button></td>
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--formulario-->

        <form action="../vistas/registrarUs.php" method="POST">
        <div class="form-group">
        <!--<label for="">Codigo</label>
        <input type="number" name="codigo" class="form-control" id="">-->
   
           <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="">
        <br>
        <label for="">Usuario</label>
        <input type="text" name="usuario" class="form-control" id="">
        <br>
        <label for="">Contraseña</label>
        <input type="password" name="pass " class="form-control" id="">
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </div>
        
        </form>
      
      
      </div>
    </div>
  </div>
</div>

<!-- Modal editar -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--formulario-->

        <form action="../vistas/editarUs.php" method="POST">
        <input type="hidden" name="codigo" id="codigo">
        <div class="form-group">
  
        <label for="">Nombre</label>
        <input type="text" name="nombre"  id="nombre"class="form-control" id="nombre">
        <label for="">Usuario</label>
        <input type="text" name="usuario"  id="apellido"class="form-control" id="apellido">
        <br>
        <label for="" name="grado" id="grado">Contraseña</label>
        <input type="text" name="pass"  id="pass"class="form-control" id="pass">
        
        
        </select>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambio</button>
        </div>
        </div>
        
        </form>
      
      
      </div>
    </div>
  </div>
</div>
<!-- Modal borrar -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4>Estas seguro de Eliminar?</h4>
        <!--formulario-->

        <form action="../vistas/eliminarUS.php" method="POST">
        <input type="hidden" name="codigo" id="delete_codigo">
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
  $('#usuario').val(datos[2]);
  $('#pass').val(datos[3]);
  
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
</div>
</body>
</html>