<?php 
require 'tunas_ngoding_function.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
<a href= add_user.php>Tambah Data</a>
<table border="1" cellpadding="10" cellspacing"=0">
    <tr>
        <td>No.</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Alamat</td>
        <td>No. HP</td>
        <td>Hobi</td>
        <td>Aksi</td>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( read_all() as $row) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["no_hp"]; ?></td>
        <td><?= $row["hobi"]; ?></td>
        <td>
           <a href=<?= "update.php?id=".$row["id"]; ?>>Edit</a>
           <a href=<?= "delete.php?id=".$row["id"]; ?>>Hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table> 
</body>
</html>