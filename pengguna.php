<?php

require 'koneksi.php';

$sql = "SELECT * FROM pengguna";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Pengguna</title>
    </head>
    <body>
        <h1>Data pengguna</h1>
        <a href="index.php">Kembali</a>
        <a href="pengguna-tambah.php">Tambah pengguna</a>

        <table>
            <thead>
                <th>No</th>
                <th>Nama pengguna</th>
                <th>Username</th>
                <th>Role</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $no=0; foreach($rows as $row): ?>
                    <tr>
                        <td><?=++$no?></td>
                        <td><?$row['nama']?></td>
                        <td><?$row['username']?></td>
                        <td><?$row['role']?></td>
                        <td>
                            <a href="pengguna-hapus.php?id=<?=$row['id_pengguna']?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </body>