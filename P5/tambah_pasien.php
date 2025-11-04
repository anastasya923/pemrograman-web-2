<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Pasien</title>
<style>
body{font-family:Poppins;background:#FBEDED;padding:30px;}
form{background:white;padding:20px;border-radius:10px;width:350px;margin:auto;box-shadow:0 3px 10px rgba(0,0,0,0.1);}
input,textarea,select{width:100%;padding:8px;margin:6px 0;border:1px solid #aaa;border-radius:6px;}
button{background:#7A1C1C;color:white;padding:10px;width:100%;border:none;border-radius:6px;margin-top:10px;}
</style>
</head>
<body>

<h2>Tambah Data Pasien</h2>

<form method="post">
<input type="text" name="id_pasien" placeholder="ID Pasien" required>
<input type="text" name="nama_pasien" placeholder="Nama Pasien" required>
<input type="date" name="tanggal_lahir" required>

<select name="jenis_kelamin">
<option value="L">Laki-laki</option>
<option value="P">Perempuan</option>
</select>

<textarea name="alamat" placeholder="Alamat"></textarea>
<input type="text" name="no_telp" placeholder="No Telepon">

<button type="submit" name="simpan">Simpan</button>
</form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($conn,"INSERT INTO pasien VALUES(
        '$_POST[id_pasien]',
        '$_POST[nama_pasien]',
        '$_POST[tanggal_lahir]',
        '$_POST[jenis_kelamin]',
        '$_POST[alamat]',
        '$_POST[no_telp]'
    )");
    echo "<script>alert('Berhasil!'); window.location='pasien.php';</script>";
}
?>

</body>
</html>