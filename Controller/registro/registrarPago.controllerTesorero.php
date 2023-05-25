<?php


include("../../Models/Conexion.php");


$NoIRecibo = $_POST['NoRecibo'];
$Fecha = $_POST['Fecha'];
$Nombre = $_POST['nombre'];
$Concepto = $_POST['concepto'];
$Valor = $_POST['valor'];
$NoIdScout = $_POST['scout'];

if(empty($NoIdScout)){

    $sql1 = "INSERT INTO pagos VALUES ('$NoIRecibo', '$Fecha', '$Nombre', '$Concepto', $Valor, NULL)";

    $query1 = mysqli_query($mysqli, $sql1);

    if($query1){
        header("Location:../../Views/Tesorero/pagosTesorero.php");
        session_start();
        $_SESSION['msj'] = 'Registro de pago exitoso';
    }else
        echo "Registro Fallido";



}else{

    $sql = "INSERT INTO pagos VALUES ('$NoIRecibo', '$Fecha', '$Nombre', '$Concepto', $Valor, '$NoIdScout')";

    $query = mysqli_query($mysqli, $sql);

    if($query){
        header("Location:../../Views/Tesorero/pagosTesorero.php");
        session_start();
        $_SESSION['msj'] = 'Registro de pago exitoso';
    }else
        echo "Registro Fallido";

}



?>