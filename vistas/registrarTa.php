<?php

include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];
$codigod=$_POST["codigod"];
$codigot=$_POST["codigot"];
$cantidad=$_POST["cantidad"];
$periodo=$_POST["periodo"];





$sentencia=$base_de_datos->prepare("INSERT INTO reservacion(CODIGO_RESERVACION, CODIGO_DOCENTE, CODIGO_TABLET, CANTIDAD, PERIODO)
VALUES(:codigo,:codigod,:codigot,:cantidad,:periodo);");
$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':codigod',$codigod);
$sentencia->bindParam(':codigot',$codigot);
$sentencia->bindParam(':cantidad',$cantidad);
$sentencia->bindParam(':periodo',$periodo);


if($sentencia->execute()){
    return header("Location:AgregarReserva.php");   
}
else{
    return "error";
}

?>