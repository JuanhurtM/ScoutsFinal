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
                        <h1 class="fw-bold mb-5" style="color:#c50d0d;"> Registrar Datos Medicos</h1>
                        
                        <form class="mt-4 mb-5" method="post" action="Controller/registro/registrarDMedicos.controller.php">
                                <div class="row g-3 mb-6">
                                    <div class="col-4">
                                        <label for="Alergias" class="form-label mb-2 fw-bold">Alergias / Enfermedades *</label>
                                        <input required name="alergias" type="text" name="nombre" class="form-control" placeholder="Alergias y Enfermedades" aria-label="Alergias">
                                    </div>
                                    <div class="col-4">
                                        <label for="Medicamentos" class="form-label mb-2 fw-bold">Medicamentos *</label>
                                        <input required name="medicamentos" type="text" class="form-control" placeholder="Medicamentos" aria-label="Medicamentos">
                                    </div>
                                    <div class="col-4">
                                        <label for="Dosis" class="form-label mb-2 fw-bold">Dosis / Tiempo *</label>
                                        <input required type="text" name="dosis" class="form-control" placeholder="Dosis y Tiempo" aria-label="Dosis">
                                    </div>
                                    <div class="col-4">
                                        <label for="IdNoScout" class="form-label mb-2 fw-bold">Documento del Scout registrado *</label>
                                        <input type="text" required name="IdScout" class="form-control" placeholder="Documento del registrado" aria-label="IdNoScout">
                                    </div>
                                    <div class="col-8">
                                        <label for="Observaciones" class="form-label mb-2 fw-bold">Observaciones</label>
                                        <textarea class="form-control" name="observaciones" placeholder="Deja las observaciones adicionales a estos datos" style="height: 100px"></textarea>
                                    </div>
                                    
                                </div>
                                
                            <div class="text-center" >
                              <button type="submit" class="btn fw-bold text-light w-50 text-center mt-5 mb-3" style="background-color: #c50d0d;">Enviar Formulario</button>
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