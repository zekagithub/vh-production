<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Portfolio deyisdir</h3>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('back/portfolioupdate');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Portfolio title</label> <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?php echo $melumat->port_title;?>" >
                    <input type="hidden" class="form-control" name="id" value="<?php echo $melumat->id;?>" >
                  </div>
                </div>  
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Portfolio description_Az</label> <div class="col-sm-10">
                  <textarea id="editor1" name="description_az" rows="3"><?php echo $melumat->port_desc_az;?></textarea>
                  </div>
                </div>
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Portfolio description_En</label> <div class="col-sm-10">
                  <textarea id="editor1" name="description_en" rows="10" cols="70"><?php echo $melumat->port_desc_en;?></textarea>
                  </div>
                </div>
                
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Portfolio link</label>                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="link" value="<?php echo $melumat->port_link;?>">
                
                  </div>
                </div> 
                 <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Portfolio image</label>                 <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Portfolio date</label>                 <div class="col-sm-10">
                    <input type="date" class="form-control" name="date">
                
                  </div>
                </div>
                            
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('back/portfolio');?>">Legv et</a>
                  <button type="submit" class="btn btn-info primary-right">Deyisdir</button>

              </div>
            </form>
          </div>

<?php $this->load->view('back/include/footer');