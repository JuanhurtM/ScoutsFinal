
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/Css/login.css">
    <link rel="stylesheet" href="Assets/Css/bootstrap.min.css">
    <link rel="shortcut icon" href="Assets/Img/LogoScout2.png">
    <title>Scouts Centinelas 113 | Login</title>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-light">
  <section>
    <div class="row g-0">
      <div class="col-lg-7 d-none d-lg-block">
        <!-- corousel -->
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item img-1 min-vh-100 active">
            </div>
            <div class="carousel-item img-2 min-vh-100">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4">
          <img src="Assets/Img/LogoScout.png" class="img-fliud mx-auto d-block " style="height: 15rem;">
        </div>
        <!-- Formulario -->
        <div class="px-lg-5 py-lg-4 p-4">
          <form action="Controller/login/login.controller.php" method="post">
            <div class="mb-4">
              <label for="exampleInputEmail1" class="form-label fw-bold fs-5" style="color: #c50d0d;">Documento de identidad</label>
              <input required type="text" name="NoIdentidad" class="form-control fs-6" id="input" placeholder="Documento de identidad">
            </div>
            <div class="mb-4">
              <label for="exampleInputPassword1" class="form-label fw-bold fs-5" style="color:#c50d0d;">Contraseña</label>
              <input required type="password" name="Contrasena" class="form-control bg-light-x fs-6" id="input" placeholder="Contraseña">
            </div>
            <div class="mt-2 fs-5 end">
            </div>
            <button type="submit" name="btnLogin" class="btn fw-bold fs-5 text-light mt-4 w-100" style="background-color: #c50d0d;">Ingresa</button>
            <?php ?>
          </form>
          <div class="text-center mt-4">
              <p class="d-inline-block mb-0 form-text text-seconday fw-semibold fs-5">¿Si no te has inscrito? </p><a href="datosPersonales.php" class=" fs-5 text-danger-x fw-bold text-decoration-none"> Inscribete ahora</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- script bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>