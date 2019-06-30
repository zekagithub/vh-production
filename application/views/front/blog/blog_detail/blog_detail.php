<!doctype html>
<html lang="en">

<!-- Mirrored from themezinho.net/brabus/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jun 2019 07:51:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#e8293b"/>
    <meta name="HandheldFriendly" content="true" />
    <title>VH Production | Blog  </title>
    <meta name="author" content="Vusal Hasanov | Vhstudio | Veb saytların hazırlanması,yığılması ">
    <meta name="description" content="<?php echo $melumat->blog_title_az; ?>" />
    <meta name="keywords" content="<?php echo $melumat->blog_keyword_az; ?>" />

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Vh|Production">
    <meta property="og:image" content="http://www.vhproduction.com">
    <meta property="og:site_name" content="vhproduction">
    <meta property="og:title" content="vhproduction">
    <meta property="og:type" content="vhproduction">
    <meta property="og:url" content="http://www.vhproduction.com/blog">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@vhproduct">
    <meta name="twitter:title" content="veb saytlarin hazirlanmasi,web saytlarin hazirlanmasi,yigilmasi,yaradilmasi, sayt yaratmaq, sayt açmaq, hosting satışı, logo, loqo, sayt dizaynı, web saytların hazırlanması">
    <meta name="twitter:description" content="veb saytlarin hazirlanmasi,web saytlarin hazirlanmasi,yigilmasi,yaradilmasi, sayt yaratmaq, sayt açmaq, hosting satışı, logo, loqo, sayt dizaynı, web saytların hazırlanması">
    <meta name="twitter:creator" content="@vhproduct">
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
<div class="navigation-menu">
    <div class="bg-layers"> <span></span> <span></span> <span></span> <span></span> </div>
    <div class="inner" data-tilt data-tilt-perspective="2000">
        <div class="menu">
            <ul>
                <li><a href="<?php echo base_url('home');  ?>"><?php echo $this->lang->line('bizkimik');   ?></a>

                </li>
                <li><a href="<?php echo base_url('portfolio');?>">Portfolio</a></li>
                <li><a href="<?php echo base_url('blog');?>">Blog</a></li>
                <li><a href="<?php echo base_url('contact');?>">Contact</a></li>
            </ul>
        </div>
        <!-- end menu -->
        <blockquote><?php echo $this->lang->line('sizinucun');  ?></blockquote>
    </div>
</div>
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
<header class="page-header">
    <div class="video-bg">
        <video src="<?php echo base_url('assets/front/');?>videos/video2.mp4" muted loop autoplay></video>
    </div>
    <!-- end video-bg -->
    <div class="container">
        <h1>BLOG</h1>
        <p><?php echo $this->lang->line('sizinucun');  ?></p>
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

</header>



<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="post single-post wow fadeIn">
                    <figure class="post-image">

                        <img src="<?php echo base_url();echo $melumat->blog_image;  ?>" style ="width: 900px;height: 500px;" alt="Image">
                    </figure>
                    <!-- end news-image -->
                    <div class="post-content">
                        <div class="inner"> <small class="post-date"><?php echo $melumat->blog_date;  ?></small>


                            <h3 class="post-title">
                                    <?php if($this->session->userdata('lang')=='az')
                                    {
                                       echo $melumat->blog_title_az;
                                    }else{
                                        echo $melumat->blog_title_en;
                                    }
                                    ?></></h3>

<span>
    <?php
    if ($this->session->userdata('lang')=='az')
    {
       echo $melumat->blog_desc_az;
    }else{
   echo $melumat->blog_desc_en;
    }

    ?>

</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

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
    <!-- end footer-quote -->
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
    <div class="footer-bottom wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h5><?php echo $this->lang->line('connect_us');  ?></h5>
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
</footer>
<!-- end footer -->

<audio id="hamburger-hover" src="<?php echo base_url('assets/front/');?>audio/link.mp3" preload="auto"></audio>

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