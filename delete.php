<?php 
require 'functions.php';
require 'function_delete.php';

// $nilai = isset ($array['index_array']) ? $array['index_array']:'';
$id = $_GET["id"];

if (delete($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'home.php';
        </script>
    ";
}else {
    echo "
        <script>
            alert('Data tidak berhasil dihapus');
            document.location.href = 'home.php';
        </script>
    ";
}


?>