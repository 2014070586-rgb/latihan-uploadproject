<?php

include "koneksi.php";

if(isset($_POST['register'])){
    $username=$_POST['username'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nama=$_POST['nama_lengkap'];
    

    $query="INSERT INTO users(username, password, nama_lengkap) VALUES('$username', '$password', '$nama')";
    $result=mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Registrasi berhasil! Silahkan login.');
        window.location='login.php';</script>";
    } else{
        echo "Gagal mendaftar!";
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN REGISTER</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
    <h1 class="h1"><b>FORM REGISTRASI</b></h1>
    <div class="container">
        <form method = "POST">
            <table>
                <tr>
                    <td><label for="nama_lengkap">Masukkan nama</label></td>
                    <td><input type = "text" name="nama_lengkap" placeholder="nama lengkap"></td>    
                </tr>
                <tr>
                    <td><label for="username">Masukkan username</label></td>
                    <td><input type = "text" name="username" placeholder="username" required></td>    
                </tr>
                <tr>
                    <td><label for="password">Masukkan password</label></td>
                    <td><input type = "password" name="password" placeholder="password" required></td>    
                </tr>
                <tr>
                    <td><button type = "submit">simpan</button></td>
                </tr>
                <tr>
                    <td><p>Sudah punya akun?, <a href=login.php>Yuk login!</a></p></td>
                </tr>
            </table>
            <input type="hidden" name="register" value="1">
        </form>
    </div>
</body>
</html>