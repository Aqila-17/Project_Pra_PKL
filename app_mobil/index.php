<?php
include "koneksi.php";
$sql = "SELECT * FROM mobil";
$query = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mobil</h1>

    <table border="1">
        <tr>
            <th>id</th>
            <th>merk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php while($mobil = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?=$mobil['id'] ?></td>
                <td><?=$mobil['merk'] ?></td>
                <td><?=$mobil['harga'] ?></td>
                <td><?=$mobil['stok'] ?></td>
                <td>
                <a href="edit.php?= $mobil['no'] ?>">Edit</a>
                <a href="edit.php?= $mobil['no'] ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>