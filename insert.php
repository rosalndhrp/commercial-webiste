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

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Insert</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <h4 style="text-align: center;">ADD NEW ITEM</h4>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card-add">
                    <form id="form1" name="form1" method="post" action="tambah.php">
                        <table width="700" border="1">
                            <tbody>
                                <tr>
                                    <td width="205">Nama Produk</td>
                                    <td width="479"><input class="form-control" type="text" name="namaproduk" id="namaproduk"></td>
                                </tr>
                                <tr>
                                    <td>Harga (Rp)</td>
                                    <td><input type="text" class="form-control" name="hargaproduk" id="harga"></td>
                                </tr>
                                <tr>
                                    <td>Berat (gr)</td>
                                    <td><input type="text" class="form-control" name="beratproduk" id="berat"></td>
                                </tr>

                                <tr>
                                    <td>Stok</td>
                                    <td><input type="text" class="form-control" name="stok" id="stok"></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td><textarea name="deskripsi" class="form-control" id="deskripsi"></textarea></td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" name="simpan" id="submit" value="Simpan" class="btn-danger btn"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>



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