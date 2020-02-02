<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./logo.png" />
    <title>Home</title>
	<link rel="stylesheet" href="./css/estilos1.css">
	
	

</head>
<body>
	<img src="../img/hogar.png" alt="">
<section class="title mx-10">
		<!--<h1 class="">Colegio Cristiano Tabernáculo de la Fe</h1>-->
	</section>
	<nav class="navegacion">
<?php

	if($_SESSION['user']== null ){
	header('Location: index.php');
	session_unset();
	session_destroy();
	}
		?>
		<ul class="menu">

			<!--<li class="first-item">
				<a href="./home.php">
					<img src="img/home.jpg" alt="" class="imagen">
					<span class="text-item">Inicio</span>
					<span class="down-item"></span>
                </a>
               
			</li>-->

			<li>
				<a href="./asistencia.html">
					<img src="img/us.jpg" alt="" class="imagen">
					<span class="text-item">Asistencia</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
                    
				<a href="./vistas/AgregarReserva.php">
					<img src="img/servicios.jpg" alt="" class="imagen">
					<span class="text-item">Reservación</span>
                    <span class="down-item"></span>
                   
                </a>
               
           
			<li>
				<a href="./vistas/AgregarAlumno.php">
					<img src="img/blog.jpg" alt="" class="imagen">
					<span class="text-item">Alumnos</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="./vistas/AgregarUsuario.php">
					<img src="img/web.jpg" alt="" class="imagen">
					<span class="text-item">Usuarios</span>	
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
  
 
  <script>alert('Bienvenid@ <?php echo  $user->getNombre();?>')</script>

  <section class="login-box"></section>
  <i class="fab fa-facebook-square"></i>
</body>
</html>