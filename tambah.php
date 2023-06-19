<?php


// modularitas file koneksi agar terhubung ke DB
include "koneksi.php";

//deklarasi variable dari text field ke field DB, agar mudah mendeklarasikan semua data

$namaproduk     = $_POST['namaproduk'];
$hargaproduk    = $_POST['hargaproduk'];
$beratproduk    = $_POST['beratproduk'];
$stok          = $_POST['stok'];
$deskripsi      = $_POST['deskripsi'];


//skirp DML insert

if (isset($_POST['simpan'])) {
    $sql = mysqli_query($koneksi, "INSERT into produk values('','$namaproduk','$hargaproduk','$beratproduk','$stok','$deskripsi')");

    //tambahkan direct otomatis kehalaman desen.php

    header('location:index.php'); // otomatis akan kembali ke index.php
}
?>