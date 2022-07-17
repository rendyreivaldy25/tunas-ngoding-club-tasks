<?php 
$name = strtolower(substr($_POST["name"],0,1));
$vocal_ltr = ["a", "i", "u", "e", "o"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (in_array($name, $vocal_ltr)) {
        echo "Nama anda berawalan dari huruf vokal";
    }else{
        echo "Nama anda berawalan bukan dari huruf vokal";
    }
}
?>