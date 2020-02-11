<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./logo.png" />
    <title>Administrador</title>
    <link rel="stylesheet" href="./css/estilos.css">

</head>
<body>
<section class="title mx-10">
		<!--<h1 class="">Colegio Cristiano Tabernáculo de la Fe</h1>-->
	</section>
	<nav class="navegacion">
<?php 
	if($_SESSION['user']== null ){
	header('Location: index.php');

die();
	}
		?>
		<ul class="menu">

			<li class="first-item">
				<a href="./home.php">
					<img src="img/home.jpg" alt="" class="imagen">
					<span class="text-item">Inicio</span>
					<span class="down-item"></span>
                </a>
               
			</li>

			<li>
				<a href="./vistas/AgregarAsis.php">
					<img src="img/us.jpg" alt="" class="imagen">
					<span class="text-item">Asistencia</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
                    
				<a href="./reservacion.html">
					<img src="img/servicios.jpg" alt="" class="imagen">
					<span class="text-item">Reservación</span>
                    <span class="down-item"></span>
                   
                </a>
               
           
			<li>
				<a href="./vistas/AgregarAlumno.php">
					<img src="img/blog.jpg" alt="" class="imagen">
					<span class="text-item">Agregar Alumno</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="#">
					<img src="img/web.jpg" alt="" class="imagen">
					<span class="text-item">Mostrar Alumnos</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="./includes/logout.php">
					<img src="img/salirr.jpg" alt="" class="imagen">
					<span class="text-item">Salir</span>
					<span class="down-item"></span>
				</a>
			</li>

		</ul>
    </nav>
    
</body>
</html>