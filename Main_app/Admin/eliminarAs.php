<?php
include_once("../includes/conexion.php");
$fecha=$_POST["fecha"];


$sentencia=$base_de_datos->prepare("DELETE FROM asistencia WHERE fecha=:fecha;");
$sentencia->bindParam(':fecha',$fecha);


if($sentencia->execute()){
    return header("Location:AgregarAsis.php");
}
else{
    return "error";
}
?>