<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- end post -->
                <?php foreach ($melumat as $melumat){?>
                <div class="post wow fadeIn">
                    <figure class="post-image">

                        <img src="<?php echo base_url();echo $melumat->blog_image; ?>" style="width: 900px; height: 500px;" alt="Image">

                    </figure>
                    <!-- end news-image -->
                    <div class="post-content">
                        <div class="inner">
                            <small class="post-date"><?php echo $melumat->blog_date;?></small>

                                <div class="post-author"><img src="<?php  echo base_url('assets/front/'); ?>images/author01.jpg" alt="Image"> <span>by <a href="#">Zeka Memmedov</a></span></div>
                            <h3 class="post-title">
                                <a href="<?php echo base_url('blog_detail/');echo $melumat->blog_sef_az; ?>"><?php
                                    if($this->session->userdata('lang')=="az"){
                                        echo $melumat->blog_title_az;

                                    }elseif ($this->session->userdata('lang')=='en'){
                                        echo $melumat->blog_title_en;
                                    }

                                    ?></a>



                            </h3>
                    
                            <p class="post-text">
                                <?php if ($this->session->userdata('lang')=='az'){echo substr($melumat->blog_desc_az,0,200);}
                                        elseif ($this->session->userdata('lang')=='en'){echo substr( $melumat->blog_desc_en,0,200);}?></p>
                        </div>

                    </div>

                </div>
                <?php   }  ?>




            </div>

        </div>

    </div>

</section>