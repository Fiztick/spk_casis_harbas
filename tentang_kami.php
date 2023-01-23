<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tentang Kami</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            height: 300px;
            align-items: center;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }

        img {
            display: block;
            width: 50%;
            height: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        #nama-kami {
            text-align: center;
            color: black;
        }

        .hafiz {
            display: inline-block;
            width: 150px;
            height: 150px;
            background: url("image/hafiz2.gif");
            background-position: 50% 50%;
            background-size: cover;
            border-radius: 50%;
        }

        .aldi {
            display: inline-block;
            width: 150px;
            height: 150px;
            background: url("image/aldi.png");
            background-position: 50% 25%;
            background-size: cover;
            border-radius: 50%;
        }

        .agung {
            display: inline-block;
            width: 150px;
            height: 150px;
            background: url("image/agung.gif");
            background-position: 50% 50%;
            background-size: cover;
            border-radius: 50%;
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

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <span>Tentang Kami</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div id="ranking-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;  transform:translate(0px, 50%);">
                        <h1 style="text-align: center; color:black;">Tentang Kami</h1>
                        <div class="row">
                            <div class="column">
                                <a class="aldi" style="margin:auto; text-align:center; display:block;"></a>
                                <h2 id="nama-kami">Aldi Dwi Prasetyo</h2>
                                <p id="nama-kami">2007411003</p>
                            </div>

                            <div class="column">
                                <a class="hafiz" style="margin:auto; text-align:center; display:block;"></a>
                                <h2 id="nama-kami">Hafiz Juansyah Putra</h2>
                                <p id="nama-kami">2007411020</p>
                            </div>

                            <div class="column">
                                <a class="agung" style="margin:auto; text-align:center; display:block;"></a>
                                <h2 id="nama-kami">Agung Reza Vergiawan</h2>
                                <p id="nama-kami">2007411029</p>
                            </div>
                        
                        </div>
                        <!-- End Of row -->
                    </div>
                    <!-- End Of ranking-wrapper -->
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