<?php

include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$grado=$_POST["grado"];

$sentencia=$base_de_datos->prepare("UPDATE estudiantes SET NOMBRE_ESTUDIANTE=:nombre, APELLIDO_ESTUDIANTE=:apellido, CODIGO_GRADO=:grado WHERE CODIGO_ESTUDIANTE=:codigo;");
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