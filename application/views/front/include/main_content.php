

<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <h6>Haqqımızda</h6>
                <h2 data-text="vebsayt">Müasir biznes ,<br>veb saytdan başlar </h2>
            </div>
            <div class="col-lg-5 wow fadeIn">
                <h4>Yaratdığımız fərqli, zövqlü işlərlər hər zaman öndəyik</h4>
            </div>
            <!-- end col-5 -->
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.10s">
                <p>Reklamlar görünməmiş bir sürətlə inkişaf etməyə davam edir. Media daha ağıllı olur. İstehlakçılar qazanc əldə edirlər. Marketinqçilər müştərilərlə əlaqə yaratmaq üçün yeni yollara ehtiyac duyurlar.</p>
                <p>Dünyadakı çox az sayda şirkətin dizaynı belə böyük miqyaslı və kompleks layihələrə cəlb edilməkdədir</p>
                <div class="custom-link wow fadeIn">
                        <div class="lines"> <span></span> <span></span> </div>
                        <!-- end lines -->
                        <b>HAQQIMIZDA</b> </div>
                <!-- end custom-link -->
            </div>
            <!-- end col-7 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<section class="services-content-block">
    <div class="video-bg">
        <video src="videos/video.mp4" muted loop autoplay></video>
    </div>
    <!-- end video-bg -->
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">

                <h2>Güclü veb-interfeys sxeminin yaradılması </h2>
            </div>
            <!-- end col-12 -->
            <div class="col-md-4 wow fadeIn" data-wow-delay="0s">
                <div class="content-box">
                    <div class="left"><small>01</small><span></span></div>
                    <!-- end left -->
                    <div class="right">

                        <p>Hər bir müştəri və məhsula uyğun fərqli yanaşma ilə hazırlanan websaytlarin yaradilmasi...</p>
                        <ul>
                            <li>VEB - Biz Sizə istənilən vebsaytların - ən kiçik sayt-vizitlərdən ən mürəkkəb portallaradək zövqünüzü oxşayan hər növ veblayihələrin hazırlanmasını təklif edirik.</li>

                        </ul>
                    </div>
                    <!-- end right -->
                </div>
                <!-- end content-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.05s">
                <div class="content-box">
                    <div class="left"><small>02</small><span></span></div>
                    <!-- end left -->
                    <div class="right">

                        <p>Sosial Mesia Marketinq (SMM)</p>
                        <ul>
                            <li>Sosial şəbəkələrdə auditoriyanı pulla ələ almaq mümkün deyil, onların inamını qazanaraq sayını artıqmaq lazımdır. Sosial media platforması auditoriya ilə əlaqə saxlamaq üçün ən müasir üsuldur.</li>

                        </ul>
                    </div>
                    <!-- end right -->
                </div>
                <!-- end content-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-4 wow fadeIn" data-wow-delay="0.10s">
                <div class="content-box">
                    <div class="left"><small>03</small><span></span></div>
                    <!-- end left -->
                    <div class="right">

                        <p>Qrafik Dizayn işləri</p>
                        <ul>
                            <li>Logo , Flayer , Poster, BRANDBOOK, Kataloq və Çöl reklamları kimi müxtəlif məhsul və fəaliyyətlərin vizual dizaynını edirik. Qrafik dizayn, müəyyən bir mesajı, ideya və ya konsepsiya vizual olaraq çatdırmaq üçün marketinq və yaradıcı departamentlərin digər üzvləri ilə birlikdə çalışır.</li>

                        </ul>
                    </div>
                    <!-- end right -->
                </div>
                <!-- end content-box -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<section class="works">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <h2 data-text="İşlərimiz">Hazırladığımız işlərdən</h2>
            </div>
            <div class="col-12">
                <!--dongu -->
                <?php $melumat=sonport();

                ?>
                <?php  foreach ($melumat as $melumat){ ?>
                <div class="project-box wow fadeIn" data-bg="#faf8ed">
                    <figure> <a href="images/featured01.jpg" data-fancybox><img src="<?php echo base_url();echo $melumat->port_image; ?>" alt="Image"></a></figure>
                    <div class="content-box">
                        <div class="inner">
                            <h3><?php echo $melumat->port_title;?>
                            <div class="custom-link">

                        </div>
                    </div>
                </div>
                <?php  }  ?>
                <!--dongu bitisi-->

                <div class="lines"> <span></span> <span></span> </div>
                    <a href="<?php echo base_url('portfolio');  ?>"><h1>Portfolio</h1></a> </div>

            </div>
        </div>
    </div>
</section>
<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow fadeIn">

                <p style="font-size: 23px;"><?php echo $this->lang->line('tech');  ?></p>
                <hr>


            </div>
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.10s">
                <ul>
                    <li><img src="<?php echo base_url('assets/front/');?>images/logo01.png" alt="Image"><small>ABSTER</small></li>
                    <li><img src="<?php echo base_url('assets/front/');?>images/logo02.png" alt="Image"><small>LOKOMOTIVE</small></li>
                    <li><img src="<?php echo base_url('assets/front/');?>images/logo03.png" alt="Image"><small>BIRDIEST</small></li>
                    <li><img src="<?php echo base_url('assets/front/');?>images/logo04.png" alt="Image"><small>PLOCSHA</small></li>
                    <li><img src="<?php echo base_url('assets/front/');?>images/logo05.png" alt="Image"><small>NEWKY</small></li>
                    <li><img src="<?php echo base_url('assets/front/');?>images/logo06.png" alt="Image"><small>HACHAPURY</small></li>
                    <li><img src="<?php echo base_url('assets/front/');?>images/logo02.png" alt="Image"><small>LOKOMOTIVE</small></li>
                    <li><img src="<?php echo base_url('assets/front/');?>images/logo05.png" alt="Image"><small>NEWKY</small></li>
                </ul>
            </div>
        </div>
    </div>
</section>
