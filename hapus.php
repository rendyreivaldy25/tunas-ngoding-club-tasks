<?php 
include "mysql.php";
$conn->query("delete from data_diri where id='".$_GET['id']."'");
header("location:koneksi.php");
?> 