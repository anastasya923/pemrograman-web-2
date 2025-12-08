<?php  
// jumlah data
$q = mysqli_query($conn, "SELECT COUNT(id_pasien) FROM pasien");
$row = mysqli_fetch_row($q);
$total_data = $row[0];

// jumlah data per halaman
$limit = 5;

// total halaman
$total_page = ceil($total_data / $limit);

// halaman aktif
$page = isset($_GET['pn']) ? (int)$_GET['pn'] : 1;
if($page < 1) $page = 1;
if($page > $total_page) $page = $total_page;

// posisi data
$start = ($page - 1) * $limit;

// ambil data sesuai halaman
$data_pasien = mysqli_query($conn, "SELECT * FROM pasien ORDER BY id_pasien ASC LIMIT $start, $limit");

// generate tombol pagination
$pagination = "";

// Previous
if($page > 1){
    $pagination .= "<a href='?pn=".($page-1)."'>Previous</a>";
}

// nomor halaman
for($i = 1; $i <= $total_page; $i++){
    if($i == $page){
        $pagination .= "<span class='active'>$i</span>";
    } else {
        $pagination .= "<a href='?pn=$i'>$i</a>";
    }
}

// Next
if($page < $total_page){
    $pagination .= "<a href='?pn=".($page+1)."'>Next</a>";
}
?>
