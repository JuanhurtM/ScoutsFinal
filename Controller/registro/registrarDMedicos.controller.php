<?php include("../../Models/Conexion.php");


$alergias = $_POST['alergias'];
$medicamentos = $_POST['medicamentos'];
$dosis = $_POST['dosis'];
$observaciones = $_POST['observaciones'];
$NoIdScout = $_POST['IdScout'];

if(empty($observaciones)){

    $sql1 = "INSERT INTO datos_medicos VALUES (NULL, '$alergias', '$medicamentos', '$dosis', NULL, '$NoIdScout')";
    $query1 = mysqli_query($mysqli, $sql1);

    if($query1){
        header("Location:../../index.php");
    }else
        echo "Registro Fallido";



}else{

    $sql = "INSERT INTO datos_medicos VALUES (NULL, '$alergias', '$medicamentos', '$dosis', '$observaciones', '$NoIdScout')";

    $query = mysqli_query($mysqli, $sql);

    if($query){
        header("Location:../../index.php");
    }else
        echo "Registro Fallido";

}



?>