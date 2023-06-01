<?php

$mysqli= new mysqli("Ip","Usuario","Contraseña","Base de datos");
$mysqli->set_charset("utf8");

if(mysqli_connect_error()){
    echo 'Conexión Fallida : ' , mysqli_connect_error();
    exit();
}

?>