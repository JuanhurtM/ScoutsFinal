<?php 

$id=$_GET['id'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('../../vendor/autoload.php');

include("../../Models/Conexion.php");


$mail = new PHPMailer(true);

$sql1 = "SELECT * FROM scouts WHERE NoIdentidad = '$id'";
$query = mysqli_query($mysqli, $sql1);

$datos =  mysqli_fetch_array($query);

$NoIdentidad2 = $datos['NoIdentidad'];
$Nombre = $datos['Nombre'];
$apellido =$datos['Apellido'];
$Contraseña = $datos['Contraseña'];
$Correo = $datos['CorreoElectronico'];
$Rol = 4;


$sql2 = "INSERT INTO usuarios VALUES ('$NoIdentidad2', '$Nombre', '$Contraseña', '$Correo', $Rol, '$id')";

$query2 = mysqli_query($mysqli, $sql2);

if($query2){

    try{

        $mail->isSMTP();
        $mail->Host = 'smtpout.secureserver.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@scoutscentinelas113.org';
        $mail->Password = 'Macbookpro1990.';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('info@scoutscentinelas113.org', 'Equipo Scouts Centinelas');
        $mail -> addAddress($Correo);

        $mail->isHTML(true);
        $mail->Subject = 'Activacion de cuenta';
        $mail->Body = 'Hola <b>'.$Nombre . ' '.$apellido . '</b>, <br><br>Ya te encuentras activo en el sistema<br> te invitamos a ingresar a https://scoutcentinelas113.org para validar si tu activacion fue exitosa
        <br><br>Saludos,<br><br>El equipo de https://scoutscentinelas113.org';
        $mail->send();

    } catch(Exception $e){

        echo 'Mensaje' . $mail->ErrorInfo;
    }


    header("Location:../../Views/Admins/inicio.php");
    session_start();
    $_SESSION['activar'] = 'Scout activado exitosamente!';
}else
    echo "Activacion Fallida";


?>