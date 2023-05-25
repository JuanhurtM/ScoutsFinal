<?php 
//atrapo id de scout a desactivar
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

$Nombre = $datos['Nombre'];
$Correo = $datos['CorreoElectronico'];
$apellido = $datos['Apellido'];

$sql="DELETE from usuarios WHERE NoIdentidad='$id'";
$query=mysqli_query($mysqli,$sql);

if($query){

    //Envio de correo
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
        $mail->Subject = 'Cuenta desactivada';
        $mail->Body = 'Hola <b>'.$Nombre . ' ' . $apellido .'</b>, <br><br>Gracias por formar parte de la familia Scouts Centinales, esperamos volverte a ver!
        <br><br>Saludos,<br><br>El equipo de https://scoutscentinelas113.org';
        $mail->send();

    } catch(Exception $e){

        echo 'Mensaje' . $mail->ErrorInfo;
    }

    header('location:../../Views/Admins/inicio.php?desactivar=success');
    session_start();
    $_SESSION['desactivar'] = 'Scout desactivado exitosamente!';

   }else{
       header('location:../../Views/Admins/inicio.php?desactivar=error');
   }
   
?>