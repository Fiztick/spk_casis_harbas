<?php
include("../connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="../rumus-tabel.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK Kelompok 4</title>

    <!-- Custom font untuk web-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/6dd0d33a7f.js" crossorigin="anonymous"></script>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Script untuk bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <style>
        body {
            color:black;
        }

        .topbar.navbar-light .navbar-nav .nav-item .active{
            color:black;
        }

        .topbar.navbar-light .navbar-nav .nav-item .nav-link:hover{
            color:black;
        }
    </style>

    <!-- Link untuk membuat Rumus menggunakan MathJax-->
    <script>
        MathJax = {
            tex: {
                inlineMath: [['$', '$'], ['\\(', '\\)']]
            },
            svg: {
                fontCache: 'global'
            }
        };
    </script>
    <script type="text/javascript" src="path-to-MathJax/MathJax.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
</head>

<body id="page-top">
    <!-- bootstrap data table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

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
                <a class="nav-link" href="../index.php">
                    <span>Data Calon Siswa</span></a>
            </li>

            <!-- Nav Item - Ranking Casis -->
            <li class="nav-item active">
                <a class="nav-link" href="../ranking.php">
                    <span>Ranking Casis</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Settings -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <span>Rumus Topsis</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Div Konten Utama Web -->
        <div class="content-wrapper" class="d-flex flex-column">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Topbar Navbar -->
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="normalisasi.php">Normalisasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="ternormalisasi.php">Normalisasi dengan Bobot</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="solusi_ideal.php">Solusi Ideal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="jarak.php">Jarak dengan Solusi Ideal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="preferensi.php">Preferensi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <!-- Content 1 -->
            <div class="shadow p-3 mb-5 bg-white rounded">
                <h2><b>Penyelesaian masalah dengan TOPSIS:</b></h2>
                <h4>
                    <ol type="1">
                        <li>Membuat matriks keputusan yang ternormalisasi.</li>
                        <li>Membuat matriks keputusan yang ternormalisasi terbobot.</li>
                        <li>Menentukan matriks solusi ideal positif & matriks solusi ideal negatif.</li>
                        <li>Menentukan jarak antara nilai setiap alternatif dengan matriks solusi ideal positif &
                            matriks solusi ideal negatif.</li>
                        <b>
                            <li>Menentukan nilai preferensi untuk setiap alternatif.</li>
                        </b>
                    </ol>
                </h4>
            </div>

            <!-- Content 2 -->
            <div id="sip-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                <h1 style="text-align: center;">Nilai Preferensi</h1>
                <p>Nilai preferensi adalah nilai yang akan menjadi penentu dalam menentukan
                    peringkat siswa. Nilai preferensi dilambangkan dengan V. Nilai V didapat dari
                    perbandingan antara jarak terhadap solusi ideal negatif dengan jumlah jarak
                    terhadap solusi ideal positif dan negatif.</p>
                <div class="row" style="margin: 20px;">
                    <div id="formula-normalisasi" style="overflow-x:auto;">
                        Rumus untuk Nilai Preferensi : $$ {V_{t}=\frac{D_i^-}{D_i^-+{D_i^+}}}$$
                    </div>
                    <div>
                        <ul>
                            <li>𝑉𝑡 = Nilai Preferensi</li>
                            <li>𝐷𝑖− = Jarak terhadap solusi ideal negatif.</li>
                            <li>𝐷𝑖 += Jarak terhadap solusi ideal positif.</li>
                        </ul>
                    </div>
                    <div style="padding-left: 20px;">
                    </div>
                </div>

                Maka matriks Preferensi adalah sebagai berikut :

                <div class="row" style="margin: 20px;">
                    <div class="column">
                        $$ {
                        V_{t} = (V_{1},V_{2},V_{3},V_{4},V_{n})
                        } $$
                    </div>
                </div>
                <a href="../ranking.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Lihat Hasil Ranking</a>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
</body>
</html>