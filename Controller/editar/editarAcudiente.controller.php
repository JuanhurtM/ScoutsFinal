<?php 

include("../../Models/Conexion.php");



$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$parentesco = $_POST['parentesco'];
$ocupacion = $_POST['ocupacion'];
$telefono = $_POST['telefono'];
$NoIdScout = $_POST['IdScout'];


$consulta1 = "UPDATE acudientes SET Nombre = '$nombre', Apellido = '$apellido', Ocupacion='$ocupacion', NumeroTelefonico='$telefono' WHERE CorreoElectronico = '$correo'";
$stm1 = $mysqli->query($consulta1);
header('location:../../Views/Admins/inicio.php?EditarAcudiente=Success');
session_start();
$_SESSION['EditarScout'] = 'Scout actualizado correctamente!';



?>