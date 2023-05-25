<?php 

include("../../Models/Conexion.php");

$NoDocumento = $_POST['NoDocumento'];
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$CorreoElectronico = $_POST['correo'];
$TipoDocumento = $_POST['tipoDocumento'];
$FechaNacimiento = $_POST['FechaNacimiento'];
$CiudadRecidencia = $_POST['CiudadResidencia'];
$DireccionResidencia = $_POST['direccion'];
$NumeroTelefonico = $_POST['NumeroTelefonico'];
$NumeroTelefonicoAlter = $_POST['NumeroTelefonicoAlter'];
$IntitucionEducactiva = $_POST['InstitucionEducativa'];
$CursoActual = $_POST['CursoActual'];
$Jornada = $_POST['jornada'];
$Sexo = $_POST['sexo'];
$Peso = $_POST['peso'];
$Estatura = $_POST['estatura'];
$TipoSangre = $_POST['TipoSangre'];
$Eps = $_POST['EPS'];
$SitioAtencion = $_POST['SitioAtencion'];
$Rama = $_POST['Rama'];



$consulta2 = "UPDATE scouts SET NoIdentidad ='$NoDocumento', Nombre ='$Nombre', Apellido ='$Apellido', CorreoElectronico ='$CorreoElectronico', TipoDocumento ='$TipoDocumento', FechaNacimiento ='$FechaNacimiento', CiudadResidencia ='$CiudadRecidencia', DireccionResidencia ='$DireccionResidencia', NumeroTelefonico ='$NumeroTelefonico', NumeroTelefonicoAlter ='$NumeroTelefonicoAlter', InstitucionEducativa ='$IntitucionEducactiva', CursoActual ='$CursoActual', Jornada ='$Jornada', Sexo ='$Sexo', Peso ='$Peso', Estatura ='$Estatura', TipoDeSangre =' $TipoSangre', EPS ='$Eps', SitioAtencion ='$SitioAtencion', Rama ='$Rama' WHERE NoIdentidad = '$NoDocumento'";
$stm2 = $mysqli->query($consulta2);
header('location:../../Views/Admins/inicio.php?Editar=Success');
session_start();
$_SESSION['EditarScout'] = 'Scout actualizado correctamente!';






?>