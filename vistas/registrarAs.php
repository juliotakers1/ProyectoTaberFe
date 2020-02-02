<?php

include_once("../includes/conexion.php");
$fecha=$_POST["fecha"];
$estudiante=$_POST["estudiante"];
$grado=$_POST["grado"];
$asistencia=$_POST["asistencia"];


$sentencia=$base_de_datos->prepare("INSERT INTO asistencia(fecha, CODIGO_ESTUDIANTE, CODIGO_GRADO, ASISTENCIA)
VALUES(:fecha,:estudiante,:grado,:asistencia);");
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