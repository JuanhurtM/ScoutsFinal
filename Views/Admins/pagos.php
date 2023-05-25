<?php
// Establecer tiempo de expiración 

session_start();
if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 3){

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Scouts Centinelas 113 | Pagos</title>
    <link rel="shortcut icon" href="../../Assets/Img/LogoScout2.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Css/form.css">
    <link rel="stylesheet" href="/Css/login.css">
    <!--Datatable plugin CSS file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
  
    <!--jQuery library file -->
    <script type="text/javascript" 
        src="https://code.jquery.com/jquery-3.5.1.js">
    </script>

    <!--Datatable plugin JS library file -->
    <script type="text/javascript" 
        src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    </script>
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
                            <a href="registroPagos.php" class="nav-link align-middle px-0 fs-5 fw-bold" style="color: #c50d0d;" >Nuevo pago</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="nav-link text-white text-center align-middle px-0 fs-5 fw-bold rounded-pill" style="background-color: #c50d0d; width: 12rem;">Consultar pagos</span></a>
                        </li>
                    </ul>
                  <hr>
                  <div class="pb-4">
                        <a onclick="return csesion()" href="../../Controller/login/Exit.controller.php" class=" btn fw-bold fs-5 text-light text-center mt-5 mb-5" style="background-color: #c50d0d;">Cerrar Sesion</a>
                  </div>
                </div>
            </div>
            <div class="col py-3" >
                <div class="mt-4">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="fw-bold mb-4" style="color:#c50d0d;">Pagos registrados</h1>
                                <?php 
                                if(isset($_SESSION['msj'])){ 
                                    $msj = $_SESSION['msj'];?>
    
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
                                    unset($_SESSION['msj']);

                                }
                                ?>
                                <?php 
                                if(isset($_SESSION['EditarPago'])){ 
                                    $msj = $_SESSION['EditarPago'];?>
    
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
                                    unset($_SESSION['EditarPago']);

                                }
                                ?>
                                <?php 
                                if(isset($_SESSION['eliminar'])){ 
                                    $msj = $_SESSION['eliminar'];?>
    
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
                                    unset($_SESSION['eliminar']);

                                }
                                ?>
                                <a href="registroPagos.php" class="btn btn-success text-light fw-bold mt-4 mb-4">Registrar nuevo pago</a>
                                <table class="table table-hover table-bordered mt-4 display shadow-lg">
                                    <thead>
                                        <tr>
                                            <th scope="col">No. de Recibo</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Concepto</th>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include("../../Models/Conexion.php");
                                        
                                        $sql = "SELECT * FROM pagos";
                                        $result = mysqli_query($mysqli, $sql);
                                        $contador=0;
                                        while($datos = mysqli_fetch_array($result)){
                                            $contador++;
                                            $NoRecibo = $datos['NoRecibo'];
                                            $Fecha = $datos['Fecha'];
                                            $nombre = $datos['Nombre'];
                                            $concepto = $datos['Concepto'];
                                            $formato = $datos['Valor'];
                                            $valor = number_format($formato, 0, ',', '.');
                                            $NoIdScout = $datos['NoIdScout'];

                                    ?>
                                        <tr>
                                            <td><?php echo $NoRecibo; ?></td>
                                            <td><?php echo $Fecha; ?></td>
                                            <td><?php echo $nombre;?></td>
                                            <td><?php echo $concepto;?></td>
                                            <td><?php echo "$ " . $valor;?></td>
                                            <td>
                                                <a href="editarPago.php?id=<?php echo $NoRecibo?>" class="btn btn-secondary fw-bold rounded-pill"><img src="../../Assets/Img/pencil-fill.svg"></a>
                                                <a href="../../Controller/consultas/eliminarPago.controller.php?id=<?php echo $NoRecibo?>" class="btn text-light fw-bold rounded-pill" style="background-color: #c50d0d;"><img src="../../Assets/Img/trash-fill.svg"></a>
                                            </td>
                                        </tr>
                                    <?php

                                        }
                                    ?>
                                    </tbody>
                                </table>
                                <a href="cartera.php" class=" btn fw-bold  text-light text-center mt-4" style="background-color: #c50d0d;">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        /* Initialization of datatables */
          $(document).ready(function () {
          $('table.display').DataTable({
            
            // "lengthMenu": [[1,5], [1,5]],
            "language": 
            {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No existe!",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": 
                {
                  "next": "Siguiente",
                  "previous": "Anterior"
                }

            } 
            });
          });

        
    </script>
  </body>
</html>
<?php
}else{
    header("Location: ../../index.php");
}

?>