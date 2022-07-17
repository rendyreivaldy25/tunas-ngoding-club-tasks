<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>

<?php 
//Melakukan pengecekan awalan huruf vokal
$nama = $_POST["name"];
$nama_awalan = strtolower(substr($nama,0,1));
if(strpos("aiueo", $nama_awalan) !== false){
    echo "nama anda berawalan dari huruf vokal";
}
else{
    echo "nama anda berawalan bukan dari huruf vokal";
}
?>
</body>
</html>
