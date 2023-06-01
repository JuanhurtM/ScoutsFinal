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
      <p class="copyright text-center fw-bold" style="color:#c50d0d;" ><b>&copy;Genesis Software</b></p>
    </div> 
    <!-- fin offcanvas --> 
    <div class="mb-5">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4">
          <h1 class="text-center fw-bold text-danger-x mb-4" style="color:#c50d0d;">Hoja de Vida Scouts</h1>
          <img src="Assets/Img/LogoScout.png" class="img-fliud mx-auto d-block " style="height: 15rem;">
        </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col">
                        <h1 class="fw-bold mb-5" style="color:#c50d0d;"> Registrar Acudiente</h1>
                        
                        <form class="mt-4 mb-5" method="post" action="Controller/registro/resgistrarAcudiente.controller.php">
                                <div class="row g-3 mb-6">
                                    <div class="col-4">
                                        <label for="Nombre" class="form-label mb-2 fw-bold">Nombre *</label>
                                        <input required type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre">
                                    </div>
                                    <div class="col-4">
                                        <label for="Apellido" class="form-label mb-2 fw-bold">Apellido *</label>
                                        <input required type="text" name="apellido" class="form-control" placeholder="Apellido" aria-label="Nombre">
                                    </div>
                                    <div class="col-4">
                                        <label for="Correo" class="form-label mb-2 fw-bold">Correo Electronico *</label>
                                        <input required type="text" name="correo" class="form-control" placeholder="Correo Electronico" aria-label="Correo">
                                    </div>
                                    <div class="col-4">
                                        <label for="Correo" class="form-label mb-2 fw-bold">Parentesco *</label>
                                        <select required name="parentesco" id="Parentesco" class="form-select">
                                          <option value=""disabled selected>Selecciona el parentesco</option>
                                          <option value="Padre">Padre</option>
                                          <option value="Madre ">Madre</option>
                                          <option value="Abuelo">Abuelo/Abuela</option>
                                          <option value="Tio">Tio/Tia</option>
                                          <option value="Acudiente">Acudiente</option> 
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="Correo" class="form-label mb-2 fw-bold">Ocupacion *</label>
                                        <input required type="text" name="ocupacion" class="form-control" placeholder="Ocupacion" aria-label="Ocupacion">
                                    </div>
                                    <div class="col-4">
                                        <label for="Correo" class="form-label mb-2 fw-bold">Numero de telefónico *</label>
                                        <input required type="text" name="telefono" class="form-control" placeholder="Numero Telefonico" aria-label="Numero Telefonico">
                                    </div>
                                    <div class="col-4">
                                        <label for="IdNoScout" class="form-label mb-2 fw-bold">Documento del Scout registrado *</label>
                                        <input required type="text" name="IdScout" class="form-control" placeholder="Documento del registrado" aria-label="IdNoScout">
                                    </div>
                                </div>
                                </div>
                            <div class="text-center" >
                              <button type="submit" class="btn fw-bold text-light w-50 text-center mt-5 mb-3" style="background-color: #c50d0d;">Enviar Formulario</button>
                              <br>
                              <a href="datosPersonales.php" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Volver</a>
                              <a href="datosMedicos.php" class="btn fw-bold text-light text-center mt-5 mb-3" style="background-color: #c50d0d;">Siguiente</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>