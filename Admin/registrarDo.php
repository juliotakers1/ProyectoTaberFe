<?php

include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];


$sentencia=$base_de_datos->prepare("INSERT INTO docente(CODIGO_DOCENTE, NOMBRE_DOCENTE , APELLIDO_DOCENTE)
VALUES(:codigo,:nombre,:apellido);");
$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':nombre',$nombre);
$sentencia->bindParam(':apellido',$apellido);


if($sentencia->execute()){
    return header("Location:AgregarDocente.php");   
}
else{
    return "error";
}

?>