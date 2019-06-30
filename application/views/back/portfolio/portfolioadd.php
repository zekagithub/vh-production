<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/leftmenu');?>

<section class="content">
      <div class="row">
        <div class="col-md-8">
                  <div class="box box-solid">
                        <div class="box-body">                       
                              <form method="post" action="<?= base_url('back/portfolioadded');?>" enctype="multipart/form-data">
                                     <div class="form-group">
                                          <label>Portfolio title</label>
                                          <input type="text" name="title"  class="form-control">
                                    </div>
                                    <div class="form-group">
                                          <label>Portfolio description Az</label>
                                         <textarea rows="3" name="description_az" id="editor1" class="form-control"></textarea>
                                          
                                    </div>  <div class="form-group">
                                          <label>Portfolio description EN</label>
                                         <textarea rows="3" name="description_en" id="editor1" class="form-control"></textarea>

                                    </div> 
                               
                                   
                                    </div>  <div class="form-group">
                                          <label>Portfolio link</label>
                                          <input type="text" name="link"  class="form-control">
                                          
                                    </div>
                                     <div class="form-group">
                                          <label>Portfolio image</label>
                                          <input type="file" name="image"  class="form-control">
                                          
                                    </div>
                                     <div class="form-group">
                                          <label>Portfolio date</label>
                                          <input type="date" name="date"  class="form-control">
                                          
                                    </div>
                                 
                                    <div class="form-group">
                                      <a type="submit" href="<?=base_url('back/portfolio');?>" class="btn btn-warning" >Legv et
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


