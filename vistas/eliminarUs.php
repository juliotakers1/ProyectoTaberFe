<?php
include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];


$sentencia=$base_de_datos->prepare("DELETE FROM usuarios WHERE CODIGO_USUARIO=:codigo;");
$sentencia->bindParam(':codigo',$codigo);


if($sentencia->execute()){
    return header("Location:AgregarUsuario.php");
}
else{
    return "error";
}
?>