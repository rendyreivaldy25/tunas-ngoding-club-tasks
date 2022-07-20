<?php 
//memanggil file function
require 'koneksi_db.php';

//untuk mengambil data setiap row
function read_all() {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM user");
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;  
    }
    return $rows;
}

//untuk mengambil data sesuai id
function read_by_id($id) {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id ='".$id."'");
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;  
    }
    return $rows[0];
};

//untuk update data sesuai id
function update($data) {
    global $conn;
    $result = mysqli_query($conn, "UPDATE user SET 
    nama ='".$data["nama"]."',
    email ='".$data["email"]."',
    alamat ='".$data["alamat"]."',
    no_hp ='".$data["no_hp"]."',
    hobi ='".$data["hobi"]."' 
    WHERE id ='".$data["id"]."'");
    return $result;
};
?>