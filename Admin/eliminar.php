<?php
include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];


$sentencia=$base_de_datos->prepare("DELETE FROM estudiantes WHERE CODIGO_ESTUDIANTE=:codigo;");
$sentencia->bindParam(':codigo',$codigo);


if($sentencia->execute()){
    return header("Location:AgregarAlumno.php");
}
else{
    return "error";
}
?>