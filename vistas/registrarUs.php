<?php

include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$pass=$_POST["pass"];

$sentencia=$base_de_datos->prepare("INSERT INTO usuarios(CODIGO_USUARIO, NOMBRE_USUARIO, USERNAME, PASS)
VALUES(:codigo,:nombre,:usuario,:pass);");
$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':nombre',$nombre);
$sentencia->bindParam(':usuario',$usuario);
$sentencia->bindParam(':pass',md5($pass));

if($sentencia->execute()){
    return header("Location:AgregarUsuario.php");   
}
else{
    return "error";
}

?>