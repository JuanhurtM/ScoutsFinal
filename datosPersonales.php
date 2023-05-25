<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Scouts Centinelas 113 | Formulario de inscripcion</title>
<link rel="shortcut icon" href="Assets/Img/LogoScout2.png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="Assets/Css/login.css">
<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand"data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><img src="Assets/Img/LogoScout2.png" alt="Scouts" style="height: 5rem;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>
    </nav>
    <!-- fin navbar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div>
          <h1 class="p-3 fs-2 text-center text-seconday fw-bold mb-4">Scouts Centinelas 113</h1>
          <div class="text-center mb-2"><a class="btn fw-bold fs-5 text-light mb-2 mt-4 w-75" style="background-color: #c50d0d;" href="index.php">Ingresa</a></div>
          <div class="text-center mt-2"><a class="btn btn-success fw-bold fs-5 mt-2 w-75" href="https://scoutscentinelas113.org/">Volver</a></div>
        </div>
      </div>
      <p class="copyright text-center" style="color:#c50d0d;" ><b>&copy;Genesis Software</b></p>
    </div>
    <!-- fin offcanvas -->
    <div class="mb-5">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4">
          <h1 class="text-center fw-bold text-danger-x mb-4" style="color:#c50d0d;">Hoja de Vida Scouts</h1>
          <img src="Assets/Img/LogoScout.png" class="img-fliud mx-auto d-block " style="height: 15rem;">
        </div>
        <div class="container mt-4">
        <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="fw-bold mb-5" style="color:#c50d0d;">Datos Personales</h1>
                                
                                <form class="mt-4" method="post" action="Controller/registro/resgistrarScouts.controller.php" >
                                    <div class="row g-3 mb-6">
                                        <div class="col-3">
                                            <label for="NumeroDocumento" class="form-label mb-2 fw-bold">Numero de Identidad</label>
                                            <input type="text" required name="NoDocumento" class="form-control" placeholder="Numero de Identidad" aria-label="NumeroIdentidad">
                                        </div>
                                        <div class="col-3">
                                            <label for="Nombre" class="form-label mb-2 fw-bold">Nombre</label>
                                            <input type="text" required name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre">
                                        </div>
                                        <div class="col-3">
                                            <label for="Apellido" class="form-label mb-2 fw-bold">Apellido</label>
                                            <input type="text" required name="apellido" class="form-control" placeholder="Apellido" aria-label="Apellido">
                                        </div>
                                        <div class="col-3">
                                            <label for="Correo" class="form-label mb-2 fw-bold">Correo Electronico *</label>
                                            <input type="email" required name="correo" class="form-control" placeholder="Correo Electronico" aria-label="email">
                                        </div>
                                        <div class="col-3">
                                            <label for="contraseña" class="form-label mb-2 fw-bold">Contraseña *</label>
                                            <input type="password" required name="contraseña" class="form-control" placeholder="contraseña" aria-label="email">
                                        </div>
                                        <div class="col-3">
                                            <label for="tipoDocumento" class="form-label mb-2 fw-bold">Tipo de Documento</label>
                                            <select name="tipoDocumento" required id="tipoDocumento" class="form-select">
                                                <option value=""disabled selected>Selecciona el tipo de documento</option>
                                                <option value="Cedula">Cedula</option>
                                                <option value="Tarjeta de Identidad">Tarjeta Identidad</option>
                                                <option value="Pasaporte">Pasaporte</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label for="FechaNacimiento" class="form-label mb-2 fw-bold">Fecha de Nacimiento</label>
                                            <input type="date" required name="FechaNacimiento" class="form-control" placeholder="Fecha de Nacimiento" aria-label="FechaNacimiento">
                                        </div>
                                        <div class="col-3">
                                            <label for="CiudadRecidencia" class="form-label mb-2 fw-bold">Ciudad de Residencia</label>
                                            <input type="text" required name="CiudadResidencia" class="form-control" placeholder="Ciudad de Residencia" aria-label="CiudadRecidencia">
                                        </div>
                                        <div class="col-3">
                                            <label for="Direccion" class="form-label mb-2 fw-bold">Direccion</label>
                                            <input type="text" required name="direccion" class="form-control" placeholder="Direccion" aria-label="Direccion">
                                        </div>
                                        <div class="col-3">
                                            <label for="NumeroTelefonico" class="form-label mb-2 fw-bold">Numero Telefonico</label>
                                            <input type="text" required name="NumeroTelefonico" class="form-control" placeholder="Numero Telefonico" aria-label="NumeroTelefonico">
                                        </div>
                                        <div class="col-3">
                                            <label for="NumeroTelefonicoAlter" class="form-label mb-2 fw-bold">Numero Telefonico Alternativo</label>
                                            <input type="text" name="NumeroTelefonicoAlter" class="form-control" placeholder="Numero Telefonico Alternativo" aria-label="NumeroTelefonicoAlter">
                                        </div>
                                        <div class="col-3">
                                            <label for="InstitucionEducativa" class="form-label mb-2 fw-bold">Institucion Educativa</label>
                                            <input type="text" required name="InstitucionEducativa" class="form-control" placeholder="Institucion Educativa" aria-label="InstitucionEducativa">
                                        </div>
                                        <div class="col-3">
                                            <label for="CursoActual" class="form-label mb-2 fw-bold">Curso Actual</label>
                                            <input type="text" required name="CursoActual" class="form-control" placeholder="Curso Actual" aria-label="CursoActual">
                                        </div>
                                        <div class="col-3">
                                            <label for="Jornada" class="form-label mb-2 fw-bold">Jornada</label>
                                            <select name="jornada" required id="Jornada" class="form-select">
                                                <option value=""disabled selected>Selecciona la Jornada</option>
                                                <option value="Mañana">Mañana</option>
                                                <option value="Tarde">Tarde</option>
                                                <option value="Noche">Noche</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label for="sexo" class="form-label mb-2 fw-bold">Sexo</label>
                                            <select name="sexo" required id="sexo" class="form-select">
                                                <option value=""disabled selected>Selecciona el sexo</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Otro">Otro...</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label for="Peso" class="form-label mb-2 fw-bold">Peso (kg)</label>
                                            <input type="text" required name="peso" class="form-control" placeholder="Peso" aria-label="Peso">
                                        </div>
                                        <div class="col-3">
                                            <label for="Estatura" class="form-label mb-2 fw-bold">Estatura (cm)</label>
                                            <input type="text" required name="estatura" class="form-control" placeholder="Estatura" aria-label="Estatura">
                                        </div>
                                        <div class="col-3">
                                        <label for="TipoSangre" class="form-label mb-2 fw-bold">Tipo de Sangre</label>
                                            <select name="TipoSangre" required id="TipoSangre" class="form-select">
                                                <option value=""disabled selected>Selecciona el tipo de sangre</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label for="EPS" class="form-label mb-2 fw-bold">EPS</label>
                                            <input type="text" name="EPS" required class="form-control" placeholder="EPS" aria-label="EPS">
                                        </div>
                                        <div class="col-3">
                                            <label for="SitioAtencion" class="form-label mb-2 fw-bold">Sitio de Atencion</label>
                                            <input type="text" name="SitioAtencion" required class="form-control" placeholder="Sitio de Atencion" aria-label="SitioAtencion">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="btnRegistrar"  class="btn fw-bold text-light w-50 text-center mt-5 mb-3" style="background-color: #c50d0d;">Enviar Formulario</button>
                                    </div>
                                </form>
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