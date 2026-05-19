<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$barang = $_POST['barang'];
$hari = $_POST['hari'];

$total = 0;

$list_barang = [];
$list_gambar = [];

foreach($barang as $b){

    $pecah = explode("|",$b);

    $nama_barang = $pecah[0];
    $harga = $pecah[1];
    $gambar = $pecah[2];

    $total += $harga;

    $list_barang[] = $nama_barang;
    $list_gambar[] = $gambar;
}

$total = $total * $hari;

$barang_final = implode(", ",$list_barang);

$gambar_final = $list_gambar[0];

mysqli_query($conn,"UPDATE penyewaan SET

nama_penyewa='$nama',
no_telepon='$telepon',
barang='$barang_final',
hari='$hari',
total_harga='$total',
gambar='$gambar_final'

WHERE id='$id'

");

header("location:data.php");

?>