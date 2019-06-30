<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front extends     MY_Controller
{

public function index()
{
    $this->load->model('Dtbs');
    $this->Dtbs->listele('portfolio');
      $this->load->view('front/home');
}
    public function dildeyisdir($dil)
    {
        $this->session->set_userdata('lang',$dil);
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function  portfolio()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('portfolio');
        $data['melumat']=$result;
        $this->load->view('front/portfolio/portfolio',$data);
    }

    public function port_detail($title)
    {
        $result=port_detail($title);
        $data['melumat']=$result;
        $this->load->view('front/portfolio/port_detail/port_detail',$data);
    }

    public function  blog()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('blog');
        $data['melumat']=$result;
        $this->load->view('front/blog/blog',$data);
    }

    public function blog_detail($sef)
    {

        $this->load->model('Dtbs');
        $result=$this->Dtbs->blog_detail($sef);

        $data['melumat']=$result;
        $this->load->view('front/blog/blog_detail/blog_detail',$data);
    }

    public function  contact()
    {
        $this->load->view('front/contact/contact');
    }


}
?>