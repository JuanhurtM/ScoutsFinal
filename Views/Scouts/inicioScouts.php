<?php
// Establecer tiempo de expiración 

session_start();
if ($_SESSION['rol']==4 && isset($_SESSION['NoIdentidad'])){ 
        $id = $_SESSION['NoIdentidad'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Scouts Centinelas 113 | Inicio Scouts</title>
    <link rel="shortcut icon" href="../../Assets/Img/LogoScout2.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Css/form.css">
    <link rel="stylesheet" href="/Css/login.css">
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-secondary min-vh-100">
                  <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-secondary text-decoration-none">
                    <img src="../../Assets/Img/LogoScout2.png" alt="Scouts" style="height: 5rem;">
                  </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-5" id="menu">
                        <li class="mt-2">
                            <a href="perfilScout.php?id=<?php echo $id;?>" class="nav-link px-0 align-middle fs-5 fw-bold " style="color: #c50d0d;">Perfil scout</span></a>
                        </li>
                        <li class="mt-2">
                            <a href="pagosScout.php?id=<?php echo $id;?>" class="nav-link px-0 align-middle fs-5 fw-bold " style="color: #c50d0d;">Visualizar pagos</span></a>
                        </li>
                    </ul>
                  <hr>
                  <div class="pb-4">
                        <a onclick="return csesion()" href="../../Controller/login/Exit.controller.php" class=" btn fw-bold fs-5 text-light text-center mt-5 mb-5" style="background-color: #c50d0d;">Cerrar Sesion</a>
                  </div>
                </div>
            </div>
            <?php 
                include("../../Models/Conexion.php");


                $sql = "SELECT * FROM scouts WHERE NoIdentidad = '$id'";
                $query = mysqli_query($mysqli, $sql);

                $datos =  mysqli_fetch_array($query);

                $Nombre = $datos['Nombre'];
            ?>
            <div class="col py-3" >
                <div class="mt-4">  <!-- tratar con este contener -->
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="fw-bold mb-5" style="color:#c50d0d;">Bienvenido de vuelta <?php echo $Nombre;?></h1>
                                <br>
                                <?php 
                                if(isset($_SESSION['EditarPerfil'])){ 
                                    $msj = $_SESSION['EditarPerfil'];?>
    
                                    <script>
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: '<?php echo $msj; ?>',
                                            showConfirmButton: false,
                                            timer: 2000
                                            })

                                    </script>

                                <?php    
                                    unset($_SESSION['EditarPerfil']);

                                }
                                ?>
                                <div class="container text-center mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <a href="perfilScout.php?id=<?php echo $id;?>" class="w-75 btn fw-bold fs-5 text-light text-center mt-5 mb-5" style="background-color: #c50d0d;">Perfil</a>
                                        </div>
                                        <div class="col">
                                            <a href="pagosScout.php?id=<?php echo $id;?>" class="w-75 btn fw-bold fs-5 text-light text-center mt-5 mb-5" style="background-color: #c50d0d;">Pagos</a>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js">
        
        //Cerrar Sesion
        function csesion(){
            var respuesta=confirm("Estas seguro que deseas cerrar sesión?")
            return respuesta
        }

    </script>
  </body>
</html>
<?php
}else{
    header("Location: ../../index.php");
}

?>