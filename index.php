<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kita Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">

                <div class="ht-right">
                    <a href="login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.php">DASHBOARD<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="menproduct.php">Men's</a></li>
                                <li><a href="women.php">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php">Customer</a></li>
                        <li><a href="index.php">Sold</a></li>
                        <li><a href="check-out.php">Check Out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid’s</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">

                    <div class="filter-widget">
                        <a href="insert.php" class="filter-btn">ADD NEW ITEMS</a>
                    </div>

                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <p>ALL PRODUCTS PRODUCTS</p>
                            </div>

                        </div>
                    </div>


                    <table width="800" border="1">
                        <tbody>
                            <tr>
                                <td width="20">NO</td>
                                <td width="200">Nama Produk</td>
                                <td width="60">Harga (Rp)</td>
                                <td width="60">Berat (gr)</td>
                                <td width="65">Stok</td>
                                <td width="200">deskripsi</td>
                                <td width="700">Aksi</td>

                            </tr>
                            <?php
                            // panggil koneksi 
                            include "koneksi.php";

                            //script sql
                            $sql = mysqli_query($koneksi, "SELECT * from  produk order by  id DESC ");
                            // variable nomor
                            $no = 1;

                            //looping
                            while ($tampil = mysqli_fetch_array($sql)) {

                            ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $tampil['namaproduk']; ?></td>
                                    <td><?php echo $tampil['hargaproduk']; ?></td>
                                    <td><?php echo $tampil['beratproduk']; ?></td>
                                    <td><?php echo $tampil['stok']; ?></td>
                                    <td><?php echo $tampil['deskripsi']; ?></td>
                                    <td><a href="update.php?id=<?php echo $tampil['id']; ?>" class="btn-danger btn">Edit</a>/<a href="delete.php?id=<?php echo $tampil['id']; ?>" class="btn-danger btn">Hapus</a>/<a href="sold.php?id=<?php echo $tampil['id']; ?>" class="btn-danger btn">Sold</a></td>
                                </tr>
                            <?php

                            }
                            ?>
                        </tbody>
                    </table>
                    <p></p>

                </div>
            </div>
        </div>
    </section>



    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>