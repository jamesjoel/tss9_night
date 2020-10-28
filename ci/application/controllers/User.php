<?php

class User extends CI_Controller{

	// a constructor is pre-defined function which can call auto before when any other function call
	function __construct()
	{
		parent::__construct();
		$this->backdoor();
	}

	function backdoor()
	{
		if(! $this->session->userdata("is_user_logged_in"))
		{
			redirect("/home");
		}
	}


	function index()
	{
		$this->load->view("header");
		$this->load->view("dashboard");
	}
	function profile()
	{
		$id = $this->session->userdata("id");
		$this->load->model("User_model");
		$res=$this->User_model->get_by_id($id);

		$pagedata = array("result"=>$res);
		$this->load->view("header");
		$this->load->view("my_profile", $pagedata);	
	}

	function edit()
	{
		$id = $this->session->userdata("id");
		$this->load->model("User_model");
		$res=$this->User_model->get_by_id($id);

		$pagedata = array("result"=>$res);
		$this->load->view("header");
		$this->load->view("edit_profile", $pagedata);	
	}
	function update()
	{
		// print_r($this->input->post());
		$id = $this->session->userdata("id");
		$arr = $this->input->post();
		$this->load->model("User_model");
		$this->User_model->update($id, $arr);
		redirect("user/profile");
	}


	function logout()
	{
		$this->session->sess_destroy();
		redirect("/home");
	}
}


?>