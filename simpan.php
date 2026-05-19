<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$barang = $_POST['barang'];
$hari = $_POST['hari'];

$total = 0;

$list_barang = [];
$list_gambar = [];

foreach($barang as $b){

    $pecah = explode("|", $b);

    $nama_barang = $pecah[0];
    $harga = $pecah[1];
    $gambar = $pecah[2];

    $total += $harga;

    $list_barang[] = $nama_barang;
    $list_gambar[] = $gambar;
}

$total = $total * $hari;

$barang_final = implode(", ", $list_barang);

$gambar_final = $list_gambar[0];

mysqli_query($conn, "

INSERT INTO penyewaan
(
    nama_penyewa,
    no_telepon,
    barang,
    hari,
    total_harga,
    gambar
)

VALUES
(
    '$nama',
    '$telepon',
    '$barang_final',
    '$hari',
    '$total',
    '$gambar_final'
)

");

header("location:data.php");

?>