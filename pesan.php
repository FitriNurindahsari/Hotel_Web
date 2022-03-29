<?php  
include 'koneksi/koneksi.php';
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
    <script language=javascript src="function.js">
	</script>
	<script language=javascript>

		function checkout()
		{
			var i=0;
			for(x=0;x<document.f1.elements.length;x++)
			{
				if(document.f1.elements[x].value=="")
				{
					f1.txtname.focus();
					alert("Pls Enter All Value");
					i=1;
					break;
				}
			}

			if(i==0)
			{
				f1.method="POST";
				f1.action="simpan_pesan.php";
				f1.submit();
			}
		}
	</script>
	<link rel="stylesheet" href="css/style.css">
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
                                    <li><a href="harga.php">Daftar harga</a></li>
                                    <li><a href="pesan.php">Pesan kamar</a></li>
                                    <li><a href="tentang.php">Tentang Kami</a></li>
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
            <h2>Pesan Kamar</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i>Produk</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pesan Kamar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    <div class="container">
        <div class="row">
            <div class="col mb-3">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Pemesanan Kamar</h4>
                    </div>
                    <div class="card-body">
                        <form class="row p-0 m-0" id="form_data" novalidate>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="namapemesan">Nama Pemesan</label>
                                    <input type="text" class="form-control" id="namapemesan" name="namapemesan" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="no_identitas">Nomor Identitas</label>
                                    <input type="number" class="form-control" id="no_identitas" name="no_identitas" maxlength="16" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                            <div class="form-group">
                                    <label class="col-12 ml-0 pl-0">Jenis Kelamin</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jeniskelamin" id="laki-laki" value="laki-laki" required>
                                        <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="perempuan" required>
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="tipe_kamar">Tipe Kamar</label>
                                    <select class="custom-select" name="tipe_kamar" id="tipe_kamar" required>
                                        <option selected>Pilih Kamar</option>
                                        <?php
                                        $qup="select * from kamar";
                                        $koneksi=mysqli_connect("localhost","root","",'hotel');
                                        $rs=mysqli_query($koneksi,$qup);
                                        while($res=mysqli_fetch_array($rs))
                                        {
                                            echo "<option value='".$res['idkamar']."'>".$res['namakamar']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="harga_kamar">Harga Kamar</label>
                                    <input type="text" class="form-control" id="harga_kamar" value="0" disabled>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="tgl_pesan">Tanggal Pesan</label>
                                    <input type="date" class="form-control" id="tgl_pesan" value="dd/mm/yyyy" name="tgl_pesan" min="<?= date("Y-m-d") ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="durasi">Durasi Menginap</label>
                                    <input type="number" class="form-control" id="durasi" name="durasi" required> 
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="durasi">Termasuk Breakfast</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="breakfast" name="breakfast">
                                        <label class="custom-control-label" for="breakfast">Ya</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="total">Total Bayar</label>
                                    <input type="text" class="form-control" id="total" name="total" value="0" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" id="hitung_total" class="btn btn-primary mr-2">Hitung Total Bayar</button>
                                <button type="submit" id="submit_btn" class="btn btn-success mr-2">Simpan</button>
                                <button type="reset" id="reset_btn" class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
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
                                    <li><a href="harga.php">Daftar harga</a></li>
                                    <li><a href="pesan.php">Pesan kamar</a></li>
                                    <li><a href="tentang.php">Tentang Kami</a></li>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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

    <script src="jquery.validate.min.js"></script>

    <script>
        $.validator.setDefaults({
            highlight: function(element, errorClass, validClass) {
                if ($(element).closest('.input-group').length > 0) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-error');
                } else {
                    if (element.type === "radio") {
                        this.findByName(element.name).addClass(errorClass).removeClass(validClass);
                    } else {
                        $(element).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback');
                        if ($(element).closest('form').hasClass('form-horizontal')) {
                            $(element).closest('.form-group > div[class^="col"]').find('i.fa').remove();
                            $(element).closest('.form-group > div[class^="col"]').append('<i class="fa fa-exclamation fa-lg form-control-feedback"></i>');
                        } else {
                            $(element).closest('.form-group').find('i.fa').remove();
                            $(element).closest('.form-group').append('<i class="fa fa-exclamation fa-lg form-control-feedback"></i>');
                        }
                    }
                }
            },
            unhighlight: function(element, errorClass, validClass) {
                if ($(element).closest('.input-group').length > 0) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                } else {
                    if (element.type === "radio") {
                        this.findByName(element.name).removeClass(errorClass).addClass(validClass);
                    } else {
                        if ($(element).closest('form').hasClass('form-horizontal')) {
                            $(element).closest('.form-group > div[class^="col"]').find('i.fa').remove();
                            $(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
                        } else {
                            $(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
                            $(element).closest('.form-group').find('i.fa').remove();
                            $(element).closest('.form-group').append('<i class="fa fa-check fa-lg form-control-feedback"></i>');
                        }
                    }
                }
            },
            errorPlacement: function(error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else if (element.parent('.radio-inline').length) {
                    error.insertAfter(element.parent().parent());
                } else {
                    error.insertAfter(element);
                }
            },
            errorElement: 'span',
            errorClass: 'help-block',
            ignore: ''
        });

        $(document).ready(function(){
            $('#tipe_kamar').on('change', function(e){
                $.ajax({
                    url: 'ajax.php',
                    data:"idkamar="+this.value
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#harga_kamar').val(obj.harga);
                });                
            })

            $('#hitung_total').on('click', function(e){
                e.preventDefault();
                let breakfast = $('#breakfast').is(':checked'),
                    durasi = $('#durasi').val(),
                    kamar = $('#tipe_kamar').val();
                // console.log(breakfast)

                if(durasi && kamar){
                    $.ajax({
                        url: 'check_total.php',
                        method: 'POST',
                        data: {kamar, breakfast, durasi}
                    }).success(function (data) {
                        $('#total').val(data)
                    });       
                }
            })

            $('#form_data').validate({
                rules:{
                    no_identitas: { maxlength: 16,minlength: 16 }
                },
                messages:{
                    no_identitas: { maxlength: "isian salah..data harus 16 digit", minlength: "isian salah..data harus 16 digit" }
                },
                submitHandler: function (form) {
                    let data_form = $(form).serializeArray(),
                        breakfast = $('#breakfast').is(':checked');

                    data_form.push({name: 'breakfast', value: breakfast})
                    $.ajax({
                        url: 'simpan_pesan.php',
                        method: 'POST',
                        data: {data_form}
                    }).success(function (data) {
                        alert(data)
                        location.reload()
                    });    
                }
            })
        })
    </script>
</body>

</html>