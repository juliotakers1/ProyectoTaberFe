<?php

include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$grado=$_POST["grado"];

$sentencia=$base_de_datos->prepare("INSERT INTO estudiantes(CODIGO_ESTUDIANTE,NOMBRE_ESTUDIANTE, APELLIDO_ESTUDIANTE, CODIGO_GRADO)
VALUES(:codigo,:nombre,:apellido,:grado);");
$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':nombre',$nombre);
$sentencia->bindParam(':apellido',$apellido);
$sentencia->bindParam(':grado',$grado);

if($sentencia->execute()){
    return header("Location:AgregarAlumno.php");
}
else{
    return "error";
} 

?>