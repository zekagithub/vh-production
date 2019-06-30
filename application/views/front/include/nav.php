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

