<?php  $this->load->view('back/include/header');?>
<?php  $this->load->view('back/include/leftmenu');?>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">portfolio listi</h3>
              <div>
                <?php echo $this->session->flashdata('success');?>
              </div>
              <a href="<?php echo base_url('back/portfolioadd');?>" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>  Elave et</a>
            </div>
            <div class="box-body">
              <table id="example1"  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Portfolio title</th>
                  <th>Portfolio image</th>
                  <th>Portfolio desc </th>
                  <th>Portfolio link </th>
                  <th>Status</th>
                  <th style="width:100px ">emeliyyat</th>
                </tr>
                </thead>
                <tbody>
               
                  <?php $say=1;foreach ($melumat as $melumat) {?>
                
                <tr>
                  <td><?php echo $say++;?></td>
                  <td><?php echo $melumat->port_title;?></td>
                  <td><img  src=<?php echo base_url();echo $melumat->port_image;?> style="width: 80px; height: 60px;"></td>
                  <td><?php echo substr($melumat->port_desc_az,0,50);?></td>
                  <td><?php echo $melumat->port_link;?></td>
                  <td> 
                   <input class="toggle_check"
                   data-onstyle="success"  
                    data-on="aktiv" 
                    data-off="passiv" 
                    data-offstyle="danger"
                    data-toggle="toggle"
 
                    type="checkbox"
                    dataID=""
                    dataURL="">
                     </td>                  
                  <td>
                    <a href="<?php echo base_url('back/editportfolio/'.$melumat->id.'');?>"><button class="btn btn-primary" style="width:80px;height: 30px; ">Edit</button></a>
                    <a href="<?php echo base_url('back/deleteportfolio/'.$melumat->id.'/id/portfolio');?>"><button class="btn btn-danger" style="width:80px;height: 30px; ">Delete</button></a>
                  </td>
                </tr>
<?php  }   ?>
               
                </tbody>
               
              </table>
            </div>

          </div>

        </div>

      </div>

    </section>
<?php  $this->load->view('back/include/footer');?>