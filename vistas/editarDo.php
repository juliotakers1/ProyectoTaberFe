<?php

include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];


$sentencia=$base_de_datos->prepare("UPDATE docente SET NOMBRE_DOCENTE=:nombre, APELLIDO_DOCENTE=:apellido WHERE CODIGO_DOCENTE=:codigo;");
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