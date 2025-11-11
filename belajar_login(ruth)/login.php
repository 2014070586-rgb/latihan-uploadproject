<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users where username = '$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
    } else{
        echo"<script>alert('Username atau password salah!');</script>";
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN LOGIN</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
    <h1 class="h1"><b>LOGIN</b></h1>
    <div class ="container">
        <form method = "POST">
            <table>
                <tr>
                    <td><label for="username">Masukkan username: </label></td>
                    <td><input type="text" name="username" placeholder="username" required></td>
                </tr>
                <tr>
                    <td><label for="passwod">Masukkan password: </label></td>
                    <td><input type="password" name="password" placeholder="password" required></td>
                </tr>
                <tr>
                    <td><button type="submit">login</button></td>
                </tr>
                </table>
                <p>Belum membuat akun?, silahkan buat akun <a href="register.php">disini</a></p>
        </form>
        <input type="hidden" name="login" value="1">
    </div>
</body>
</html>