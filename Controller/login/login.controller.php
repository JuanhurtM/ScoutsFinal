<?php 

require "../../Models/Conexion.php";

if (isset($_POST["btnLogin"])) {
    if (strlen($_POST["NoIdentidad"]) >= 1 && strlen($_POST["Contrasena"]) >= 1) {
        $NoIdentidad = $_POST["NoIdentidad"];
        $pass = $_POST["Contrasena"];

        if ($mysqli) {
            $consulta = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE NoIdentidad='$NoIdentidad' AND Contraseña='$pass'");
            if ($consulta) {
                $detalles = mysqli_fetch_array($consulta);
                if ($detalles) {
                    session_set_cookie_params(10);
                    session_start();
                    $_SESSION['NoIdentidad'] = $detalles['NoIdentidad'];
                    $_SESSION['rol'] = $detalles['Rol'];

                    if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 3) {
                        header("Location:../../Views/Admins/inicio.php");
                        exit;
                    } else if ($_SESSION['rol'] == 4) {
                        header("Location:../../Views/Scouts/inicioScouts.php");
                        exit;
                    }else if ($_SESSION['rol'] == 5) {
                        header("Location:../../Views/Tesorero/inicioTesorero.php");
                        exit;
                    }
                } else {
                    echo "<div class='w-50 alert alert-danger'>Usuario y/o contraseña incorrectos!</div>";
                }
            } else {
                echo "<div class='w-50 alert alert-danger'>Error al ejecutar la consulta.</div>";
            }
        } else {
            echo "<div class='w-50 alert alert-danger'>Error al conectar a la base de datos.</div>";
        }
    } else {
        echo "<div class='w-50 alert alert-danger'>Los campos son requeridos!</div>";
    }
}

?>