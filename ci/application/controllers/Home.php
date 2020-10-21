<?php

class Home extends CI_Controller{


	function index()
	{
		$this->load->view("header");
		$this->load->view("home");
	}
	function about()
	{
		$a = "rohit";

		$pagedata = array("xyz"=>$a, "city"=>"indore");

		$this->load->view("header");
		$this->load->view("about", $pagedata);
	}
	function contact()
	{
		$this->load->view("header");
		$this->load->view("contact");
	}
	function signup()
	{
		$this->load->library("form_validation");
		// sample error msg : The .... filed is require.
		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username/Email", "required|valid_email");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("re_pass", "Re-Password", "required|matches[password]");
		$this->form_validation->set_rules("address", "Adderss", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("contact", "Contact", "required|numeric|exact_length[10]");
		$this->form_validation->set_rules("gender", "Gender", "required");

		if($this->form_validation->run()==false) // if any one error then if condi is exe.
		{
			$this->load->view("header");
			$this->load->view("signup");
		}
		else
		{
			// print_r($this->input->post());
			$saveArr = $this->input->post();
		}

		
	}

	



}
// http://localhost/tss9/ci/
// http://www.demo.com
/*
	how to send data from controller to view






1. codeigniter install
2. base_url()  [config---- config.php]
3. autload [config ---- autoload.php]
4. default_controller [config----- routes.php]
5. create controller Home.php
6. make 4 function in controller
		index(), about(), contact(), singip()
7. download Bootstrap, jquery
8. make folder in root callled "assets" and copy here
9. call bootstrap and jquery file by base_url()
10. run project
11. signup form data fill and receive in controller





*/
?>