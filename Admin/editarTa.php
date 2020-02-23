<?php

include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];
$marca=$_POST["marca"];
$cantidad=$_POST["cantidad"];


$sentencia=$base_de_datos->prepare("UPDATE tablets SET MARCA_TABLET=:marca, CATIDAD_TABLET=:cantidad WHERE CODIGO_TABLET=:codigo;");
$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':marca',$marca);
$sentencia->bindParam(':cantidad',$cantidad);


if($sentencia->execute()){
    return header("Location:AgregarTablet.php");
}
else{
    return "error";
}

?>