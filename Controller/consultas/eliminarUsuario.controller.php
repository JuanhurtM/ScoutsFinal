<?php 

$id=$_GET['id'];
include("../../Models/Conexion.php");

$sql="DELETE from usuarios WHERE NoIdentidad='$id'";
$query=mysqli_query($mysqli,$sql);

if($query){
    header('location:../../Views/Admins/gestionPersonal.php?eliminar=success');

   }else{
       header('location:../../Views/Admins/gestionPersonal.php?eliminar=error');
   }
   
?>