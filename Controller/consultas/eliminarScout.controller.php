<?php 

$id=$_GET['id'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('../../vendor/autoload.php');

include("../../Models/Conexion.php");


$mail = new PHPMailer(true);

$sql3 = "SELECT * FROM scouts WHERE NoIdentidad = '$id'";
$query = mysqli_query($mysqli, $sql3);

$datos =  mysqli_fetch_array($query);


$NoDocumento = $datos['NoIdentidad'];
$Nombre = $datos['Nombre'];
$Apellido = $datos['Apellido'];
$CorreoElectronico = $datos['CorreoElectronico'];
$TipoDocumento = $datos['TipoDocumento'];
$FechaNacimiento = $datos['FechaNacimiento'];
$CiudadRecidencia = $datos['CiudadResidencia'];
$DireccionResidencia = $datos['DireccionResidencia'];
$NumeroTelefonico = $datos['NumeroTelefonico'];
$NumeroTelefonicoAlter = $datos['NumeroTelefonicoAlter'];
$IntitucionEducactiva = $datos['InstitucionEducativa'];
$CursoActual = $datos['CursoActual'];
$Jornada = $datos['Jornada'];
$Sexo = $datos['Sexo'];
$Peso = $datos['Peso'];
$Estatura = $datos['Estatura'];
$TipoSangre = $datos['TipoDeSangre'];
$Eps = $datos['EPS'];
$SitioAtencion = $datos['SitioAtencion'];
$Rama = $datos['Rama'];

//Envio de correo con la informacion del scout a eliminar

try{

    $mail->isSMTP();
    $mail->Host = 'smtpout.secureserver.net';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@scoutscentinelas113.org';
    $mail->Password = 'Macbookpro1990.';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('info@scoutscentinelas113.org', 'Equipo Scouts Centinelas');
    $mail -> addAddress('jjuanjose1019@gmail.com'); //Correo que va utilizar Carlos para recibir la notificaciones

    $mail->isHTML(true);
    $mail->Subject = 'Scout Eliminado';
    $mail->Body = 'Hola, 
    <br><br>¡El siguiente Scout fue eliminado del sistema!<br><br>
    <b>Tipo de documento:</b> '. $TipoDocumento.'<br>
    <b>No Documento:</b> ' . $NoDocumento. '<br>
    <b>Nombre:</b> ' .$Nombre. '<br>
    <b>Apellido:</b> '.$Apellido.'<br>
    <b>Correo:</b> '. $CorreoElectronico.'<br>
    <b>Fecha de nacimiento:</b> '.$FechaNacimiento.'<br>
    <b>Ciudad de recidencia:</b> '.$CiudadRecidencia.'<br>
    <b>Direccion de recidencia:</b> '.$DireccionResidencia.'<br>
    <b>Numero telefonico:</b> '.$NumeroTelefonico.'<br>
    <b>Numero telefonico alternativo:</b> '.$NumeroTelefonicoAlter.'<br>
    <b>Intitucion educativa:</b> '.$IntitucionEducactiva.'<br>
    <b>Curso actual:</b> '.$CursoActual.'<br>
    <b>Jornada:</b> '.$Jornada.'<br>
    <b>Sexo:</b> '.$Sexo.'<br>
    <b>Peso:</b> '.$Peso.'<br>
    <b>Estatura:</b> '.$Estatura.'<br>
    <b>Tipo de sangre:</b> '.$TipoSangre.'<br>
    <b>Eps:</b> '.$Eps.'<br>
    <b>Sitio de atencion:</b> '.$SitioAtencion.'<br>
    <br><br>Saludos,<br><br>El equipo de https://scoutscentinelas113.org';
    $mail->send();

} catch(Exception $e){

    echo 'Mensaje' . $mail->ErrorInfo;
}

$usuario = "SELECT * FROM usuarios WHERE NoIdentidad = '$id'";
$activo = mysqli_query($mysqli, $usuario);
$acudiente = "SELECT * FROM acudientes WHERE NoIdScout = '$id'";
$ExitsAcu = mysqli_query($mysqli, $acudiente);
$medicos = "SELECT * FROM datos_medicos WHERE NoIdScout = '$id'";
$ExistMedicos = mysqli_query($mysqli, $medicos);


if(mysqli_fetch_array($activo) && mysqli_fetch_array($ExitsAcu) && mysqli_fetch_array($ExistMedicos)){

    //Si el usuraio esta activo ejecuta estas consultas

    $sql0 = "DELETE FROM usuarios where NoIdentidad = '$id'";
    $sql1 = "DELETE FROM `datos_medicos` WHERE NoIdScout = '$id'";
    $sql2="DELETE s, a FROM scouts AS s JOIN acudientes AS a ON s.NoIdentidad = a.NoIdScout WHERE s.NoIdentidad = '$id'";
    $query0=mysqli_query($mysqli,$sql0);
    $query1=mysqli_query($mysqli,$sql1);
    $query2=mysqli_query($mysqli,$sql2);
    
    if($query0 && $query1 && $query2){
        
        header('location:../../Views/Admins/inicio.php?eliminar=success');
        session_start();
        $_SESSION['eliminar'] = 'Scout Eliminado!';

    }else{
        header('location:../../Views/Admins/inicio.php?eliminar=error');
    }

}else if(mysqli_fetch_array($ExitsAcu) && mysqli_fetch_array($ExistMedicos)){

    //Si no esta activo ejecutara estas consultas

    $sql3 = "DELETE FROM `datos_medicos` WHERE NoIdScout = '$id'";
    $sql4="DELETE s, a FROM scouts AS s JOIN acudientes AS a ON s.NoIdentidad = a.NoIdScout WHERE s.NoIdentidad = '$id'";
    $query3=mysqli_query($mysqli,$sql3);
    $query4=mysqli_query($mysqli,$sql4);

    if($query3 && $query4){
        
        header('location:../../Views/Admins/inicio.php?eliminar=success');
        session_start();
        $_SESSION['eliminar'] = 'Scout Eliminado!';

    }else{
        header('location:../../Views/Admins/inicio.php?eliminar=error');
    }

} else if (mysqli_fetch_array($ExitsAcu)){

    
    $sql5="DELETE s, a FROM scouts AS s JOIN acudientes AS a ON s.NoIdentidad = a.NoIdScout WHERE s.NoIdentidad = '$id'";

    $query5=mysqli_query($mysqli,$sql5);

    if($query5){
        
        header('location:../../Views/Admins/inicio.php?eliminar=success');
        session_start();
        $_SESSION['eliminar'] = 'Scout Eliminado!';

    }else{
        header('location:../../Views/Admins/inicio.php?eliminar=error');
    }

} else if (mysqli_fetch_array($ExistMedicos)){

    $sql6 = "DELETE FROM `datos_medicos` WHERE NoIdScout = '$id'";
    $slq7 = "DELETE FROM scouts WHERE NoIdentidad = '$id'";
    $query6 = mysqli_query($mysqli,$sql6);
    $query7 = mysqli_query($mysqli,$sql7);

    if($query6 && $query7){
        
        header('location:../../Views/Admins/inicio.php?eliminar=success');
        session_start();
        $_SESSION['eliminar'] = 'Scout Eliminado!';

    }else{
        header('location:../../Views/Admins/inicio.php?eliminar=error');
    }

} else if(mysqli_fetch_array($activo)){

    //Si no esta activo ejecutara estas consultas

    $sql8 = "DELETE FROM usuarios where NoIdentidad = '$id'";
    $slq9 = "DELETE FROM scouts WHERE NoIdentidad = '$id'";
    $query8=mysqli_query($mysqli,$sql8);
    $query9=mysqli_query($mysqli,$slq9);

    if($query8 && $query9){
        
        header('location:../../Views/Admins/inicio.php?eliminar=success');
        session_start();
        $_SESSION['eliminar'] = 'Scout Eliminado!';

    }else{
        header('location:../../Views/Admins/inicio.php?eliminar=error');
    }

} else {

    $sql10 = "DELETE FROM scouts WHERE NoIdentidad = '$id'";
    $query10 = mysqli_query($mysqli,$sql10);

    if($query10){
        
        header('location:../../Views/Admins/inicio.php?eliminar=success');
        session_start();
        $_SESSION['eliminar'] = 'Scout Eliminado!';

    }else{
        header('location:../../Views/Admins/inicio.php?eliminar=error');
    }


}



   
?>