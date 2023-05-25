<?php
// Establecer tiempo de expiración 

session_start();
if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 3){

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Scouts Centinelas 113 | Registrar Pagos</title>
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
                            <a href="#" class="nav-link text-white text-center align-middle px-0 fs-5 fw-bold rounded-pill" style="background-color: #c50d0d; width: 12rem;">Nuevo pago</a>
                        </li>
                        <li class="mt-2">
                            <a href="pagos.php" class="nav-link px-0 align-middle fs-5 fw-bold " style="color: #c50d0d;">Consultar pagos</span></a>
                        </li>
                    </ul>
                  <hr>
                  <div class="pb-4">
                    <a onclick="return csesion()" href="../../Controller/login/Exit.controller.php" class=" btn fw-bold fs-5 text-light text-center mt-5 mb-5" style="background-color: #c50d0d;">Cerrar Sesion</a>
                  </div>
                </div>
            </div>
            <div class="col py-3" >
                <div class="mt-5">  <!-- tratar con este contener -->
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="fw-bold mb-5" style="color:#c50d0d;">Registrar pago</h1>
                                <?php 
                                if(isset($_SESSION['msj'])){ 
                                    $msj = $_SESSION['msj'];?>

                                    <script>
                                        Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: '<?php echo $msj; ?>',
                                                confirmButtonColor: '#198754'
                                            })
                                    </script>

                                <?php    
                                    unset($_SESSION['msj']);

                                }
                                ?>
                                <form class="mt-4" method="post" action="../../Controller/registro/registrarPago.controller.php">
                                    <div class="row g-3 mb-6">
                                        <div class="col-6">
                                            <label for="Correo" class="form-label mb-2 fw-bold">Numero del recibo *</label>
                                            <input type="text" name="NoRecibo" class="form-control" placeholder="Numero del recibo" aria-label="NumeroIdentidad" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="FechaNacimiento" class="form-label mb-2 fw-bold">Fecha del recibo *</label>
                                            <input type="date" required name="Fecha" class="form-control" placeholder="Fecha del recibo" aria-label="FechaNacimiento">
                                        </div>
                                        <div class="col-6">
                                            <label for="Nombre" class="form-label mb-2 fw-bold">Nombre Completo *</label>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo" aria-label="Nombre" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="Correo" class="form-label mb-2 fw-bold">Concepto *</label>
                                            <input type="text" name="concepto" class="form-control" placeholder="Concepto" aria-label="Contraseña" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="Correo" class="form-label mb-2 fw-bold">Valor *</label>
                                            <input type="text" name="valor" class="form-control" placeholder="Valor del recibo" aria-label="Ocupacion" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="Correo" class="form-label mb-2 fw-bold">Scout asociado</label>
                                            <input type="text" name="scout" class="form-control" placeholder="Numero de identidad del scout" aria-label="Ocupacion">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" name="registrarUsuario" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Registrar pago</button>
                    
                                </form>
                                <a href="pagos.php" class="btn btn-success text-light fw-bold">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
}else{
    header("Location: ../../index.php");
}

?>