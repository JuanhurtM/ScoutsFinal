<?php
// Establecer tiempo de expiración 

session_start();
if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 3){

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Scouts Centinelas 113 | Editar Acudiente</title>
    <link rel="shortcut icon" href="../../Assets/Img/LogoScout2.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Css/form.css">
    <link rel="stylesheet" href="/Css/login.css">
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>@media print {@page {size: landscape;}}</style>
  </head>
  <body>
  <?php $NoIdScout = $_GET['id']; ?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-secondary min-vh-100">
                  <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-secondary text-decoration-none">
                    <img src="../../Assets/Img/LogoScout2.png" alt="Scouts" style="height: 5rem;">
                  </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-5" id="menu">
                        <li class="mt-2">
                            <a href="editarScout.php?id=<?php echo $NoIdScout = $_GET['id']; ?>" class="nav-link align-middle px-0 fs-5 fw-bold " style="color: #c50d0d;" >Datos Personales</a>
                        </li>
                        <li class="mt-2">
                            <a href="editarAcudienteScout.php?id=<?php echo $NoIdScout = $_GET['id']; ?>" class="nav-link text-white text-center align-middle px-0 fs-5 fw-bold rounded-pill" style="background-color: #c50d0d; width: 12rem;">Datos Acudiente</span></a>
                        </li>
                        <li class="mt-2">
                            <a href="editarDatosMedicos.php?id=<?php echo $NoIdScout = $_GET['id']; ?>" class="nav-link px-0 align-middle fs-5 fw-bold " style="color: #c50d0d;">Datos Medicos</span></a>
                        </li>
                    </ul>
                  <hr>
                  <div class="pb-4">
                    <a onclick="return csesion()" href="../../Controller/login/Exit.controller.php" class=" btn fw-bold fs-5 text-light text-center mt-5 mb-5" style="background-color: #c50d0d;">Cerrar Sesion</a>
                  </div>
                </div>
            </div>
            <div class="col py-3" >
                <div class="mt-4">  <!-- tratar con este contener -->
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="fw-bold mb-5" style="color:#c50d0d;">Editar Acudiente Scout</h1>
                                <?php 
                                
                                    include("../../Models/Conexion.php");

                                    $sql = "SELECT * FROM acudientes WHERE NoIdScout = '$NoIdScout'";
                                    $query = mysqli_query($mysqli, $sql);

                                    $datos =  mysqli_fetch_array($query);

                                    $Nombre = $datos['Nombre'];
                                    $Apellido = $datos['Apellido'];
                                    $Correo = $datos['CorreoElectronico'];
                                    $Parentesco = $datos['Parentesco'];
                                    $Ocupacion = $datos['Ocupacion'];
                                    $NumeroTelefonico = $datos['NumeroTelefonico'];
                                    $NoIdScout = $datos['NoIdScout'];

                                     
                                ?>
                                <form class="mt-4" action="../../Controller/editar/editarAcudiente.controller.php" method="post">
                                        <h1 class = "fs-4 mt-2 fw-bold mb-3">Datos Acudiente</h1>
                                        <div class="row g-3 mb-6">
                                            <div class="col-4">
                                                <label for="Nombre" class="form-label mb-2 fw-bold">Nombre</label>
                                                <input type="text" name="nombre" value="<?php echo $Nombre; ?>" class="form-control" placeholder="Nombre Completo" aria-label="Nombre">
                                            </div>
                                            <div class="col-4">
                                                <label for="apellido" class="form-label mb-2 fw-bold">Apellido</label>
                                                <input type="text" name="apellido" value="<?php echo $Apellido; ?>" class="form-control" placeholder="Apellido" aria-label="Apellido">
                                            </div>
                                            
                                            <div class="col-4">
                                                <label for="Correo" class="form-label mb-2 fw-bold">Correo Electronico</label>
                                                <input type="text" name="correo" value="<?php echo $Correo; ?>" class="form-control" placeholder="Correo Electronico" aria-label="Correo">
                                            </div>
                                            <div class="col-4">
                                                <label for="Correo" class="form-label mb-2 fw-bold">Parentesco</label>
                                                <select name="parentesco" id="Parentesco" class="form-select">
                                                    <option value=""disabled selected><?php echo $Parentesco; ?></option>
                                                    <option value="Padre">Padre</option>
                                                    <option value="Madre ">Madre</option>
                                                    <option value="Abuelo">Abuelo/Abuela</option>
                                                    <option value="Tio">Tio/Tia</option>
                                                    <option value="Acudiente">Acudiente</option> 
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label for="Correo" class="form-label mb-2 fw-bold">Ocupacion</label>
                                                <input name="ocupacion" type="text" value="<?php echo $Ocupacion; ?>" class="form-control" placeholder="Ocupacion" aria-label="Ocupacion">
                                            </div>
                                            <div class="col-4">
                                                <label for="Correo" class="form-label mb-2 fw-bold">Numero de telefónico</label>
                                                <input type="text" name="telefono" value="<?php echo $NumeroTelefonico; ?>" class="form-control" placeholder="Numero Telefonico" aria-label="Numero Telefonico">
                                            </div>
                                            <div class="col-4">
                                                <label for="IdNoScout" class="form-label mb-2 fw-bold">Documento del Scout registrado</label>
                                                <input type="text" name="IdScout" value="<?php echo $NoIdScout; ?>" class="form-control" placeholder="Documento del registrado" aria-label="IdNoScout">
                                            </div>
                                        </div>
                                    
                                    <button type="submit" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Guardar</button>
                                    <button type="submit" name="btnRegistrar" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Registrar</button>
                                    <!-- <button onclick="window.print()" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Imprimir</button> -->
                                    <a onclick="window.print()" href="editarAcudienteScout.php?id=<?php echo $NoIdScout;?>" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Imprimir <img src="../../Assets/Img/printer-fill.svg"></a>
                                </form>
                                <a href="inicio.php" class="btn btn-success text-light fw-bold">Volver</a>
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