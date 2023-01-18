<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Casis</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="bg-white p-1" style="color:black">SPK</div>
                <div class="sidebar-brand-text mx-3">Kelompok 2</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Data Casis -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <span>Data Calon Siswa</span></a>
            </li>

            <!-- Nav Item - Ranking Casis -->
            <li class="nav-item active">
                <a class="nav-link" href="ranking.php">
                    <span>Ranking Casis</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Settings -->
            <li class="nav-item active">
                <a class="nav-link" href="rumus/normalisasi.php">
                    <span>Rumus Topsis</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                
                                
                            </ul>
                        </div>
                        
                    </div>
                    
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-center mb-4" align="center">
                        <h1 class="h3 mb-0 text-gray-800">Data Calon Siswa</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nilai Tertulis</th>
                                    <th scope="col">Nilai Raport</th>
                                    <th scope="col">Prestasi Internasional</th>
                                    <th scope="col">Prestasi Nasional</th>
                                    <th scope="col">Prestasi Lokal</th>
                                    <th scope="col">SKBN</th>
                                    <th scope="col">Cek Fisik</th>
                                    <th scope="col">SKCK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("connection.php");

                                // nampilin data dari database
                                $query = "SELECT * FROM casis";
                                $hasil = mysqli_query($con, $query);
                                
                                $i = 1;
                                while($row = mysqli_fetch_array($hasil)) {
                                
                                    echo "<tr><td>". $i++ ."</td>";
                                    echo "<td>". $row['nama'] ."</td>";
                                    echo "<td>". $row['nilai_tertulis'] ."</td>";
                                    echo "<td>". $row['nilai_raport'] ."</td>";
                                    echo "<td>". $row['prestasi_internasional'] ."</td>";
                                    echo "<td>". $row['prestasi_nasional'] ."</td>";
                                    echo "<td>". $row['prestasi_lokal'] ."</td>";
                                    echo "<td>". $row['skbn'] ."</td>";
                                    echo "<td>". $row['cek_fisik'] ."</td>";
                                    echo "<td>". $row['skck'] ."</td>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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