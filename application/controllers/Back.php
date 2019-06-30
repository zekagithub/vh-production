<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Back extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('adminlogin')&&$this->uri->segment(2)&&$this->uri->segment(2)!='login') {
			redirect('back');
		}
	}

 public function index()
 {
 	if ($this->session->userdata('adminlogin')) {
 		redirect('back/home');
 		
 	}
 	$this->load->view('back/login/login');
 }
 public function home()
 {
 	$this->load->view('back/home');
 }
 public function login()
 {
 	$data=array(
    'email'=>$email=$this->input->post('email'),
    'password'=>$password=$this->input->post('password')
 	);

 $this->load->model('Dtbs');
 $result=$this->Dtbs->kontrol('admin',$email,$password);
 if ($result) {
 	$this->session->set_userdata('adminlogin',true);
 	$this->session->set_userdata('admininfo',$result);
 	redirect('back/home');
 }
 else{
 	redirect('back');
 }
 $this->load->view('back/login/login');	
 }
 public function cixis()
 {
 	$this->session->sess_destroy();
 	redirect('back');
 }
 public function portfolio()
 {
    $this->load->model('Dtbs');
   $result= $this->Dtbs->listele('portfolio');
    $data['melumat']=$result;
 	$this->load->view('back/portfolio/portfolio',$data);
 }
public function portfolioadd()
{
	$this->load->view('back/portfolio/portfolioadd');
}
public function portfolioadded()
{
  $config['upload_path']= FCPATH.'assets/front/images/portfolio';
    $config['allowed_types']='gif|jpg|jpeg|png';
    $config['encrypt_name']=TRUE;
    $this->load->library('upload',$config);
    if ($this->upload->do_upload('image')) {
      $image=$this->upload->data();
      $imagename=$image['file_name'];
      $imagesave='assets/front/images/portfolio/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/portfolio/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='640';
            $config['height'] ='390';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();


            $data=[
     'port_title'=>$this->input->post('title'),
     'port_image'=>$imagesave,
     'port_link'=>$this->input->post('link'),
     'port_desc_az'=>$this->input->post('description_az'),
     'port_desc_en'=>$this->input->post('description_en'),
     'port_date'=>$this->input->post('date'),

     'port_status'=>1
            ];
            $this->load->model('Dtbs');
            $result=$this->Dtbs->elave('portfolio',$data);
            if ($result) {
              $this->session->set_flashdata('success','<div class="alert alert-success">Portfolio Ugurla elave edildi!</div');
              redirect('back/portfolio');
            }else{
              $this->session->set_flashdata('success','<div class="alert alert-danger">Portfolio Ugurla elave edilmedi,yeniden cehd edin!</div');
              redirect('back/portfolio');
            }

}
//sekilsiz

       $data=[
     'port_title'=>$this->input->post('title'),
     'port_link'=>$this->input->post('link'),
     'port_desc_az'=>$this->input->post('description_az'),
     'port_desc_en'=>$this->input->post('description_en'),
     'port_date'=>$this->input->post('date'),
     'port_status'=>1
            ];
            $this->load->model('Dtbs');
            $result=$this->Dtbs->elave('portfolio',$data);
            if ($result) {
              $this->session->set_flashdata('success','<div class="alert alert-success">Portfolio Ugurla elave edildi!</div');
              redirect('back/portfolio');
            }else{
              $this->session->set_flashdata('success','<div class="alert alert-danger">Portfolio Ugurla elave edilmedi,yeniden cehd edin!</div');
              redirect('back/portfolio');
            }
}

public function editportfolio($id)
{
    $this->load->model('Dtbs');
    $result=$this->Dtbs->sec('portfolio',$id);
    $data['melumat']=$result;
    $this->load->view('back/portfolio/portfolioedit',$data);
}
public function portfolioupdate(){


   $config['upload_path']= FCPATH.'assets/front/images/portfolio';
    $config['allowed_types']='gif|jpg|jpeg|png';
    $config['encrypt_name']=TRUE;
    $this->load->library('upload',$config);
    if ($this->upload->do_upload('image')) {
      $image=$this->upload->data();
      $imagename=$image['file_name'];
      $imagesave='assets/front/images/portfolio/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/portfolio/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='640';
            $config['height'] ='390';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();



            $data=[
     'id'=>$id=$this->input->post('id'),
     'port_title'=>$this->input->post('title'),
     'port_image'=>$imagesave,
     'port_link'=>$this->input->post('link'),
     'port_desc_az'=>$this->input->post('description_az'),
     'port_desc_en'=>$this->input->post('description_en'),
     'port_date'=>$this->input->post('date'),
     'port_status'=>1
            ];

            $sil=portfolioimage($id);
            unlink($sil->port_image);
            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','portfolio');
            if ($result) {
              $this->session->set_flashdata('success','<div class="alert alert-success">Portfolio Ugurla deyisdirildi!</div');
              redirect('back/portfolio');
            }else{
              $this->session->set_flashdata('success','<div class="alert alert-danger">Portfolio deyisdirilmedi,yeniden cehd edin!</div');
              redirect('back/portfolio');
            }
}

//sekilsiz

    $data=[
          'id'=>$id=$this->input->post('id'),
     'port_title'=>$this->input->post('title'),
     'port_link'=>$this->input->post('link'),
     'port_desc_az'=>$this->input->post('description_az'),
     'port_desc_en'=>$this->input->post('description_en'),
     'port_date'=>$this->input->post('date'),
     'port_status'=>1
            ];
            $this->load->model('Dtbs');
          $result=$this->Dtbs->guncelle($data,$id,'id','portfolio');
            if ($result) {
              $this->session->set_flashdata('success','<div class="alert alert-success">Portfolio Ugurla elave edildi!</div');
              redirect('back/portfolio');
            }else{
              $this->session->set_flashdata('success','<div class="alert alert-danger">Portfolio Ugurla elave edilmedi,yeniden cehd edin!</div');
              redirect('back/portfolio');
            }


}

public function deleteportfolio($id,$where,$from)
{    
 $this->load->model('Dtbs');
     $result=$this->Dtbs->sil($id,$where,$from);
     if ($result) {
        $this->session->set_flashdata('success',"<div class='alert alert-success'>Portfolio ugurla silindi!!!</div>");
        redirect('back/portfolio');
       }else{
               $this->session->set_flashdata('success','<div class="alert alert-danger">Silinmedi,yeniden cehd edin</div>');
               redirect('back/portfolio');

}

}
public function blog()
{

  $this->load->model('Dtbs');
  $result=$this->Dtbs->listele('blog');
  $data['melumat']=$result;
    $this->load->view('back/blog/blog',$data);

}
public function blogadd()
{
  $this->load->view('back/blog/blogadd');
}
public function blogadded()
{$config['upload_path']= FCPATH.'assets/front/images/blog';
    $config['allowed_types']='gif|jpg|jpeg|png';
    $config['encrypt_name']=TRUE;
    $this->load->library('upload',$config);
    if ($this->upload->do_upload('image')) {
      $image=$this->upload->data();
      $imagename=$image['file_name'];
      $imagesave='assets/front/images/blog/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/blog/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='441';
            $config['height'] ='441';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();


    $data=[

        "blog_title_az"=>$title_az=$this->input->post('title_az'),
        "blog_title_en"=>$title_en=$this->input->post('title_en'),
       
        'blog_sef_az'=>seflink($title_az),
        'blog_sef_en'=>seflink($title_en),
        'blog_desc_az'=>$this->input->post('description_az'),
        'blog_desc_en'=>$this->input->post('description_en'),

        'blog_keyword_az'=>$this->input->post('keywords_az'),
        'blog_keyword_en'=>$this->input->post('keywords_en'),

        'blog_tag_az'=>$this->input->post('tag_az'),
        'blog_tag_en'=>$this->input->post('tag_en'),
   
        'blog_image'=>$imagesave,
        'blog_status'=>1,
        'blog_author'=>$this->input->post('blog_author'),
        'blog_date'=>date("Y-m-d")


    ];
    $this->load->model('Dtbs');
    $result=$this->Dtbs->elave('blog',$data);

       if ($result) {
        $this->session->set_flashdata('success',"<div class='alert alert-success'>Blog ugurla gonderildi</div>");
        redirect('back/blog');
       }else{
               $this->session->set_flashdata('success','<div class="alert alert-danger">Gonderilmedi</div>');
               redirect('back/blog');
       }

    }else{
         $this->session->set_flashdata('success','<div class="alert alert-danger">Gonderilmedi</div>');
               redirect('back/blog');
    }
}


public function editblog($id)
{
  $this->load->model('Dtbs');
  $data['melumat']=$result=$this->Dtbs->sec('blog',$id);
  $this->load->view('back/blog/blogedit',$data);
}

public function blogupdate()
{
      $config['upload_path']= FCPATH.'assets/front/images/blog';
    $config['allowed_types']='gif|jpg|jpeg|png';
    $config['encrypt_name']=TRUE;
    $this->load->library('upload',$config);
    if ($this->upload->do_upload('image')) {
      $image=$this->upload->data();
      $imagename=$image['file_name'];
      $imagesave='assets/front/images/blog/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/blog/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='441';
            $config['height'] ='441';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();
    
         $data=[
                 'id'=>$id=$this->input->post('id'),
                  "blog_title_az"=>$title_az=$this->input->post('title_az'),
        "blog_title_en"=>$title_en=$this->input->post('title_en'),
       
        'blog_sef_az'=>seflink($title_az),
        'blog_sef_en'=>seflink($title_en),
        'blog_desc_az'=>$this->input->post('description_az'),
        'blog_desc_en'=>$this->input->post('description_en'),

        'blog_keyword_az'=>$this->input->post('keywords_az'),
        'blog_keyword_en'=>$this->input->post('keywords_en'),

        'blog_tag_az'=>$this->input->post('tag_az'),
        'blog_tag_en'=>$this->input->post('tag_en'),
   
        'blog_image'=>$imagesave,
        'blog_status'=>1,
        'blog_author'=>$this->input->post('blog_author'),
        'blog_date'=>date("Y-m-d")
    ];

          $sil=blogimage($id);
        
       $ela= unlink($sil->blog_image);
       $this->load->model('Dtbs');
$result=$this->Dtbs->guncelle($data,$id,'id','blog');
 if ($result) {
        $this->session->set_flashdata('success',"<div class='alert alert-success'>Blog ugurla deyisdirildi</div>");
        redirect('back/blog');
       }else{
               $this->session->set_flashdata('success','<div class="alert alert-danger">deyisdirilmedi</div>');
               redirect('back/blog');

}


}


    $data=['id'=>$id=$this->input->post('id'),
                  "blog_title_az"=>$title_az=$this->input->post('title_az'),
        "blog_title_en"=>$title_en=$this->input->post('title_en'),
       
        'blog_sef_az'=>seflink($title_az),
        'blog_sef_en'=>seflink($title_en),
        'blog_desc_az'=>$this->input->post('description_az'),
        'blog_desc_en'=>$this->input->post('description_en'),

        'blog_keyword_az'=>$this->input->post('keywords_az'),
        'blog_keyword_en'=>$this->input->post('keywords_en'),

        'blog_tag_az'=>$this->input->post('tag_az'),
        'blog_tag_en'=>$this->input->post('tag_en'),
  
        'blog_status'=>1,
        'blog_author'=>$this->input->post('blog_author'),
        'blog_date'=>date("Y-m-d")
            ];
            $this->load->model('Dtbs');
          $result=$this->Dtbs->guncelle($data,$id,'id','blog');
            if ($result) {
              $this->session->set_flashdata('success','<div class="alert alert-success">Portfolio Ugurla elave edildi!</div');
              redirect('back/blog');
            }else{
              $this->session->set_flashdata('success','<div class="alert alert-danger">Portfolio Ugurla elave edilmedi,yeniden cehd edin!</div');
              redirect('back/blog');
            }

}


public function deleteblog($id,$where,$from)
{    
 $this->load->model('Dtbs');
     $result=$this->Dtbs->sil($id,$where,$from);
     if ($result) {
        $this->session->set_flashdata('success',"<div class='alert alert-success'>Portfolio ugurla silindi!!!</div>");
        redirect('back/blog');
       }else{
               $this->session->set_flashdata('success','<div class="alert alert-danger">Silinmedi,yeniden cehd edin</div>');
               redirect('back/blog');

}

}
public function messages()
{
    $this->load->model('Dtbs');
    $result=$this->Dtbs->listele('message');
    $data['melumat']=$result;
    $this->load->view('back/message/messages',$data);
}
public function messageedit($id)
{
    $data=['status'=>1];

    $this->Dtbs->messageguncelle($id,$data);
    $result=$this->Dtbs->sec('message',$id);
    $data['melumat']=$result;
    $this->load->view('back/message/messageread',$data);
}




}