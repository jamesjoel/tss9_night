<?php

class Photos extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model("Photos_model");
	}

	function index(){
		$id = $this->session->userdata("id");
		$res=$this->Photos_model->get_by_userid($id);
		$pagedata = array("photos"=>$res);
		$this->load->view("header");
		$this->load->view("photos/index", $pagedata);
	}
	function photo_upload()
	{
		$congif["upload_path"]="./assets/photos";
		$congif["max_size"]=2048; // 2mb = 2*1024
		$congif["allowed_types"]="jpg|png|jpeg|gif|bmp";

		$congif['encrypt_name']=true;
		$this->load->library("upload", $congif);

		if($this->upload->do_upload()==false)
		{
			$this->session->set_flashdata("msg", $this->upload->display_errors());
			redirect("photos");
		}
		else
		{
			// print_r($this->upload->data());
			$name =  $this->upload->data("file_name");
			$arr['user_id']=$this->session->userdata("id");
			$arr['image_name']=$name;
			$this->Photos_model->save($arr);
			redirect("photos");
		}


	}
}


/*

"abc" is a library

$this->load->library("abc")


*/

?>