<?php
// cek session
session_start();
if (isset($_SESSION["login"])) {
    header("Location: home.php");
    exit;
}

require 'functions.php';
    
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user_account
                             WHERE username = '$username'");
    
        // check username
        if ( mysqli_num_rows($result) === 1 ) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                // set session
                $_SESSION["login"] = true;
                
                header("Location: home.php");
                exit;
            }   
        }
        // check jika datanya tidak ada atau passwordnya tidak sesuai maka set variable error = true
        $error = true;
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <?php if(isset($error)) :?>
        <p style = "color:red; font-weight:bold ;">Username / Password salah</p>
    <?php endif ;?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name = "username" id = "username">
            </li>
        
            <li>
                <label for="password">Password:</label>
                <input type="password" name = "password" id = "password">
            </li>
            <li>
                <button type="submit" name = "login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>