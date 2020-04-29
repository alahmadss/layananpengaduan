<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/landingpage/img/favicon.png') ?>">
    <title>Pengaduan Masyarakat</title>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Open+Sans:400,600,700,800')" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900')" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/responsive.css') ?>">
        <style>
             html{
            scroll-behavior: smooth;
        }
        #tombolScrollTop{
 position:fixed;
 background:#00BFFF;
 text-align:center;
 bottom:1px;
 right:15px;
 cursor:pointer;
 width:35px;
 height:40px;
 border-radius:5px 5px 0 0;
 padding:2px;
 display:none;
 transition:all .3s ease-out;
}
        </style>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-top">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="logo">
                                        <h2><a href="#">Pengaduan</a></h2>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="menu">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="#">Halaman Depan</a></li>
                                            <li><a href="#tentang">Tentang Kami</a></li>
                                            <!-- <li><a href="#">Layanan</a></li> -->
                                            <!-- <li><a href="#">PORTFOLIO</a></li>
                                            <li><a href="#">TESTIMONIAL</a></li>
                                            <li><a href="#">TEAM</a></li> -->
                                            <li><a href="#kontak">Kontak</a></li>
                                            <li><a href="<?php echo base_url('login')?>">Login</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-carousal owl-carousel owl-theme">
                            <div class="item">
                                <h2>Layanan Pengaduan Masyarakat</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="tentang" class="about-us">
            <h2>Tentang Kami</h2>
            <div class="about-icon">
                <!-- <img src="<?php echo base_url('assets/landingpage/img/section-icon.jpg') ?>" alt=""> -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="video">
                            <img src="<?php echo base_url('assets/landingpage/img/header-bg.jpg') ?>" width="100%">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            <h4>Layanan pengaduan masyarakat adalah salah satu bentuk partisipasi untuk ikut berperan dalam membangun dan pengawasan terhadap kinerja instansi pemerintah. 
                                Dengan demikian dibutuhkan adanya sebuah rancangan aplikasi layanan informasi pengaduan untuk memudahkan masyarakat dalam menyampaikan keluhan dan aspirasinya
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="kontak" class="contact-area">
            <h2>Kontak Kami</h2>
            <div class="about-icon">
                <img src="img/section-icon.jpg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-part">
                            <h4><i class="fa fa-map-marker" aria-hidden="true"></i>Lokasi</h4>
                            <P>Jl Nitikan Baru 48, Umbulharjo, Yogyakarta</P>
                            <P>Jl Tawangsari 1/1222 Mantrijeron, Yogyakarta</P>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-part">
                            <h4><i class="fa fa-phone" aria-hidden="true"></i>Hubungi Kami</h4>
                            <p>087**********</p>
                            <p>085**********</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="contact-part">
                            <h4><i class="fa fa-envelope" aria-hidden="true"></i>Kirim pesan</h4>
                            <p>contoh@gmail.com</p>
                            <p>contoh@gmail.com</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <form action="#" method="post">
                                <input type="text" placeholder="Name">
                                <input type="email" placeholder="Email">
                                <input type="text" placeholder="Subject">
                                <textarea placeholder="Message"></textarea>
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <br>
        <br>
        <br>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                        <div class="text">
                            <p><span><a href="#">Al Ahmad Syah</a></span> &copy; 2020 All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-4">
                        <div class="footer-logo">
                            <p><a href="#">Pengaduan Masyarakat</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-2">
                        <div class="icon">
                            <p>
                                <a href="https://twitter.com/fujikoofu"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://instagram.com/alahmaadsyah"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <input type="button" value="UP" id="tombolScrollTop" onclick="scrolltotop()">
        </footer>
    </div>
    <script src="<?php echo base_url('assets/landingpage/js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landingpage/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landingpage/js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landingpage/js/isotope.pkgd.js') ?>"></script>
    <script src="<?php echo base_url('assets/landingpage/js/masonry.js') ?>"></script>
    <script src="<?php echo base_url('assets/landingpage/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landingpage/js/active.js') ?>"></script>
    <script type="text/javascript">
    $(document).ready(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			$('#tombolScrollTop').fadeIn();
		} else {
			$('#tombolScrollTop').fadeOut();
		}
	});
});

function scrolltotop()
{
	$('html, body').animate({scrollTop : 0},500);
}
    </script>
</body>

</html>