<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión</title>

    <link rel="shortcut icon" href="./logo.png" />
    <link rel="stylesheet" href="./css/master.css">
</head>
<body>

<div class="login-box">
            
      <img src="./logo.png" class="avatar" alt="Avatar Image">
      <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
      <h1>Iniciar Sesión</h1>
      <form method="POST" >
        <!-- USERNAME INPUT -->
        
        <label for="username">Usuario</label>
        <input type="text" placeholder="Ingrese Usuario" name="username">
        <!-- PASSWORD INPUT --> 
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingrese Contraseña" name="password">
       <input type="submit" value="Ingresar" class="center">
      <!--  <a href="#">Perdi mi Contraseña?</a><br>
        <a href="#">No recuerdo mi Usuario?</a>-->
      </form>
    </div>


   <!-- <form action="" method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
                die();
            }
            
        ?>
        <h2>Iniciar sesión</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="username"></p>
        <p>Password: <br>
        <input type="password" name="password"></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
    </form>-->
</body>
</html>