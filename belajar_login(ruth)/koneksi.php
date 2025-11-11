<?php

$koneksi = mysqli_connect("localhost", "root", "mysql", "database_baru");

if(mysqli_connect_error()){
    echo 'koneksi database gagal : ' . mysqli_connect_error();
}

?>