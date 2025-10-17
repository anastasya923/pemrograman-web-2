<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrasi Mahasiswa Baru</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    // Tampilkan hasil registrasi
    echo "<h2>Data Registrasi Mahasiswa Baru</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><td><strong>Nama Lengkap</strong></td><td>$nama</td></tr>";
    echo "<tr><td><strong>NIM</strong></td><td>$nim</td></tr>";
    echo "<tr><td><strong>Program Studi</strong></td><td>$prodi</td></tr>";
    echo "<tr><td><strong>Jenis Kelamin</strong></td><td>$jk</td></tr>";
    echo "<tr><td><strong>Alamat</strong></td><td>$alamat</td></tr>";
    echo "<tr><td><strong>Email</strong></td><td>$email</td></tr>";
    echo "<tr><td><strong>No. Telepon</strong></td><td>$telepon</td></tr>";
    echo "</table><br>";
    echo "<a href='registrasi_mahasiswa.php'>← Kembali ke Form</a>";
} else {
?>
    <h2>Formulir Registrasi Mahasiswa Baru</h2>
    <form action="" method="post">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Program Studi:</label><br>
        <select name="prodi" required>
            <option value="">--Pilih Program Studi--</option>
            <option value="Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
            <option value="Manajemen">Manajemen</option>
        </select><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan" required> Perempuan<br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" rows="4" cols="40" required></textarea><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>No. Telepon:</label><br>
        <input type="text" name="telepon" required><br><br>

        <input type="submit" value="Daftar Sekarang">
    </form>
<?php
}
?>
</body>
</html>