<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dtbs extends CI_Model
{


function kontrol($from,$email,$password)
{
   $result=$this->db->select('*')->from($from)
   ->where('email',$email)->where('password',$password)
   ->get()->row();
   return $result;
}
function listele($from)
{
	$result=$this->db->select('*')->from($from)
	->order_by('id','desc')
	->get()->result();
	return $result;
}
function elave($from,$data=array())
{
	$result=$this->db->insert($from,$data);
	return $result;

}
function sec($from,$id)
{
	$result=$this->db->select('*')
	->from($from)
    ->where('id',$id)
    ->get()
    ->row();
    return $result;

}

	function guncelle($data=array(),$id,$where,$from)
	{
		$result=$this->db->where($where,$id)->update($from,$data);
		return $result;
	}
function sil($id,$where,$from)
	{
		$result=$this->db->delete($from,array($where=>$id));
		return $result;
	}
	function messageguncelle($id,$data)
    {
        $result=$this->db->where('id',$id)->update('message',$data);
        return $result;
    }

    function blog_detail($sef)
    {
        $result=$this->db
            ->select('*')
            ->from('blog')
            ->where('blog_status','1')
            ->where('blog_sef_az',$sef)
            ->get()->row();
        return $result;
    }


}




