<?php

include_once("../includes/conexion.php");
$codigo=$_POST["codigo"];
$codigod=$_POST["codigod"];
$codigot=$_POST["codigot"];
$cantidad=$_POST["cantidad"];
$fechaI=$_POST["fechai"];
$fechaF=$_POST["fechaf"];




$sentencia=$base_de_datos->prepare("INSERT INTO reservacion(CODIGO_RESERVACION, CODIGO_DOCENTE, CODIGO_TABLET, CANTIDAD, FECHA_INICIO, FECHA_FIN)
VALUES(:codigo,:codigod,:codigot,:cantidad,:fechai,:fechaf);");
$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':codigod',$codigod);
$sentencia->bindParam(':codigot',$codigot);
$sentencia->bindParam(':cantidad',$cantidad);
$sentencia->bindParam(':fechai',$fechaI);
$sentencia->bindParam(':fechaf',$fechaF);

if($sentencia->execute()){
    return header("Location:AgregarReserva.php");   
}
else{
    return "error";
}

?>