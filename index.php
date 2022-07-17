<html>
<body>

<?php 
$name_substr = strtolower(substr($_POST["name"],0,1));
$vocal_ltr = ["a", "i", "u", "e", "o"];
?>

Welcome <?php echo $_POST["name"]; ?><br>

<?php
    if (in_array($name_substr, $vocal_ltr)) {
        echo "Nama Anda berawalan dari huruf vokal";
    }else{
        echo "Nama Anda berawalan bukan dari huruf vokal";
    }
?>

<br>

Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>
