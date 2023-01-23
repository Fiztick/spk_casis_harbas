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

    <title>Ranking Calon Siswa Baru</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #000;
            color: black;
            border-top: 2px solid #000;
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #000;
            color: black;
        }

        .text-gray-800 {
            color: #000 !important;
        }

        .sidebar-dark .nav-item.active .nav-link:hover {
            color: #4e73df;
            background-color: white;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="bg-white p-1" style="color:black">SPK</div>
                <div class="sidebar-brand-text mx-1">SMK Harapan Bangsa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Data Casis -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <span>Studi Kasus</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="calon_siswa.php">
                    <span>Data Calon Siswa</span></a>
            </li>

            <!-- Nav Item - Rumus Topsis -->
            <li class="nav-item active">
                <a class="nav-link" href="rumus/normalisasi.php">
                    <span>Rumus Topsis</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Ranking Casis -->
            <li class="nav-item active">
                <a class="nav-link" href="ranking.php">
                    <span>Ranking Calon Siswa</span></a>
            </li>

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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-center mb-4" align="center">
                        <h1 class="h3 mb-0 text-gray-800">Ranking Penerimaan Calon Siswa Baru</h1>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-center mb-4" align="center">
                        <h3 class="h5 mb-0 text-black-800">SMK Harapan Bangsa </h3>
                    </div> -->


                    <!-- Content Row -->
                    <div class="row">
                        <div id="ranking-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                            <h1 style="text-align: center; color:black;">Ranking Calon Siswa</h1>
                            <p>Dari data calon siswa yang telah diterima dan diseleksi dengan sistem pendukung keputusan ini, hasil akhir perankingan
                                calon siswa yang direkomendasikan untuk diterima oleh sekolah yakni 5 siswa dengan hasil ranking teratas.
                                Berikut adalah daftar tabel hasil perangkingan calon siswa SMK Harapan Bangsa Depok.</p>
                        </div>

                        <!-- Page Heading -->
                        <div class="d-sm-flex mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Tabel Ranking Penerimaan Calon Siswa Baru<br>
                                SMK Harapan Bangsa</h1>
                        </div>

                        <table class="table table-striped p-5">
                            <thead>
                                <tr>
                                    <th scope="col">Ranking</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("connection.php");

                                // $search_term = 'izzi';
                                // $pattern = '/' . preg_quote($search_term, '/') . '/i';

                                // echo $pattern;

                                // nampilin data dari database
                                $query = "SELECT * FROM ranking_casis";
                                // $query = "SELECT * FROM ranking_casis WHERE id LIKE '%$search_term%' OR nama LIKE '%$search_term%'";
                                $hasil = mysqli_query($con, $query);

                                $i = 1;
                                if (mysqli_num_rows($hasil) > 0) {
                                    // The query returned at least one row
                                    // Loop through the result set and process the rows
                                    while ($row = mysqli_fetch_array($hasil)) {
                                        $id = $row['id'];
                                        $nama = $row['nama'];
                                        // $id = preg_replace($pattern, '<span class="nyala">$0</span>', $id); 
                                        // $nama = preg_replace($pattern, '<span class="nyala">$0</span>', $nama);
                                        echo "<tr><td>" . $i++ . "</td>";
                                        echo "<td>" . $id  . "</td>";
                                        echo "<td>" . $nama . "</td>";
                                    }
                                } else {
                                    // The query did not return any rows
                                    echo 'No matching rows found';
                                }

                                ?>
                            </tbody>
                        </table>
                        <div id="ranking-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                            <h1 style="text-align: center; color:black;">Kesimpulan</h1>
                            <p>Perangkingan data calon siswa SMK Harapan Bangsa Depok dengan metode
                                topsis berhasil terhitung dengan baik sesuai dengan data calon siswa
                                yang telah di input ke dalam sistem.
                            </p>
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

<?php

include("connection.php");
include("topsis.php");

// run query
$query = "SELECT * FROM casis";
$hasil = mysqli_query($con, $query);

// set array
// $nama = array();
// $nilai_tertulis = array();
// $nilai_raport = array();
// $prestasi_internasional = array();
// $prestasi_nasional  = array();
// $prestasi_lokal  = array();
// $skbn  = array();
// $cek_fisik  = array();
// $skck  = array();

$casis = array();

// look through query
while ($row = mysqli_fetch_array($hasil)) {

    //   // add each row returned into an array
    $casis[] = [
        $row['id'],
        $row['nama'],
        $row['nilai_tertulis'],
        $row['nilai_raport'],
        $row['prestasi_internasional'],
        $row['prestasi_nasional'],
        $row['prestasi_lokal'],
        $row['skbn'],
        $row['cek_fisik'],
        $row['skck'],
    ];
}

$result = array();
$result = topsis($casis);
$counter = 1;
foreach ($result as $row) {
    $nama = $row[0];
    $score = $row[1];
    $id = 'RCH'  . sprintf("%04d", $counter) . strtoupper(substr($nama, 0, 3));
    $counter++;
    // Masukkin ke database
    $sql = "INSERT INTO ranking_casis (id, nama, score) VALUES ('$id', '$nama', '$score')";
    mysqli_query($con, $sql);
}

mysqli_close($con);

?>