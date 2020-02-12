<?php

include_once("../includes/conexion.php");
$fecha=$_POST["fecha"];
$estudiante=$_POST["estudiante"];
$grado=$_POST["grado"];
$asistencia=$_POST["asistencia"];



$sentencia=$base_de_datos->prepare("INSERT INTO asistencia(fecha, CODIGO_ESTUDIANTE, CODIGO_GRADO, ASISTENCIA)VALUES ");


for ($i=0; $i < count($fecha); $i++) { 
   $sentencia.="('" .$fecha[$i]."', '".$estudiante[$i]."', '".$grado[$i]."', '".$asistencia[$i]."')";
}
echo json_encode(array('sentencia' =>$sentencia));

?>