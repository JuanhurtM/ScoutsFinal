<?php 

$id=$_GET['id'];
include("../../Models/Conexion.php");


$sql="DELETE from pagos WHERE NoRecibo='$id'";
$query=mysqli_query($mysqli,$sql);

if($query){
    header('location:../../Views/Admins/pagos.php?eliminar=success');
    session_start();
    $_SESSION['eliminar'] = 'Pago Eliminado!';
   }else{
       header('location:../../Views/Admins/pagos.php?eliminar=error');
   }
   
?>