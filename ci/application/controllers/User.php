<?php

class User extends CI_Controller{

	// a constructor is pre-defined function which can call auto before when any other function call
	function __construct()
	{
		parent::__construct();
		$this->backdoor();
		$this->load->model("User_model");
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
		$this->load->view("user/dashboard");
	}
	function profile()
	{
		$id = $this->session->userdata("id");
		
		$res=$this->User_model->get_by_id($id);

		$pagedata = array("result"=>$res);
		$this->load->view("header");
		$this->load->view("user/my_profile", $pagedata);	
	}

	function edit()
	{
		$id = $this->session->userdata("id");
		
		$res=$this->User_model->get_by_id($id);

		$pagedata = array("result"=>$res);
		$this->load->view("header");
		$this->load->view("user/edit_profile", $pagedata);	
	}
	function update()
	{
		// print_r($this->input->post());
		$id = $this->session->userdata("id");
		$arr = $this->input->post();
		
		$this->User_model->update($id, $arr);
		redirect("user/profile");
	}
	function change_pass()
	{
		$this->load->view("header");
		$this->load->view("user/change_pass");
	}
	function update_pass()
	{
		// print_r($this->input->post());
		$a = $this->input->post("cpass");
		$b = $this->input->post("npass");
		$c = $this->input->post("cnpass");
		$id = $this->session->userdata("id");
		$res=$this->User_model->get_by_id($id);
		$data = $res->row_array();
		if($data['password']==$a)
		{
			if($b == $c)
			{
				$arr['password']=$b;
				$this->User_model->update($id, $arr);
				redirect("user/profile");
			}
			else
			{
				$this->session->set_flashdata("msg", "New Password and Confirm New Password is Incorrect");
			redirect("user/change_pass");
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "The Current Password is Incorrect");
			redirect("user/change_pass");
		}

	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect("/home");
	}
}


?>