<?php


// modularitas file koneksi agar terhubung ke DB
include "koneksi.php";

//deklarasi variable dari text field ke field DB, agar mudah mendeklarasikan semua data
$id = $_POST['id'];
$namaproduk     = $_POST['namaproduk'];
$hargaproduk    = $_POST['hargaproduk'];
$beratproduk    = $_POST['beratproduk'];
$stok          = $_POST['stok'];
$deskripsi      = $_POST['deskripsi'];


//skirp DML update

	$sql = mysqli_query($koneksi, "UPDATE produk SET namaproduk='$namaproduk',
											 hargaproduk='$hargaproduk',
											 beratproduk='$beratproduk  ',
                                             stok='$stok',
                                             deskripsi='$deskripsi'
											 WHERE id = $id");
header('location:index.php');
