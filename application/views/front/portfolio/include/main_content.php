<section class="works">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">

      </div>
      <!-- end col-12 -->
      <div class="col-12">


        <?php foreach ($melumat as $melumat) {?>
          
         <div class="project-box wow fadeIn" data-bg="#faf8ed">
          <figure> <a href="<?php echo base_url('');echo $melumat->port_image;?>" data-fancybox><img style="width: 640;height: 390;" src="<?php echo base_url();echo $melumat->port_image;?>"  alt="Image"></a></figure>
          <div class="content-box">
            <div class="inner"> <small><?= $melumat->port_title;?></small>
              <h3><span></span><?php echo $melumat->port_link;?></h3>
              <div class="custom-link"> <a href="<?php echo base_url('port_detail/');echo $melumat->port_title; ?>" >
                <div class="lines"> <span></span> <span></span> </div>
                <!-- end lines --> 
                <b><?=$this->lang->line('saytdetal');  ?></b>  </a> </div>
              <!-- end custom-link --> 
            </div>
            <!-- end inner --> 
          </div>
          <!-- end content-box --> 
        </div>
   
     <?php  }   ?>
    
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end works -->