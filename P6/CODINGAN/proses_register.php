<?php
include "koneksi.php";

$nm = $_POST['nm_pasien'];
$lahir = $_POST['tgl_lahir'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telp = $_POST['no_telp'];
$user = $_POST['username'];
$pass = $_POST['password'];

$cek = mysqli_query($conn, "SELECT * FROM pasien WHERE username='$user'");

if (mysqli_num_rows($cek) > 0) {
    echo "<script>alert('Username sudah dipakai!'); window.location='register.php';</script>";
    exit;
}

$q = mysqli_query($conn, "INSERT INTO pasien 
(nm_pasien, tgl_lahir, jenis_kelamin, alamat, no_telp, username, password)
VALUES ('$nm', '$lahir', '$jk', '$alamat', '$telp', '$user', '$pass')");

if ($q) {
    echo "<script>alert('Registrasi berhasil, silakan login'); window.location='login.php';</script>";
} else {
    echo "<script>alert('Gagal mendaftar'); window.location='register.php';</script>";
}
?>