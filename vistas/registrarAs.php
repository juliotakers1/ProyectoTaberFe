<?php

include_once("../includes/conexion.php");
$fecha=$_POST["fecha"];
$estudiante=$_POST["estudiante"];
$grado=$_POST["grado"];
$asistencia=$_POST["asistencia"];


$sentencia=$base_de_datos->prepare("INSERT INTO asistencia(fecha, CODIGO_ESTUDIANTE, CODIGO_GRADO, ASISTENCIA)
VALUES ";
$sentencia->bindParam(':fecha',$fecha);
$sentencia->bindParam(':estudiante',$estudiante);
$sentencia->bindParam(':grado',$grado);
$sentencia->bindParam(':asistencia',$asistencia);

for ($i=0; $i < count($estudiante); $i++) { 
   $sentencia-="('" .$fecha[$i]."', '".$estudiante[$i]."', '".$grado[$i]."', '".$asistencia[$i]."')";
}
echo json_encode(array('sentencia' =>$sentencia))

?>