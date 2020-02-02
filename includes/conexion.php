<?php

$contraseña ="";
$usuario = "root";
$nombredb= "taber";


 try {
     $base_de_datos= new PDO('mysql:host=localhost; dbname='.$nombredb, $usuario, $contraseña);
 //echo "<script>alert('buena conexion')</script>";
    } catch (Exception $e) {
        echo "<script>alert('mala conexion')</script>".$e->getMessage();
 }
