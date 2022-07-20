<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data biodata</title>
</head>
<body>
    <h1>Ubah data biodata</h1>
    <?php
        require 'tunas_ngoding_function.php';
        $row = read_by_id($_GET['id']);

        if(isset($_POST["submit"])){
            //mempersiapkan data untuk update
            $data["id"] = $_GET["id"];
            $data["nama"] = $_POST["nama"];
            $data["email"] = $_POST["email"];
            $data["alamat"] = $_POST["alamat"];
            $data["no_hp"] = $_POST["no_hp"];
            $data["hobi"] = $_POST["hobi"];
            if (update($data) > 0) {
                 //redirect page ke index.php
                header("location: index.php");
            } else {
                echo "Update Data GAGAL!";
            }
           
        }
    ?>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="id">No ID : </label>
                <input type="text" name="id" value=<?= $row['id'];?> disabled>
            </li>
            <li>
                <label for="id">Nama : </label>
                <input type="text" name="nama" value=<?= $row['nama'];?>>
            </li>
            <li>
                <label for="id">Email : </label>
                <input type="text" name="email" value=<?= $row['email'];?>>
            </li>
            <li>
                <label for="id">Alamat : </label>
                <input type="text" name="alamat" value=<?= $row['alamat'];?>>
            </li>
            <li>
                <label for="id">No. HP : </label>
                <input type="text" name="no_hp" value=<?= $row['no_hp'];?>>
            </li>
            <li>
                <label for="id">Hobi : </label>
                <input type="text" name="hobi" value=<?= $row['hobi'];?>>
            </li>
        </ul>

        <button type="submit" name="submit">Update data!</button>
    </form>

</body>
</html>