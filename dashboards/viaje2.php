<?php 
    include_once '../verificar.php';
    include("../conexion.php");

    if (!isset($_SESSION['rol'])) {
      header('Location: ../login.php');
    }
    else {
      if ($_SESSION['rol'] != 1) {
        header('Location: ../login.php');
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Roses 🌞 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-plane"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Roses 🌞 </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tablero</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menú
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="registrarAdmin.php">
                    <i class="fas fa-users"></i>
                    <span>Registro Usuario</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="origen.php">
                    <i class="fas fa-map-pin"></i>
                    <span>Registro Datos de Origen</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="destino.php">
                    <i class="fas fa-map-signs"></i>
                    <span>Registro Datos de Destino</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Ver Tablas</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Puede ver estas tablas:</h6>
                        <a class="collapse-item" href="viaje1.php">Tabla de Viajes 1</a>
                        <a class="collapse-item" href="viaje2.php">Tabla de Viajes 2</a>
                        <a class="collapse-item" href="reservacion.php">Tabla de Reservaciones</a>
                        <a class="collapse-item" href="usuarios.php">Tabla de Usuarios</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Espacio antes de la foto del usuario -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        </div>
                    </form>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small"><?php  echo "$nombreUser";?></span>
                            <img class="img-profile rounded-circle"
                                src="https://png.pngtree.com/png-vector/20190704/ourlarge/pngtree-vector-user-young-boy-avatar-icon-png-image_1538408.jpg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Cerrar sesión
                            </a>
                        </div>
                    </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Tabla de Viajes 2 ✈ | Usuarios Registrados</h1>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <!-- tabla -->
                                    <?php
                                $sql = "SELECT * FROM  viaje2";
                                $consulta =  mysqli_query($conn, $sql);

                                echo "<table class=table-bordered id=dataTable width=100%>";
                                    echo"<thead class=bg-dark>";
                                        echo "<tr class=text-white>";
                                            echo "<td class=p-1 align=center>#</td>";
                                            echo "<td class=p-1 align=center> Código Viaje</td>";
                                            echo "<td align=center> Cant. Asientos </td>";
                                            echo "<td class=p-1 align=center> Costo </td>";
                                            echo "<td class=p-1 align=center> Fecha Salida</td>";
                                            echo "<td class=p-1 align=center> Fecha Regreso</td>";
                                            echo "<td class=p-1 align=center> Hora Viaje</td>";
                                            echo "<td class=p-1 align=center> Código Origen </td>";
                                            echo "<td class=p-1 align=center> Código Destino </td>";
                                            echo "<td class=p-1 align=center> Cédula </td>";
                                        echo "</tr>";
                                    echo"</thead>";

                                            $linea = mysqli_num_rows($consulta);

                                if ($linea) {  

                                    while ($registro = mysqli_fetch_assoc($consulta)) {
                                        @$contador++;
                                        echo"<tr>";
                                            $codigox = $registro["codigo_Viaje"];

                                            echo"<td>";
                                                echo  $contador;
                                            echo"</td>";

                                            echo"<td>";
                                                echo $codigox;
                                            echo"</td>";

                                            echo"<td>";
                                                echo $registro['num_Asientos'];
                                            echo"</td>";

                                            echo"<td>";
                                                echo "$ ".$registro['costo_Viaje'];
                                            echo"</td>";

                                            echo"<td>";
                                                echo $registro['fecha_Salida'];
                                            echo"</td>";

                                            echo"<td>";
                                                echo $registro['fecha_Regreso'];
                                            echo"</td>";

                                            echo"<td>";
                                                echo $registro['hora_Viaje'];
                                            echo"</td>";

                                            echo"<td>";
                                                echo $registro['cod_Origen'];
                                            echo"</td>";

                                            echo"<td>";
                                                echo $registro['cod_Destino'];
                                            echo"</td>";

                                            echo"<td>";
                                                echo $registro['ced_Viajero'];
                                            echo"</td>";

                                        echo"</tr>";
                                    }
                                }
                                echo "</table>";
                            ?>
                                    <!-- fin TABLA -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            All rights reserved Roses🌞 | The Project made <i class="icon-heart"
                                aria-hidden="true"></i> by <a href="https://github.com/Guille0197/AgenciaViajes-php"
                                target="_blank">Jessica Roses</a>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Preparado para irte?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su
                        sesión
                        actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../cerrar.php">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>