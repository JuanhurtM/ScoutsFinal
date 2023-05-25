<?php 

include("../../Models/Conexion.php");



$NoRecibo = $_POST['NoRecibo'];
$Fecha = $_POST['Fecha'];
$Nombre = $_POST['nombre'];
$Concepto = $_POST['concepto'];
$Valor = $_POST['valor'];
$NoIdScout = $_POST['scout'];


$consulta1 = "UPDATE pagos SET Nombre = '$Nombre', Concepto = '$Concepto', Valor = '$Valor' WHERE pagos.NoRecibo = '$NoRecibo'";
$stm1 = $mysqli->query($consulta1);
header('location:../../Views/Tesorero/pagosTesorero.php?Editar=Success');
session_start();
$_SESSION['EditarPago'] = 'Pago actualizado correctamente!';



?>