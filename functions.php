<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root","","tunas_ngoding");

function tambah($data_user){
    global $conn;

    // ambil data dari tiap element dalam form add
    $nama = htmlspecialchars($data_user["nama"]);
    $email = htmlspecialchars($data_user["email"]);
    $alamat = htmlspecialchars($data_user["alamat"]);
    $no_hp = htmlspecialchars($data_user["no_hp"]);
    $hobi = htmlspecialchars($data_user["hobi"]);
    date_default_timezone_set('Asia/Jakarta');
    $created_on = date('Y-m-d H:i:s');

    // query insert data into table user
    $insert = "INSERT INTO user
               VALUES ('', 
                       '$nama',
                       '$email',
                       '$alamat',
                       '$no_hp',
                       '$hobi',
                       '$created_on',
                       '' )";

    mysqli_query($conn, $insert);   
    
    return mysqli_affected_rows($conn);
}

function registrasi($data){
    global $conn;

    $username  = strtolower(stripslashes($data["username"]));
    $password  = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    
    date_default_timezone_set('Asia/Jakarta');
    $create_timestamp = date('Y-m-d H:i:s');
    // check existing username
    $result = mysqli_query($conn, "SELECT username FROM user_account WHERE username = '$username'");
    // var_dump($result);
    if (mysqli_fetch_assoc($result)) {
        echo "<script> alert('Username sudah terdaftar');</script>";
        return false;
    }

    // check konfirmasi password
    if ($password !== $password2) {
        echo "<script> alert('Konfirmasi password tidak sesuai');</script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan data userbaru ke database;
    mysqli_query($conn, "INSERT INTO user_account VALUES('', '$username', '$password', '$create_timestamp')");
    return mysqli_affected_rows($conn);
}

?>