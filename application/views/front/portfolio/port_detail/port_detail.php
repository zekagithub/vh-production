<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#e8293b"/>
<meta name="HandheldFriendly" content="true" />
<title>VH Production | Portfolio</title>
<meta name="author" content="Themezinho">
<meta name="description" content="Brabus | Contemporary Modern Portfolio for Agencies">
<meta name="keywords" content="creative, works, showcase, portfolio, highlight, projects, modern, agency, digital, studio, css, animation, transition, freelancers">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Brabus | Contemporary Modern Portfolio for Agencies">
<meta property="og:image" content="../../www.themezinho.net/brabus/preview.png">
<meta property="og:site_name" content="Brabus">
<meta property="og:title" content="Brabus">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.themezinho.net/brabus">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@brabus">
<meta name="twitter:creator" content="@brabus">
<meta name="twitter:title" content="brabus">
<meta name="twitter:description" content="Brabus | Contemporary Modern Portfolio for Agencies">
<meta name="twitter:image" content="../../www.themezinho.net/brabus/preview.png">

<!-- FAVICON FILES -->
<link href="<?php echo base_url('assets/front/');?>ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="<?php echo base_url('assets/front/');?>ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?php echo base_url('assets/front/');?>ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?php echo base_url('assets/front/');?>ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="<?php echo base_url('assets/front/');?>ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/animate.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/odometer.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/fancybox.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/swiper.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/style.css">
</head>
<body>
<div class="preloader">
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="inner" data-tilt data-tilt-perspective="2000">
    <figure class="fadeInUp animated"> <img src="<?php echo base_url('assets/front/');?>images/preloader.gif" alt="Image"> </figure>
    <span class="typewriter" id="typewriter"></span> </div>
  <!-- end inner --> 
</div>
<!-- end preloader -->
<div class="transition-overlay">
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
  <div class="layer"></div>
</div>
<!-- end transition-overlay -->
<div class="navigation-menu">
  <div class="bg-layers"> <span></span> <span></span> <span></span> <span></span> </div>
  <!-- end bg-layers -->
  <div class="inner" data-tilt data-tilt-perspective="2000">
      <div class="menu">
          <ul>
              <li><a href="#"><?php echo $this->lang->line('bizkimik');   ?></a>

              </li>
              <li><a href="<?php echo base_url('portfolio');?>">Portfolio</a></li>
              <li><a href="<?php echo base_url('blog');?>">Blog</a></li>
              <li><a href="<?php echo base_url('contact');?>">Contact</a></li>
          </ul>
      </div>
    <!-- end menu -->
      <blockquote><?php echo $this->lang->line('sizinucun');  ?></blockquote>
  </div>
  <!-- end inner --> 
</div>
<!-- end navigation-menu -->
<nav class="navbar">
    <div > <a href="direction.html"><img src="<?php echo base_url('assets/front/'); ?>svg/vhlogo.svg" width="206" height="86" alt="Vhstudio"></a> </div>

    <div class="right">
        <ul class="language">
            <?php if($this->session->userdata('lang')!='az'){ ?>
                <li><a href="<?php echo base_url('front/dildeyisdir/az');?>">AZ</a></li>
            <?php }  ?>
            <?php if($this->session->userdata('lang')!='en'){ ?>
                <li><a href="<?php echo base_url('front/dildeyisdir/en');?>">EN</a></li>

            <?php  } ?>
        </ul>
        <div class="hamburger-menu"><b>MENU</b>
            <div class="hamburger" id="hamburger-menu"> <span></span> <span></span> <span></span> </div>
        </div>
        <!-- end hamburger-menu -->
    </div>
    <!-- end right -->
</nav>
<!-- end navbar -->
<header class="page-header">
  <div class="video-bg">
    <video src="<?php echo base_url('assets/front/');?>videos/video2.mp4" muted loop autoplay></video>
  </div>
  <!-- end video-bg -->
    <div class="container">
        <h1>Portfolio</h1>
        <p>SIZIN ÜÇÜN VEB SAYT HAZIRLAYAQMI?</p>
    </div>
  <!-- end container -->
  <aside class="left-side">
    <ul>
      <li><a href="#">FACEBOOK</a></li>
      <li><a href="#">BEHANCE</a></li>
      <li><a href="#">DRIBBBLE</a></li>
    </ul>
  </aside>
  <!-- end left-side -->
  <div class="scroll-down"><small>SCROLL DOWN</small><span></span></div>
  <!-- end scroll-down -->

</header>
<!-- end header -->
<section class="works-single">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">

        <h2><?php echo $melumat->port_title;  ?></h2>
      </div>
      <!-- end col-12 -->
      <div class="col-lg-5 wow fadeIn">
        <h4><?= $this->lang->line('isinizi');  ?></h4>
      </div>
      <!-- end col-5 -->
      <div class="col-lg-7 wow fadeIn" data-wow-delay="0.10s">
    <div class="text-desc row">
      	<div class="col-12 wow fadeIn" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
      		<h5><?php  echo $melumat->port_title; ?></h5>
      		<p><?php if($this->session->lang=='az') {echo $melumat->port_desc_az;}else{echo $melumat->port_desc_en;} ?></p>
      	</div>
      	<!-- end col-6 -->
      	<div class="col-md-6 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
      		<h5>Project</h5>
      		<p>Web site</p>
      	</div>
      	<!-- end col-3 -->
      	<div class="col-md-6 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
      		<h5>Launch</h5>
      		<p><?php echo $melumat->port_date; ?></p>
      	</div>
      	<!-- end col-3 -->
      </div> 
      <!-- end text-desc -->
      </div>
      <!-- end col-7 --> 
  
      <!-- end col-12 -->
      <div class="col-12 wow fadeIn">
      	<figure><a href="<?php echo base_url('');echo $melumat->port_image;?>" data-fancybox><img src="<?php echo base_url();echo $melumat->port_image?>" alt="Image"></a></figure>
      </div>
  
      <!-- end col-4 -->
      <div class="col-12 wow fadeIn">
      	<h3>VH Production</h3>
      </div>
      <!-- end col-12 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end works-single -->
<footer class="footer">
  <div class="footer-quote wow fadeIn">
    <div class="container">
      <div class="row">
        <div class="col-lg-8"> <img src="<?php echo base_url('assets/front/');?>images/logo.png" alt="Image">

        </div>
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </div>
    <div class="footer-contact wow fadeIn">
        <div class="container">
            <div class="row"> <div class="col-md-4">

                </div>
                <!-- end col-4 -->
                <div class="col-md-4">
                    <address>
                        +994 55 792 25 93<br>

                    </address>
                </div>
                <!-- end col-4 -->
                <div class="col-md-3">
                    <address>
                        <a href="#">vh-production@mail.ru</a>
                    </address>
                </div>
                <!-- end col-2 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
  <!-- end footer-contact -->
  <div class="footer-bottom wow fadeIn">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h5>Connect with us </h5>
          <ul>
            <li><a href="#">Behance</a></li>
            <li><a href="#">Instagram</a></li>

            <li><a href="#">Facebook</a></li>
          </ul>
        </div>
        <!-- end col-8 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </div>
  <!-- end footer-bottom --> 
</footer>
<!-- end footer -->
<!-- JS FILES --> 
<script src="<?php echo base_url('assets/front/');?>js/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/front/');?>js/bootstrap.min.js"></script> 
<script src="<?php echo base_url('assets/front/');?>js/swiper.min.js"></script> 
<script src="<?php echo base_url('assets/front/');?>js/tilt.jquery.js"></script> 
<script src="<?php echo base_url('assets/front/');?>js/wow.min.js"></script> 
<script src="<?php echo base_url('assets/front/');?>js/odometer.min.js"></script> 
<script src="<?php echo base_url('assets/front/');?>js/jquery.typewriter.js"></script>
<script src="<?php echo base_url('assets/front/');?>js/fancybox.min.js"></script> 
<script src="<?php echo base_url('assets/front/');?>js/app.js"></script>
<script src="<?php echo base_url('assets/front/');?>js/scripts.js"></script>
</body>


</html>