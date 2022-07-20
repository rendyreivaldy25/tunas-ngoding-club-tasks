<?php 
$conn = mysqli_connect("localhost", "root","","tunas_ngoding");

function delete($id){
    global $conn;

    $delete = "DELETE FROM user WHERE id = $id";
    mysqli_query($conn, $delete);

    return mysqli_affected_rows($conn);
}

?>