<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#e8293b"/>
    <meta name="HandheldFriendly" content="true" />
    <title>VH Production</title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="Brabus | Contemporary Modern Portfolio for Agencies">
    <meta name="keywords" content="creative, works, showcase, portfolio, highlight, projects, modern, agency, digital, studio, css, animation, transition, freelancers">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Brabus | Contemporary Modern Portfolio for Agencies">
    <meta property="og:image" content="../../www.themezinho.net/brabus/preview.png">
    <meta property="og:site_name" content="vhproduction">
    <meta property="og:title" content="vhproduction">
    <meta property="og:type" content="vhproduction">
    <meta property="og:url" content="http://www.vhproduction.net/brabus">

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
<!-- end transition-overlay -->
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
        <blockquote><?php echo $this->lang->line('sizinucun');  ?></blockquote>
    </div>
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
    </div>
</nav>


<!-- end navbar -->
<header class="page-header">
    <div class="video-bg">
        <video src="<?php echo base_url('assets/front/');?>videos/video2.mp4" muted loop autoplay></video>
    </div>
    <!-- end video-bg -->
    <div class="container">
        <h1>Contact</h1>
    </div>
    <!-- end container -->
    <aside class="left-side">
        <ul>
            <li><a href="<?php echo base_url('assets/front/');?>#">FACEBOOK</a></li>
            <li><a href="<?php echo base_url('assets/front/');?>#">BEHANCE</a></li>
            <li><a href="<?php echo base_url('assets/front/');?>#">DRIBBBLE</a></li>
        </ul>
    </aside>
    <!-- end left-side -->
    <div class="scroll-down"><small>SCROLL DOWN</small><span></span></div>
    <!-- end scroll-down -->
    <div class="sound"> <span> SOUND </span>
        <div class="equalizer">
            <div class="holder"> <span></span> <span></span> <span></span> <span></span><span></span><span></span> </div>
            <!-- end holder -->
        </div>
        <!-- end equalizer -->
    </div>
    <!-- end sound -->
</header>
<!-- end header -->
<section class="hello">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <h2 data-text=""><?= $this->lang->line('connect_us');  ?></h2>
            </div>
            <!-- end col-12 -->
            <div class="col-md-4 wow fadeIn">

            </div>
            <!-- end col-4 -->
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.05s">
                <address>
                    <b><?php echo $this->lang->line('phone');  ?></b>
                    <p>+994 55 792 25 93<br>

                    </p>
                </address>
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.10s">
                <address>
                    <b>Email</b>
                    <a href="<?php echo base_url('assets/front/');?>#">office@vhproduction.com</a>
                </address>
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeIn">
                <!-- end map -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.05s">
                <form class="row inner" id="contact" name="contact" method="post">
                    <div class="form-group col-sm-6 col-12">
                        <label><span><?php echo $this->lang->line('name');  ?></span></label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group col-sm-6 col-12">
                        <label><span><?php echo $this->lang->line('surname');  ?></span></label>
                        <input type="text" name="surname" id="surname" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group col-sm-6 col-12">
                        <label><span><?php echo $this->lang->line('email');  ?></span></label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group col-sm-6 col-12">
                        <label><span><?php echo $this->lang->line('subject');  ?></span></label>
                        <input type="text" name="subject" id="subject" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group col-12">
                        <label><span><?php echo $this->lang->line('message');  ?></span></label>
                        <textarea name="message" id="message" required></textarea>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group col-12">
                        <button id="submit" type="submit" name="submit"><?php echo $this->lang->line('submit'); ?></button>
                    </div>
                    <!-- end form-group -->
                </form>

                <div id="success" class="alert alert-success" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>

                <div id="error" class="alert alert-danger" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>

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
        </div>
    </div>
    <div class="footer-contact wow fadeIn">
        <div class="container">
            <div class="row"> <div class="col-md-4">

                </div>
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
            </div>
        </div>
    </div>
    <div class="footer-bottom wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Bizimle elaqe</h5>
                    <ul>
                        <li><a href="<?php echo base_url('assets/front/');?>#">Behance</a></li>
                        <li><a href="<?php echo base_url('assets/front/');?>#">Instagram</a></li>
                        <li><a href="<?php echo base_url('assets/front/');?>#">Vimeo</a></li>
                        <li><a href="<?php echo base_url('assets/front/');?>#">Facebook</a></li>
                    </ul>
                </div>
                <!-- end col-8 ->
            </div>-
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end footer-bottom -->
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
<script src="<?php echo base_url('assets/front/');?>js/contact.form.min.js"></script>
<script src="<?php echo base_url('assets/front/');?>js/jquery.form.min.js"></script>
<script src="<?php echo base_url('assets/front/');?>js/jquery.validate.min.js"></script>
</body>

</html>