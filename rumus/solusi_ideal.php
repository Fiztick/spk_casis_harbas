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
    <title>Solusi Ideal</title>

    <!-- Custom font untuk web-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/6dd0d33a7f.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
            color: black;
        }


        .topbar.navbar-light .navbar-nav .nav-item .nav-link {
            color: gray;
        }

        .topbar.navbar-light .navbar-nav .nav-item .active {
            color: black;
            font-weight: bolder;

        }

        .topbar.navbar-light .navbar-nav .nav-item .nav-link:hover {
            color: black;
        }

        b,
        strong {
            font-weight: bolder;
            color: black;
        }

        .h4,
        h4 {
            font-size: 1.5rem;
            color: gray;
        }

        .sidebar-dark .nav-item.active .nav-link:hover {
            color: #4e73df;
            background-color: white;
        }
    </style>

    <!-- Link untuk membuat Rumus menggunakan MathJax-->
    <script>
        MathJax = {
            tex: {
                inlineMath: [
                    ['$', '$'],
                    ['\\(', '\\)']
                ]
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
                <div class="sidebar-brand-text mx-1">SMK Harapan Bangsa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Data Casis -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <span>Studi Kasus</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="../calon_siswa.php">
                    <span>Data Calon Siswa</span></a>
            </li>

            <!-- Nav Item - Rumus Topsis -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <span>Rumus Topsis</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Ranking Casis -->
            <li class="nav-item active">
                <a class="nav-link" href="../ranking.php">
                    <span>Ranking Calon Siswa</span></a>
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
                                <a class="nav-link active" aria-current="page" href="solusi_ideal.php">Solusi Ideal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="jarak.php">Jarak dengan Solusi Ideal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="preferensi.php">Preferensi</a>
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
                        <li>Membuat matriks keputusan yang ternormalisasi</li>
                        <li>Membuat matriks keputusan yang ternormalisasi terbobot</li>
                        <b>
                            <li>Menentukan matriks solusi ideal positif & matriks solusi ideal negatif</li>
                        </b>
                        <li>Menentukan jarak antara nilai setiap alternatif dengan matriks solusi ideal positif &
                            matriks
                            solusi ideal negatif</li>
                        <li>Menentukan nilai preferensi untuk setiap alternatif.</li>
                    </ol>
                </h4>
            </div>

            <!-- Content 2 -->
            <div id="sip-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                <h1 style="text-align: center;">Solusi Ideal Positif</h1>
                <p>Dikarenakan semua kriteria yang digunakan merupakan kriteria manfaat,
                    maka solusi ideal positif pada penelitian ini merupakan kombinasi nilai
                    terbesar pada setiap aspek penilaian dari matriks y. Berikut adalah formula untuk
                    mencari A+ :</p>
                <div class="row" style="margin: 20px;">
                    <div id="formula-normalisasi" style="overflow-x:auto;">
                        Rumus untuk Solusi Ideal Positif : $$ {A^{+}=(y_1^+),(y_2^+),(y_3^+),(y_4^+),(y_n^+)}$$
                    </div>
                    <div>
                        <ul>
                            <li>A+ = Matriks keputusan ternormalisasi terbobot</li>
                            <li>n = banyaknya kolom</li>
                        </ul>
                    </div>
                    <div style="padding-left: 20px;">
                    </div>
                </div>
                Maka matriks Solusi Ideal Positif adalah sebagai berikut :
                <div class="row" style="margin: 20px;">
                    <div class="column">
                        $$ {
                        A^{+}=\left(\begin{array}{c}
                        y_1^+,y_2^+,y_3^+,y_4^+,y_n^+
                        \end{array}\right)
                        } $$
                    </div>
                </div>
                
                <div id="normalisasi-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                    <p>Berikut adalah contoh tabel Solusi Ideal Positif :</p>
                    <!-- Manggil Datatable dari js -->
                    <table id="tabel_ideal1" class="display hover" width="100%"></table>
                    <script>
                        js_ideal1();
                    </script>
                </div>
            </div>

            <!-- Content 3 -->
            <div id="sin-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                <h1 style="text-align: center;">Solusi Ideal Negatif</h1>
                <p>Dikarenakan semua kriteria yang digunakan merupakan kriteria manfaat,
                    maka solusi ideal positif pada penelitian ini merupakan kombinasi nilai
                    20
                    terkecil pada setiap aspek penilaian dari matriks Y. Berikut adalah formula
                    untuk mencari A- :
                </p>
                <div class="row" style="margin: 20px;">
                    <div id="formula-normalisasi" style="overflow-x:auto;">
                        Rumus untuk Solusi Ideal Positif : $$ {A^{-}=(y_1^-),(y_2^-),(y_3^-),(y_4^-),(y_n^-)}$$
                    </div>
                    <div>
                        <ul>
                            <li>A- = Matriks keputusan ternormalisasi terbobot</li>
                            <li>n = banyaknya kolom</li>
                        </ul>
                    </div>
                    <div style="padding-left: 20px;">
                    </div>
                </div>

                Maka matriks Solusi Ideal Positif adalah sebagai berikut :
                <div class="row" style="margin: 20px;">
                    <div class="column">
                        $$ {
                        A^{-}=\left(\begin{array}{c}
                        y_1^-,y_2^-,y_3^-,y_4^-,y_n^-
                        \end{array}\right)
                        } $$
                    </div>
                </div>

                <div id="normalisasi-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                    <p>Berikut adalah contoh tabel Solusi Ideal Negatif :</p>
                    <!-- Manggil Datatable dari js -->
                    <table id="tabel_ideal2" class="display hover" width="100%"></table>
                    <script>
                        js_ideal2();
                    </script>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

    <!-- Script Data DataTable -->
    <script>
        $(document).ready(function() {
            $('#table-data-normalisasi').DataTable();
        });
    </script>
</body>

</html>