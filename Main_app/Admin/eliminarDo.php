<?php
include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];


$sentencia=$base_de_datos->prepare("DELETE FROM docente WHERE CODIGO_DOCENTE=:codigo;");
$sentencia->bindParam(':codigo',$codigo);


if($sentencia->execute()){
    return header("Location:AgregarDocente.php");
}
else{
    return "error";
}
?>