<?php


include("../../Models/Conexion.php");


$NoIdentidad = $_POST['NoIdentidad'];
$Nombre = $_POST['nombre'];
$Contraseña = $_POST['contraseña'];
$correo = $_POST['correo'];
$Rol = $_POST['Rol'];


$sql = "INSERT INTO usuarios VALUES ('$NoIdentidad', '$Nombre', '$Contraseña', '$correo', '$Rol', NULL)";

$query = mysqli_query($mysqli, $sql);

if($query){
    
    header("Location:../../Views/Admins/gestionPersonal.php");
    session_start();
    $_SESSION['msj'] = 'Registro de usuario exitoso';

}else{
    session_start();
    $_SESSION['msj'] = 'Registro de usuario fallido';
}

?>



