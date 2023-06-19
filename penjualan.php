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
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Penjualan</th>
                <th>Nama Produk</th>
                <th>Stok Produk</th>
                <th>Harga Produk</th>
                <th>Jumlah Pembelian(Item)</th>
                <th>Total Penjualan</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tampil = mysql_query("SELECT * FROM penjualan r join produk p 
                    on (p.id_produk=r.id_produk)  order by nopenjualan asc");
            $no = 1;
            while ($r = mysql_fetch_array($tampil)) {
            ?>
                <tr>
                    <td><?php echo "$no" ?></td>

                    <?php
                    $tglpenjualan = tgl_indo($r['tglpenjualan']); ?>

                    <td><?php echo "$tglpenjualan" ?></td>
                    <td><?php echo "$r[nama_produk]" ?></td>
                    <td><?php echo "$r[stokproduk]" ?></td>
                    <td><?php echo "Rp." . number_format("$r[harga]", '0', '.', '.') ?></td>
                    <td><?php echo "$r[itemterjual]" ?></td>
                    <td><?php echo "Rp." . number_format("$r[total_penjualan]", '0', '.', '.') ?></td>
                    <td><a href="?pg=penjualan&act=delete&id=<?php echo $r['nopenjualan'] ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapusnya?');"><i class="fa fa-trash-o"></i></button></a></td>
                </tr>

            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>

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