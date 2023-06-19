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

    <?php
    include "koneksi.php";

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "SELECT * FROM produk where id = '$id'");

    $r = mysqli_fetch_array($sql);

    ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">

                <div class="ht-right">
                    <a href="register.html" class="login-panel"><i class="fa fa-user"></i>Login</a>

                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="#" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <!-- <button type="button" class="category-btn">All Categories</button> -->
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">

                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="index.php">DASHBOARD</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="menproduct.html">Men's</a></li>
                                <li><a href="women.html">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="index.html">Customer</a></li>
                        <li><a href="index.html">Sold</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">

                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./check-out.html">Checkout</a></li>

                                <li><a href="./register.html">Register</a></li>
                                <li><a href="./login.html">Login</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Update</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <h4 style="text-align: center;">UPDATE PRODUCT</h4>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card-add">
                    <form id="form1" name="form1" method="post" action="edit.php">
                        <input type="hidden" name="id" value="<?php echo $id['id']; ?>">
                        <table width="700" border="1">
                            <tbody>
                                <tr>
                                    <td width="205">Nama Produk</td>
                                    <td width="479"><input type="text" name="namaproduk" id="namaproduk" value="<?php echo $r['namaproduk'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td><input type="text" name="hargaproduk" id="harga" value="<?php echo $r['hargaproduk'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Berat</td>
                                    <td><input type="text" name="beratproduk" id="berat" value="<?php echo $r['beratproduk'] ?>"></td>

                                </tr>

                                <tr>
                                    <td>Stok</td>
                                    <td><input type="text" name="stok" id="stok" value="<?php echo $r['stok'] ?>"></td>

                                <tr>
                                    <td>Deskripsi</td>
                                    <td><textarea name="deskripsi" id="deskripsi"><?php echo $r['deskripsi']; ?></textarea></td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" name="submit" id="submit" value="simpan" class="btn-danger btn"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>



                </div>
            </div>
        </div>

        <br>

        <!-- Footer Section End -->

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