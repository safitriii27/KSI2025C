<?php
$koneksi = mysqli_connect("localhost", "root", "", "ksi2025c");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
