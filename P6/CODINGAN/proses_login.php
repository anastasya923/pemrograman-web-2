<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$role     = $_POST['role'];   // ambil role

// cek berdasarkan role
if ($role == "pasien") {
    $q = mysqli_query($conn, "SELECT * FROM pasien WHERE username='$username'");
} else if ($role == "dokter") {
    $q = mysqli_query($conn, "SELECT * FROM dokter WHERE username='$username'");
} else {
    echo "<script>alert('Role tidak valid'); window.location='login.php';</script>";
    exit;
}

// cek apakah username ditemukan
if (mysqli_num_rows($q) > 0) {

    $data = mysqli_fetch_assoc($q);

    // cek password (belum hash)
    if ($password === $data['password']) {

        // simpan session
        $_SESSION['user'] = $data;
        $_SESSION['role'] = $role;

        // arahkan halaman sesuai role
        if ($role == "pasien") {
            header("Location: index.php"); // atau dashboard_pasien.php
        } else {
            header("Location: dashboard_dokter.php");
        }
        exit;

    } else {
        echo "<script>alert('Password salah'); window.location='login.php';</script>";
    }

} else {
    echo "<script>alert('Username tidak ditemukan'); window.location='login.php';</script>";
}
?>