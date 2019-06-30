<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Blogu deyisdir</h3>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('back/blogupdate');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Blog basliq_AZ</label> <div class="col-sm-10">
                    <input type="text" class="form-control" name="title_az" value="<?php echo $melumat->blog_title_az;?>" >
                    <input type="hidden" class="form-control" name="id" value="<?php echo $melumat->id;?>" >
                  </div>
                </div> <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Blog basliq_EN</label> <div class="col-sm-10">
                    <input type="text" class="form-control" name="title_en" value="<?php echo $melumat->blog_title_en;?>" >
                  </div>
                </div> 
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Blog aciqlama _az</label> <div class="col-sm-10">
                  <textarea id="editor1" name="description_az" rows="3"><?php echo $melumat->blog_desc_az;?></textarea>
                  </div>
                </div>  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Blog Aciqlama_en</label> <div class="col-sm-10">
                  <textarea id="editor1" name="description_en" rows="10" cols="70"><?php echo $melumat->blog_desc_en;?></textarea>
                  </div>
                </div>  
                   <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Blog Tag_AZ</label> <div class="col-sm-10">
                    <input type="text" class="form-control" name="tag_az" value="<?php echo $melumat->blog_tag_az;?>" >
                  </div> <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Blog Tag_En</label> <div class="col-sm-10">
                    <input type="text" class="form-control" name="tag_en" value="<?php echo $melumat->blog_tag_en;?>" >
                  </div>
                         


                               <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Blog Keywords_AZ</label> <div class="col-sm-10">
                    <input type="text" class="form-control" name="keywords_az" value="<?php echo $melumat->blog_keyword_az;?>" >
                  </div>

                                   <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Blog Keywords_EN</label> <div class="col-sm-10">
                    <input type="text" class="form-control" name="keywords_en" value="<?php echo $melumat->blog_keyword_en;?>" >
                  </div>  

                 <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Blog image</label> 
                 <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                
                  </div>
                </div>
                   <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label"> Movcud Sekil</label>
                  <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->blog_image); ?>" style="width: 70px;height:70px; ">
                    <p class="text-blue">Deyisdirmeseniz sekil secmeyin</p>
                  </div>
                </div>   
              </div>
                
            
              
              </div>


              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('back/blog');?>">Legv et</a>
                  <button type="submit" class="btn btn-info primary-right">Deyisdir</button>

              </div>
            </form>
          </div>

<?php $this->load->view('back/include/footer');