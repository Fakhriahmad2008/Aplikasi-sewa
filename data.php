<?php
include 'koneksi.php';

$data = mysqli_query($conn,"SELECT * FROM penyewaan ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Penyewaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="card-table">

    <a href="index.php" class="back-btn">
        ← Kembali
    </a>

    <h1>Data Penyewaan</h1>

    <table>

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Barang</th>
            <th>Hari</th>
            <th>Total</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;

        while($d = mysqli_fetch_array($data)){
        ?>

        <tr>

            <td><?= $no++; ?></td>

            <td><?= $d['nama_penyewa']; ?></td>

            <td><?= $d['no_telepon']; ?></td>

            <td><?= $d['barang']; ?></td>

            <td><?= $d['hari']; ?> Hari</td>

            <td>
                Rp<?= number_format($d['total_harga']); ?>
            </td>

            <td>
                <img src="<?= $d['gambar']; ?>" class="table-img">
            </td>

            <td>

                <a href="edit.php?id=<?= $d['id']; ?>" class="edit-btn">
                    Edit
                </a>

                <br>

                <a href="hapus.php?id=<?= $d['id']; ?>" class="delete-btn">
                    Hapus
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</div>

</body>
</html>