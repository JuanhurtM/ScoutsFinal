<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    include('../../vendor/autoload.php');

    include("../../Models/Conexion.php");


    $mail = new PHPMailer(true);

    $NoDocumento = $_POST['NoDocumento'];
    $Nombre = $_POST['nombre'];
    $Apellido = $_POST['apellido'];
    $CorreoElectronico = $_POST['correo'];
    $Contrasena = $_POST['contraseña'];
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

        
    $sql = "INSERT INTO scouts VALUES ('$NoDocumento', '$Nombre', '$Apellido','$CorreoElectronico','$Contrasena', '$TipoDocumento','$FechaNacimiento', '$CiudadRecidencia', '$DireccionResidencia', '$NumeroTelefonico', '$NumeroTelefonicoAlter', '$IntitucionEducactiva', '$CursoActual', '$Jornada', '$Sexo', $Peso, $Estatura, '$TipoSangre', '$Eps', '$SitioAtencion', NULL)";
    
    $query = mysqli_query($mysqli, $sql);

    if($query){


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
            $mail->Subject = 'Nuevo Scout registrado '. $NoDocumento;
            $mail->Body = 'Hola, <br><br>Tiene un nuevo registro en el sistema<br>Lo Invitamos a ingresar a https://scoutcentinelas113.org para validar y activar el nuevo usuario registrado con la siguiente informacion: <br> 
            <br><b>Numero de identifiacion: </b>'.$NoDocumento.'<br><br>
            <b>Nombre:</b> '.$Nombre . ' ' .$Apellido . '<br><br> Saludos,<br><br>El equipo de https://scoutscentinelas113.org';
            $mail->send();

        } catch(Exception $e){

            echo 'Mensaje' . $mail->ErrorInfo;
        }

        header("Location:../../datosAcudiente.php");
    }else
        echo "Registro Fallido";
            

    

    
   




?>