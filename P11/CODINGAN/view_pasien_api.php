<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>View Data Pasien (REST API)</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f8;
    padding: 30px;
}
h2 {
    text-align: center;
}
table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    margin-top: 20px;
}
th, td {
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 14px;
    text-align: center;
}
th {
    background: #7A1C1C;
    color: white;
}
img {
    width: 70px;
    border-radius: 6px;
}
.error {
    text-align: center;
    color: red;
    margin-top: 20px;
}
</style>
</head>

<body>

<h2>Data Pasien (REST API)</h2>

<?php
// URL API
$api_url = "http://localhost/db_rumah_sakit/API/pasien_api.php";

// ambil data dari API
$response = file_get_contents($api_url);

if ($response === FALSE) {
    echo "<p class='error'>Gagal mengambil data dari API</p>";
    exit;
}

// decode JSON
$data_pasien = json_decode($response, true);

if (empty($data_pasien)) {
    echo "<p class='error'>Data pasien tidak tersedia</p>";
    exit;
}
?>

<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Tgl Lahir</th>
    <th>JK</th>
    <th>Alamat</th>
    <th>No Telp</th>
    <th>Foto</th>
</tr>

<?php foreach ($data_pasien as $row): ?>
<tr>
    <td><?= $row['id_pasien']; ?></td>
    <td><?= $row['nm_pasien']; ?></td>
    <td><?= $row['tgl_lahir']; ?></td>
    <td><?= $row['jenis_kelamin']; ?></td>
    <td><?= $row['alamat']; ?></td>
    <td><?= $row['no_telp']; ?></td>
    <td>
        <?php if (!empty($row['foto']) && file_exists("uploads/".$row['foto'])): ?>
            <img src="uploads/<?= $row['foto']; ?>">
        <?php else: ?>
            <i>-</i>
        <?php endif; ?>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
