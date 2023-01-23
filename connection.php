<?php
$con = mysqli_connect("localhost", "root", "", "db_casis_harbas");

if(!$con) {
    echo "Koneksi gagal";
    die();
}
?>