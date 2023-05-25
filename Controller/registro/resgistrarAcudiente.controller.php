<?php

        include("../../Models/Conexion.php");
      

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $parentesco = $_POST['parentesco'];
        $ocupacion = $_POST['ocupacion'];
        $telefono = $_POST['telefono'];
        $NoIdScout = $_POST['IdScout'];
        

         
        $sql = "INSERT INTO acudientes  VALUES ('$correo', '$nombre', '$apellido', '$parentesco', '$ocupacion', '$telefono', '$NoIdScout')";
        
        $query = mysqli_query($mysqli, $sql);

        if($query){
            header("Location:../../datosMedicos.php");
        }else
            echo "Registro Fallido";

?>