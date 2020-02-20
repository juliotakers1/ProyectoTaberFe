<?php

include_once("../includes/conexion.php");
$fecha=$_POST["fecha"];
$estudiante=$_POST["estudiante"];
$grado=$_POST["grado"];
$asistencia=$_POST["asistencia"];

$sentencia=$base_de_datos->prepare("UPDATE asistencia SET  CODIGO_ESTUDIANTE=:estudiante, CODIGO_GRADO=:grado, ASISTENCIA=:asistencia WHERE fecha=:fecha;");
$sentencia->bindParam(':fecha',$fecha);
$sentencia->bindParam(':estudiante',$estudiante);
$sentencia->bindParam(':grado',$grado);
$sentencia->bindParam(':asistencia',$asistencia);

if($sentencia->execute()){
    return header("Location:AgregarAsis.php");
}
else{
    return "error";
}

?>