<?php

include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$pass=$_POST["pass"];

$sentencia=$base_de_datos->prepare("UPDATE usuarios SET NOMBRE_USUARIO=:nombre, USERNAME=:usuario, PASS=:pass WHERE CODIGO_USUARIO=:codigo;");
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