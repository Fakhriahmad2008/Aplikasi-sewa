<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penyewaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="form-box">

    <a href="index.php" class="back-btn">
        ← Kembali
    </a>

    <h1>Tambah Penyewaan</h1>

    <form method="POST" action="simpan.php">

        <input 
        type="text" 
        name="nama" 
        placeholder="Nama Penyewa"
        required>

        <input 
        type="number" 
        name="telepon" 
        placeholder="Nomor Telepon"
        required>

        <label class="label-title">
            Pilih Barang
        </label>

        <div class="produk-grid">

            <label class="produk-card">

                <input 
                type="checkbox" 
                name="barang[]" 
                value="Canon Kamera|150000|img/canon.jpg">

                <img src="img/canon.jpg">

                <h3>Canon</h3>

                <p>Kamera - 150K / Hari</p>

            </label>

            <label class="produk-card">

                <input 
                type="checkbox" 
                name="barang[]" 
                value="Samsung|120000|img/samsung.jpg">

                <img src="img/samsung.jpg">

                <h3>Samsung</h3>

                <p>HP - 120K / Hari</p>

            </label>

            <label class="produk-card">

                <input 
                type="checkbox" 
                name="barang[]" 
                value="Asus|250000|img/asus.jpg">

                <img src="img/asus.jpg">

                <h3>Asus</h3>

                <p>Komputer - 250K / Hari</p>

            </label>

        </div>

        <input 
        type="number" 
        name="hari" 
        placeholder="Jumlah Hari"
        required>

        <button type="submit">
            Simpan Penyewaan
        </button>

    </form>

</div>

</div>

</body>
</html>