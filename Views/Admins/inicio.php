<?php
// Establecer tiempo de expiración 

session_start();
if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 || $_SESSION['rol'] == 3){

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Scouts Centinelas 113 | Inicio</title>
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
                            <a href="inicio.php" class="nav-link text-white  text-center align-middle px-0 fs-5 fw-bold rounded-pill" style="color: #c50d0d; background-color: #c50d0d; width: 10rem;" >Inscripciones</a>
                        </li>
                        <li class="mt-2">
                            <a href="gestionPersonal.php" class="nav-link px-0 text-center align-middle fs-5 fw-bold " style="color: #c50d0d;">Personal</span></a>
                        </li>
                        <li class="mt-2">
                            <a href="cartera.php" class="nav-link px-0 tex-center align-middle fs-5 fw-bold " style="color: #c50d0d;">Cartera</span></a>
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
                                <h1 class="fw-bold mb-5" style="color:#c50d0d;">Inscripcion Scouts</h1>
                                <?php 
                                if(isset($_SESSION['activar'])){ 
                                    $msj = $_SESSION['activar'];?>
    
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
                                    unset($_SESSION['activar']);

                                }
                                ?>
                                <?php 
                                if(isset($_SESSION['EditarScout'])){ 
                                    $msj = $_SESSION['EditarScout'];?>
    
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
                                    unset($_SESSION['EditarScout']);

                                }
                                ?>
                                <?php 
                                if(isset($_SESSION['desactivar'])){ 
                                    $msj = $_SESSION['desactivar'];?>
    
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
                                    unset($_SESSION['desactivar']);

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
                                <table class="table table-hover table-bordered mt-4 display shadow-lg">
                                    <thead>
                                        <tr>
                                            <th scope="col">No. Identidad</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Rama</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php 
                                        include("../../Models/Conexion.php");
                                        
                                        $sql = "SELECT * FROM scouts";
                                        $result = mysqli_query($mysqli, $sql);
                                        $contador=0;
                                        while($datos = mysqli_fetch_array($result)){
                                            $contador++;
                                            $Noidentidad = $datos['NoIdentidad'];
                                            $nombre = $datos['Nombre'];
                                            $apellido = $datos['Apellido'];
                                            $rama = $datos['Rama'];
                                    ?>
                                        <tr>
                                            <td><?php echo $Noidentidad; ?></td>
                                            <td><?php echo $nombre; ?></td>
                                            <td><?php echo $apellido;?></td>
                                            <td><?php echo (empty($rama)) ? ("No Asignado") : ($rama); ?></td>
                                            <td>
                                            <?php 
                                            
                                            $sql2 = "SELECT * FROM usuarios WHERE NoIdScout = '$Noidentidad';";
                                            $activo = mysqli_query($mysqli, $sql2);

                                            echo (mysqli_fetch_array($activo)) ? ("Activo") : ("Inactivo");

                                            ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-success fw-bold rounded-pill" href="../../Controller/registro/activarScout.controller.php?id=<?php echo $Noidentidad?>">Activar <img src="../../Assets/Img/check-circle-fill.svg"></a>
                                                <a class="btn text-light fw-bold rounded-pill" style="background-color: #c50d0d;" href="../../Controller/consultas/desactivarScout.controller.php?id=<?php echo $Noidentidad?>">Desactivar <img src="../../Assets/Img/x-circle-fill.svg"></a>
                                                <a href="editarScout.php?id=<?php echo $Noidentidad?>" class="btn btn-secondary fw-bold rounded-pill"><img src="../../Assets/Img/pencil-fill.svg"></a>
                                                <a onclick="AlertaEliminar(<?php echo $Noidentidad?>)" class="btn text-light fw-bold rounded-pill" style="background-color: #c50d0d;"><img class="text-light" src="../../Assets/Img/trash-fill.svg"></a>
                                            </td>
                                        </tr>
                                    <?php 
                                        }
                                    ?>
                                    </tbody>
                                </table>
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
    <Script>
    function AlertaEliminar(id){
        Swal.fire({
            title: '¿Estas seguro de eliminar este registro?',
            text: "¡Hacer esto eliminara por completo el registro selecionado!" +"\n  ¡Recuerda desactivar al scout a eliminar!" ,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#14A44D',
            cancelButtonColor: '#c50d0d;',
            confirmButtonText: 'Continuar'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "../../Controller/consultas/eliminarScout.controller.php?id="+ id
            }
        })
        }
    </Script>
  </body>
  
</html>
<?php
}else{
    header("Location: ../../index.php");
}

?>