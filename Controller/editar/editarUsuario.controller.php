<?php 

    include("../../Models/Conexion.php");



    $NoIdentidad = $_POST['NoIdentidad'];
    $Rol = $_POST['rol'];
    $Contraseña = $_POST['contraseña'];
    $Nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if($Contraseña == ''){

        $consulta1 = "UPDATE usuarios SET Nombre = '$Nombre', CorreoElectronico = '$correo', Rol = '$Rol' WHERE usuarios.NoIdentidad = '$NoIdentidad'";
        $stm1 = $mysqli->query($consulta1);
        header('location:../../Views/Admins/gestionPersonal.php?Editar=Success');
        session_start();
        $_SESSION['EditarUsuario'] = 'Usuario actualizado correctamente!';

    }else{

        $consulta2 = "UPDATE usuarios SET Nombre = '$Nombre', Contraseña = '$Contraseña', CorreoElectronico = '$correo', Rol = '$Rol' WHERE usuarios.NoIdentidad = '$NoIdentidad'";
        $stm2 = $mysqli->query($consulta2);
        header('location:../../Views/Admins/gestionPersonal.php?Editar=Success');

    }


?>