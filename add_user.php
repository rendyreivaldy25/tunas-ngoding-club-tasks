<?php
// cek session
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// check apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    
    // check apakah data berhasil ditambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        // echo "Data berhasil ditambahkan";
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'home.php';
            </script>     
        ";
    }else{
        // echo "Data gagal ditambahkan";
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = 'home.php';
            </script>     
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Data</title>
</head>
<body>
    <a href="home.php">Back</a>
    <h1>Tambah data baru</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" required>
            </li>

            <li>
                <label for="nama">Email: </label>
                <input type="text" name="email">
            </li>

            <li>
                <label for="nama">Alamat: </label>
                <input type="text" name="alamat">
            </li>

            <li>
                <label for="nama">No. Hp: </label>
                <input type="text" name="no_hp">
            </li>

            <li>
                <label for="nama">Hobi: </label>
                <input type="text" name="hobi">
            </li>
            <li>
                <button type="submit" name="submit">Add</button>
            </li>
        </ul>
    </form>
</body>
</html>