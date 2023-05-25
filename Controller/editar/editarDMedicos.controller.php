<?php 

include("../../Models/Conexion.php");



$id = $_POST['Id'];
$alergias = $_POST['alergias'];
$medicamentos = $_POST['medicamentos'];
$dosis = $_POST['dosis'];
$observaciones = $_POST['observaciones'];
$NoIdScout = $_POST['IdScout'];


$consulta1 = "UPDATE datos_medicos SET `Alergias/Enfermedades` ='$alergias', Medicamentos ='$medicamentos', `Dosis/Tiempo` ='$dosis', Observaciones ='$observaciones', NoIdScout ='$NoIdScout' WHERE Id = '$id'";
$stm1 = $mysqli->query($consulta1);
header('location:../../Views/Admins/inicio.php?EditarDatosMedicos=Success');
session_start();
$_SESSION['EditarScout'] = 'Scout actualizado correctamente!';



?>