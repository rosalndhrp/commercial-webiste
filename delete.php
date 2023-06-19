<?php

include "koneksi.php";
	
	
	//memanggil id dengan method get
	
	$id=$_GET['id'];
	$sql=mysqli_query($koneksi,"DELETE FROM produk WHERE id='$id'");

	header('location:index.php');

?>