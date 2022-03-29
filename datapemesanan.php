<?php  
include 'koneksi/koneksi.php';
session_start();
$pemesanan = "SELECT * FROM pemesanan";
$data_pemesanan = $koneksi->query($pemesanan);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Hotel Aston</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/hotel-pages/img/core-img/hotel.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="assets/hotel-pages/style.css">
    <link rel="stylesheet" href="assets/hotel-pages/style1.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="assets/hotel-pages/img/core-img/hotel.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                          <!-- Top Header Content -->
                          <div class="top-header-meta">
                              <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +1 234 122 122</span></a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Produk</a></li>
                                    <li><a href="datapemesanan.php">Data Pemesanan</a></li>
                                    <li><a href="update_kamar.php">Data kamar</a></li>
                                </ul>
                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/hotel-pages/img/bg-img/hotel.jpg);">
            <h2>Data Pemesanan</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i>Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Pemesanan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Daftar Harga Kamar -->
    <div class="container">
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Data Pemesanan</h4>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID Pesan</th><th>Nama Pemesan</th><th>No. Identitas</th><th>Jenis Kelamin</th><th>Tipe Kamar</th><th>Durasi Hari</th><th>Diskon</th><th>Total Bayar</th><th>Tanggal Pemesanan</th><th>Breakfast</th>
                    </thead>
                    <tbody style="text-align:justify">
                      <?php
                        foreach($data_pemesanan as $index => $value){
                          echo "<tr>
                            <td>".$value['id_pesan']."</td>
                            <td>".$value['nama_pemesan']."</td>
                            <td>".$value['no_identitas']."</td>
                            <td>".$value['jeniskelamin']."</td>
                            <td>".$value['tipe_kamar']."</td>
                            <td>".$value['durasi_hari']."</td>
                            <td>Rp.".number_format($value['discount']/100*$value['total_bayar'], 0, ",", ".")."</td>
                            <td>Rp.".number_format($value['total_bayar'], 0, ",", ".")."</td>
                            <td>".$value['tgl_pesan']."</td>
                            <td>".($value['breakfast']? "Ya" : "Tidak")."</td></tr>";
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-4 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>info Website</h5>
                            </div>
                            <nav class="widget-nav">
                                <p>Merupakan website untuk memesan kamar hotel di hotel Aston.</p>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-4 col-lg-4">
                        <div class="single-footer-widget">
                        <div class="widget-title">
                                <h5>LINK</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="index.php">Produk</a></li>
                                    <li><a href="datapemesanan.php">Data Pemesanan</a></li>
                                    <li><a href="update_kamar.php">Data kamar</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-4 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> 505 Silk Rd, Jakarta</p>
                                <p><span>Phone:</span> +1 234 122 122</p>
                                <p><span>Email:</span> info.deercreative@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>Copyright &copy; 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <script src="../node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jQuery-2.2.4 js -->
    <script src="assets/hotel-pages/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assets/hotel-pages/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/hotel-pages/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="assets/hotel-pages/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="assets/hotel-pages/js/active.js"></script>
</body>

</html>