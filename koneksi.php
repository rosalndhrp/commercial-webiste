<?php
// deklarasi atribut server
$server = "localhost"; // 
$user = "root"; //username default dari server
$pass = ""; // kosongkan, karena kita tidak memiliki password pada database yang kita buat
$db = "shopuas"; // sesuai dengan nama DB yang dituju

// query connect mariaDB $koneksi selalu dipakai untuk operasi DML

$koneksi    = mysqli_connect($server, $user, $pass, $db);
if (mysqli_connect_error()) {
    trigger_error('Koneksi Gagal ');

    //menutup DB
    mysqli_close($koneksi);
}
?>
