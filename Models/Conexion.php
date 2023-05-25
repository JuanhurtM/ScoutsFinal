<?php

$mysqli= new mysqli("localhost","juan","root","scouts113");
$mysqli->set_charset("utf8");

if(mysqli_connect_error()){
    echo 'Conexión Fallida : ' , mysqli_connect_error();
    exit();
}

?>