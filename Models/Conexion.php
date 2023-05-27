<?php

$mysqli= new mysqli("92.205.13.196","ul7ikl52xfaw","Macbookpro1990.","v1h.ad9.mywebsitetransfer.com_1685053373","3306");
$mysqli->set_charset("utf8");

if(mysqli_connect_error()){
    echo 'Conexión Fallida : ' , mysqli_connect_error();
    exit();
}

?>