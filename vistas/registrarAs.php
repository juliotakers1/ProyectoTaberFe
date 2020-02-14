<?php

include_once("../includes/conexion.php");
$fecha=$_POST["fecha"];
$estudiante=$_POST["estudiante"];
$grado=$_POST["grado"];
$asistencia=$_POST["asistencia"];



$cadena="INSERT INTO asistencia(fecha, CODIGO_ESTUDIANTE, CODIGO_GRADO, ASISTENCIA)VALUES ";


for ($i=0; $i < count($estudiante); $i++) { 
   $cadena.="('" .$fecha[$i]."', '".$estudiante[$i]."', '".$grado[$i]."', '".$asistencia[$i]."')";
}

$cadena_final = substr($cadena, 0, -1);
$cadena_final.=";";

if($base_de_datos->query($cadena_final)):
   echo json_encode(array('error' => false));
else:
   echo json_encode(array('error' => true));
endif;

?>