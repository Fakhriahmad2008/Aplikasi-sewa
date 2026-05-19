<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM penyewaan WHERE id='$id'");

header("location:data.php");

?>