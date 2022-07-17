<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>

<?php 
$nama_awal =substr($_POST["name"],0,1);
$arr1=['a','i','u','e','o'];
switch ($nama_awal) {
    case in_array($nama_awal,$arr1):
        echo "nama anda berawalan dari huruf vokal";
        break;
    
    default:
        echo "nama anda berawalan bukan dari huruf vokal";
        break;
}


?>
</body>
</html>
