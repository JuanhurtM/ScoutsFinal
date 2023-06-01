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
                            <a href="editarAcudienteScout.php?id=<?php echo $NoIdScout = $_GET['id']; ?>" class="nav-link px-0 align-middle fs-5 fw-bold " style="color: #c50d0d;">Datos Acudiente</span></a>
                        </li>
                        <li class="mt-2">
                            <a href="editarDatosMedicos.php?id=<?php echo $NoIdScout = $_GET['id']; ?>" class="nav-link text-white text-center align-middle px-0 fs-5 fw-bold rounded-pill" style="background-color: #c50d0d; width: 12rem;">Datos Medicos</span></a>
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
                                <h1 class="fw-bold mb-5" style="color:#c50d0d;">Editar Datos Medicos</h1>
                                <?php 
                                
                                    include("../../Models/Conexion.php");

                                    $sql = "SELECT * FROM datos_medicos WHERE NoIdScout = '$NoIdScout'";
                                    $query = mysqli_query($mysqli, $sql);

                                    $datos =  mysqli_fetch_array($query);

                                    $id = $datos['Id'];
                                    $alergias = $datos['Alergias/Enfermedades'];
                                    $medicamentos = $datos['Medicamentos'];
                                    $dosis = $datos['Dosis/Tiempo'];
                                    $NoIdScout2 = $datos['NoIdScout'];
                                    $observaciones = $datos['Observaciones'];


                                
                                ?>
                                <form class="mt-4" action="../../Controller/editar/editarDMedicos.controller.php" method="post" >
                                        <h1 class = "fs-4 mt-2 fw-bold mb-3">Datos Medicos</h1>
                                        <div class="row g-3 mb-6">
                                            
                                            <div class="col-4">
                                                <label for="Alergias" class="form-label mb-2 fw-bold">Alergias / Enfermedades *</label>
                                                <input required name="alergias" value="<?php echo $alergias; ?>" type="text" class="form-control" placeholder="Alergias y Enfermedades" aria-label="Alergias">
                                            </div>
                                            <div class="col-4">
                                                <label for="Medicamentos" class="form-label mb-2 fw-bold">Medicamentos *</label>
                                                <input required name="medicamentos" value="<?php echo $medicamentos; ?>" type="text" class="form-control" placeholder="Medicamentos" aria-label="Medicamentos">
                                            </div>
                                            <div class="col-4">
                                                <label for="Dosis" class="form-label mb-2 fw-bold">Dosis / Tiempo *</label>
                                                <input required type="text" name="dosis" value="<?php echo $dosis; ?>" class="form-control" placeholder="Dosis y Tiempo" aria-label="Dosis">
                                            </div>
                                            <div class="col-4">
                                                <label for="IdNoScout" class="form-label mb-2 fw-bold">Documento del Scout registrado *</label>
                                                <input type="text" required name="IdScout" value="<?php echo $NoIdScout2; ?>" class="form-control" placeholder="Documento del registrado" aria-label="IdNoScout">
                                            </div>
                                            <div class="col-12">
                                                <label for="Observaciones" class="form-label mb-2 fw-bold">Observaciones</label>
                                                <textarea class="form-control" name="observaciones" value="<?php echo $observaciones; ?>" placeholder="<?php echo $observaciones; ?>" style="height: 100px"></textarea>
                                            </div>
                                            <div class="col-4">
                                                <!-- <label for="id" class="form-label mb-2 fw-bold">Id *</label> -->
                                                <input required  type="hidden" name="Id" value="<?php echo $id; ?>" type="text" class="form-control" placeholder="Alergias y Enfermedades" aria-label="id">
                                            </div>
                                    
                                        </div>
                                        
                                    <button type="submit" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Guardar</button>
                                    <button type="submit" name="btnRegistrar" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Registrar</button>
                                    <a onclick="window.print()" href="editarDatosMedicos.php?id=<?php echo $NoIdScout = $NoIdScout2; ?>" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Imprimir <img src="../../Assets/Img/printer-fill.svg"></a>

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