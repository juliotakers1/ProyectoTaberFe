<?php
include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];


$sentencia=$base_de_datos->prepare("DELETE FROM reservacion WHERE CODIGO_RESERVACION=:codigo;");
$sentencia->bindParam(':codigo',$codigo);


if($sentencia->execute()){
    return header("Location:AgregarReserva.php");
}
else{
    return "error";
}
?>