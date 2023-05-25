<?php
// Establecer tiempo de expiración 

session_start();
if ($_SESSION['rol']==4 ){ 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Scouts Centinelas 113 | Editar Scout</title>
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
    <?php $NoIdentidad = $_GET['id']; ?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-secondary min-vh-100">
                  <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-secondary text-decoration-none">
                    <img src="../../Assets/Img/LogoScout2.png" alt="Scouts" style="height: 5rem;">
                  </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-5" id="menu">
                        <li class="mt-2">
                            <a href="perfilScout.php?id=<?php echo $NoIdentidad;?>" class="nav-link text-white text-center align-middle px-0 fs-5 fw-bold rounded-pill" style="background-color: #c50d0d; width: 12rem;">Perfil scout</span></a>
                        </li>
                        <li class="mt-2">
                            <a href="pagosScout.php?id=<?php echo $NoIdentidad;?>" class="nav-link px-0 align-middle fs-5 fw-bold " style="color: #c50d0d;">Visualizar pagos</span></a>
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
                                <h1 class="fw-bold mb-5" style="color:#c50d0d;">Perfil Scout</h1>
                                <?php
                                    
                                    include("../../Models/Conexion.php");


                                    $sql = "SELECT * FROM scouts WHERE NoIdentidad = '$NoIdentidad'";
                                    $query = mysqli_query($mysqli, $sql);

                                    $datos =  mysqli_fetch_array($query);

                                    $NoIdentidad2 = $datos['NoIdentidad'];
                                    $Nombre = $datos['Nombre'];
                                    $Apellido = $datos['Apellido'];
                                    $Correo = $datos['CorreoElectronico'];
                                    $TipoDocumento = $datos['TipoDocumento'];
                                    $FechaNacimiento = $datos['FechaNacimiento'];
                                    $CiudadResidencia = $datos['CiudadResidencia'];;
                                    $DireccionResidencia = $datos['DireccionResidencia'];
                                    $NumeroTelefonico = $datos['NumeroTelefonico'];
                                    $NumeroTelefonicoAlter = $datos['NumeroTelefonicoAlter'];
                                    $IntitucionEducactiva = $datos['InstitucionEducativa'];
                                    $CursoActual = $datos['CursoActual'];
                                    $Jornada = $datos['Jornada'];
                                    $Sexo = $datos['Sexo'];
                                    $Peso = $datos['Peso'];
                                    $Estatura = $datos['Estatura'];
                                    $TipoSangre = $datos['TipoDeSangre'];
                                    $Eps = $datos['EPS'];
                                    $SitioAtencion = $datos['SitioAtencion'];
                                    $rama = $datos['Rama'];
                                    

                                ?>
                                <form class="mt-4" action="../../Controller/editar/editarPerfil.controller.php" method="post" >
                                    <div class="row g-3 mb-6">
                                        <input name="NoDocumento" type="hidden" value="<?php echo $NoIdentidad2; ?>" class="form-control" placeholder="Numero de Identidad" aria-label="NumeroIdentidad">

                                        <div class="col-3">
                                            <label for="Nombre" class="form-label mb-2 fw-bold">Nombre</label>
                                            <input type="text" name="nombre" value="<?php echo $Nombre;?>" class="form-control" placeholder="Nombre" aria-label="Nombre" disabled>
                                        </div>
                                        <div class="col-3">
                                            <label for="Apellido" class="form-label mb-2 fw-bold">Apellido</label>
                                            <input type="text" name="apellido" value="<?php echo $Apellido;?>" class="form-control" placeholder="Apellido" aria-label="Apellido" disabled>
                                        </div>
                                        <div class="col-3">
                                            <label for="Correo" class="form-label mb-2 fw-bold">Correo Electronico *</label>
                                            <input type="email" name="correo" disabled value="<?php echo $Correo;?>" class="form-control" placeholder="Correo Electronico" aria-label="email">
                                        </div>
                                        <div class="col-3">
                                            <label for="Correo" class="form-label mb-2 fw-bold">Tipo de Documento</label>
                                            <input type="text" name="tipoDocumento" disabled value="<?php echo $TipoDocumento;?>" class="form-control" placeholder="Tipo de Documento" aria-label="TipoDocumento">
                                        </div>
                                        <div class="col-3">
                                            <label for="FechaNacimiento" class="form-label mb-2 fw-bold">Fecha de Nacimiento</label>
                                            <input type="text" name="FechaNacimiento" disabled value="<?php echo $FechaNacimiento;?>" class="form-control" placeholder="Fecha de Nacimiento" aria-label="FechaNacimiento">
                                        </div>
                                        <div class="col-3">
                                            <label for="CiudadRecidencia" class="form-label mb-2 fw-bold">Ciudad de Residencia</label>
                                            <input type="text" name="CiudadResidencia" disabled value="<?php echo $CiudadResidencia;?>" class="form-control" placeholder="Ciudad de Residencia" aria-label="CiudadRecidencia">
                                        </div>
                                        <div class="col-3">
                                            <label for="Direccion" class="form-label mb-2 fw-bold">Direccion</label>
                                            <input type="text" name="direccion" disabled value="<?php echo $DireccionResidencia;?>" class="form-control" placeholder="Direccion" aria-label="Direccion">
                                        </div>
                                        <div class="col-3">
                                            <label for="NumeroTelefonico" class="form-label mb-2 fw-bold">Numero Telefonico</label>
                                            <input type="text" name="NumeroTelefonico" disabled value="<?php echo $NumeroTelefonico;?>" class="form-control" placeholder="Numero Telefonico" aria-label="NumeroTelefonico">
                                        </div>
                                        <div class="col-3">
                                            <label for="NumeroTelefonicoAlter" class="form-label mb-2 fw-bold">Numero Telefonico Alternativo</label>
                                            <input type="text" name="NumeroTelefonicoAlter" disabled value="<?php echo $NumeroTelefonicoAlter;?>" class="form-control" placeholder="Numero Telefonico Alternativo" aria-label="NumeroTelefonicoAlter">
                                        </div>
                                        <div class="col-3">
                                            <label for="InstitucionEducativa" class="form-label mb-2 fw-bold">Institucion Educativa</label>
                                            <input type="text" name="InstitucionEducativa" disabled value="<?php echo $IntitucionEducactiva;?>" class="form-control" placeholder="Institucion Educativa" aria-label="InstitucionEducativa">
                                        </div>
                                        <div class="col-3">
                                            <label for="CursoActual" class="form-label mb-2 fw-bold">Curso Actual</label>
                                            <input type="text" name="CursoActual" disabled value="<?php echo $CursoActual;?>" class="form-control" placeholder="Curso Actual" aria-label="CursoActual">
                                        </div>
                                        <div class="col-3">
                                            <label for="Correo" class="form-label mb-2 fw-bold" >Jornada</label>
                                            <input type="text" name="jornada" disabled value="<?php echo $Jornada;?>" class="form-control" placeholder="Jornada" aria-label="Jornada">
                                        </div>
                                        <div class="col-3">
                                            <label for="Sexo" class="form-label mb-2 fw-bold">Sexo</label>
                                            <input type="text" name="sexo" disabled value="<?php echo $Sexo;?>" class="form-control" placeholder="Sexo" aria-label="Sexo">
                                        </div>
                                        <div class="col-3">
                                            <label for="Peso" class="form-label mb-2 fw-bold">Peso (kg)</label>
                                            <input type="text" name="peso" disabled value="<?php echo $Peso;?>" class="form-control" placeholder="Peso" aria-label="Peso">
                                        </div>
                                        <div class="col-3">
                                            <label for="Estatura" class="form-label mb-2 fw-bold">Estatura (cm)</label>
                                            <input type="text" name="estatura" disabled value="<?php echo $Estatura;?>" class="form-control" placeholder="Estatura" aria-label="Estatura">
                                        </div>
                                        <div class="col-3">
                                            <label for="TipoSangre" class="form-label mb-2 fw-bold">Tipo de Sangre</label>
                                            <input type="text" name="TipoSangre" disabled value="<?php echo $TipoSangre;?>" class="form-control" placeholder="Tipo de Sangre" aria-label="TipoSangre">
                                        </div>
                                        <div class="col-3">
                                            <label for="EPS" class="form-label mb-2 fw-bold">EPS</label>
                                            <input type="text" name="EPS" disabled value="<?php echo $Eps;?>" class="form-control" placeholder="EPS" aria-label="EPS">
                                        </div>
                                        <div class="col-3">
                                            <label for="SitioAtencion" class="form-label mb-2 fw-bold">Sitio de Atencion</label>
                                            <input type="text" name="SitioAtencion" disabled value="<?php echo $SitioAtencion;?>" class="form-control" placeholder="Sitio de Atencion" aria-label="SitioAtencion">
                                        </div>
                                        <div class="col-3">
                                            <label for="Rama" class="form-label mb-2 fw-bold">Rama</label>
                                            <select disabled name="Rama" required id="Rama" class="form-select" disabled>
                                                <option value="" disabled selected><?php echo $rama;?></option>
                                                <option value="Cachorros">Cachorros</option>
                                                <option value="Lobatos">Lobatos</option>
                                                <option value="Webelos">Webelos</option>
                                                <option value="Tropa">Tropa</option>
                                                <option value="Rovers">Rovers</option>
                                                <option value="Jefatura">Jefatura</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <!-- <button type="submit" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Guardar</button> -->
                                    <!-- <button onclick="window.print()" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Imprimir <img src="../../Assets/Img/printer-fill.svg"></button> -->
                                </form>
                                <a href="inicioScouts.php" class="btn btn-success text-light fw-bold mt-5">Volver</a>
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