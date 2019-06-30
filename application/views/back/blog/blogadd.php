<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>
<section class="content">
 
      <div class="row">
        <div class="col-md-8">
                  <div class="box box-solid">
                        <div class="box-body">
                       
                              <form method="post" action="<?= base_url('back/blogadded');?>" enctype="multipart/form-data">
                                     <div class="form-group">
                                          <label>Blog basliq_Az</label>
                                          <input type="text" name="title_az"  class="form-control">
                                          
                                    </div>
                                  <div class="form-group">
                                          <label>Blog basliq_En</label>
                                          <input type="text" name="title_en"  class="form-control">

                                    </div>
                           
                                  <div class="form-group">
                                          <label>Blog aciqlama_Az</label>
                                         <textarea rows="3" name="description_az" id="editor1" class="form-control"></textarea>
                                          
                                    </div>
                                  <div class="form-group">
                                          <label>Blog Aciqlama_En</label>
                                         <textarea rows="3" name="description_en" id="editor1" class="form-control"></textarea>

                                    </div>
                               
                                   

                                   <div class="form-group">
                                          <label>Blog keywords_Az</label>
                                          <input type="text" name="keywords_az"  class="form-control">
                                          
                                        </div>
                                  </div>
                   <div class="form-group">
                                          <label>Blog keywords_En</label>
                                          <input type="text" name="keywords_en"  class="form-control">

                                    </div>
                      </div>
                 
                                    <div class="form-group">
                                          <label>Blog tags_Az</label>
                                          <input type="text" name="tag_az"  class="form-control">
                                          
                                    </div>
                                        <div class="form-group">
                                          <label>Blog tags_En</label>
                                          <input type="text" name="tag_en"  class="form-control">

                                    </div>
                                    <div class="form-group">
                                          <label>Blog author</label>
                                          <input type="text" name="blog_author"  class="form-control">

                                    </div>
                                  
                                     <div class="form-group">
                                          <label>Blog image</label>
                                          <input type="file" name="image"  class="form-control">
                                          
                                    </div>
                                 
                                    <div class="form-group">
                                      <a type="submit" href="<?=base_url('back/blog');?>" class="btn btn-warning" >Legv et
                                        </a>
                                          <button type="submit" class=" btn-flat btn-success btn btn-right">Elave et</button>
                                          
                                    </div> 
                                  
                                          
                                          
                                   
                              </form>
                              
                        </div>
                        
                  </div>

          
        </div>
      
     
      </div>


  </section>
<?php $this->load->view('back/include/footer');