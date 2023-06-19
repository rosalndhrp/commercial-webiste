<?php

session_start();
include 'koneksi.php';
$usernamee = $_POST['username'];
$passwordd = $_POST['password'];
$_SESSION['tbl_admin'] = $usernamee;


$sqllogin = "SELECT * FROM tbl_admin WHERE username='$usernamee' AND password='$passwordd'";
$querilogin = mysqli_query($koneksi, $sqllogin);
// variabel hasil berbentuk array, punya key
$hasil = mysqli_fetch_array($querilogin);

if ($usernamee == $hasil['username'] and $passwordd == $hasil['password']) {
    header('location:index.php');
} else {
    header('location:index.php?log=0');
}
?>