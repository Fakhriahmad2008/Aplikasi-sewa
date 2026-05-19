<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM penyewaan WHERE id='$id'");

$d = mysqli_fetch_array($data);

$barang_lama = $d['barang'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Penyewaan</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="form-box">

    <a href="data.php" class="back-btn">
        ← Kembali
    </a>

    <h1>Edit Penyewaan</h1>

    <form method="POST" action="update.php">

        <input type="hidden" name="id" value="<?= $d['id']; ?>">

        <input 
        type="text" 
        name="nama" 
        value="<?= $d['nama_penyewa']; ?>" 
        required>

        <input 
        type="number" 
        name="telepon" 
        value="<?= $d['no_telepon']; ?>" 
        required>

        <label class="label-title">
            Pilih Barang
        </label>

        <div class="produk-grid">

            <label class="produk-card">

                <input 
                type="checkbox" 
                name="barang[]" 
                value="Canon Kamera|150000|img/canon.jpg"

                <?php
                if(strpos($barang_lama,"Canon Kamera") !== false){
                    echo "checked";
                }
                ?>

                >

                <img src="img/canon.jpg">

                <h3>Canon</h3>

                <p>Kamera - 150K / Hari</p>

            </label>

            <label class="produk-card">

                <input 
                type="checkbox" 
                name="barang[]" 
                value="Samsung|120000|img/samsung.jpg"

                <?php
                if(strpos($barang_lama,"Samsung") !== false){
                    echo "checked";
                }
                ?>

                >

                <img src="img/samsung.jpg">

                <h3>Samsung</h3>

                <p>HP - 120K / Hari</p>

            </label>

            <label class="produk-card">

                <input 
                type="checkbox" 
                name="barang[]" 
                value="Asus|250000|img/asus.jpg"

                <?php
                if(strpos($barang_lama,"Asus") !== false){
                    echo "checked";
                }
                ?>

                >

                <img src="img/asus.jpg">

                <h3>Asus</h3>

                <p>Komputer - 250K / Hari</p>

            </label>

        </div>

        <input 
        type="number" 
        name="hari" 
        value="<?= $d['hari']; ?>" 
        required>

        <button type="submit">
            Update Penyewaan
        </button>

    </form>

</div>

</div>

</body>
</html>