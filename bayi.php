<?php

require 'koneksi.php';

$sql = "SELECT * FROM bayi";
$babies = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Bayi</title>
</head>
<body>

    <h1>Data Bayi</h1>

    <a href="index.php">Kembali</a>
    <a href="bayi-tambah.php">Tambah Bayi</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Ibu</th>
                <th>Nama Ayah</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; foreach ($babies as $bayi) : ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $bayi['nama'] ?></td>
                    <td><?= $bayi['nama_ibu'] ?></td>
                    <td><?= $bayi['nama_ayah'] ?></td>
                    <td><?= $bayi['tanggal_lahir'] ?></td>
                    <td>
                        <a href="bayi-detail.php?id=<?= $bayi['id_bayi'] ?>">Detail</a>
                        <a href="bayi-edit.php?id=<?= $bayi['id_bayi'] ?>">Edit</a>
                        <a href="bayi-hapus.php?id=<?= $bayi['id_bayi'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>
