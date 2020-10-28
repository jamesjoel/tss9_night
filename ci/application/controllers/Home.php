<?php
/*
		session is pre-defined global varibal which avalable of all pages in the application when its create (24min).

		PHP 							CI 

		session_start()					$this->load->library() or load in autoload.php

					------- Creating a Session --------

		$_SESSION['name']="rohit";		$this->session->set_userdata("name", "rohit")
		$_SESSION['age']=25;			$this->session->set_userdata("age", 25)


					------- Fetching a Session --------
		echo $_SESSION['name'];			echo $this->session->userdata("name");
		echo $_SESSION['age'];			echo $this->session->userdata("age");


					------- Deleting a Session --------

		******SINGLE
		unset($_SESSION['name']);		$this->session->unset_userdata("name");

		******Whole Session
		session_destroy()				$this->session->sess_destroy();



============================ Flash Data (One Time Message) ===============================

									$this->session->set_flashdata("msg", "your message");


						and another page  ---- echo $this->session->flashdata("msg");




*/










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

			unset($saveArr['re_pass']);

			$this->load->model("User_model");
			$this->User_model->save($saveArr);
			redirect("home/login");
		}

		
	}
	function login()
	{
		$this->load->view("header");
		$this->load->view("login");
	}
	function auth()
	{
		// print_r($this->input->post());
		$u = $this->input->post("username");
		$p = $this->input->post("password");
		$this->load->model("User_model");
		$res=$this->User_model->get_by_username($u);

		if($res->num_rows()==1)
		{
			$data = $res->row_array(); // convert object to array
			if($data['password'] == $p)
			{
				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("name", $data['full_name']);
				$this->session->set_userdata("is_user_logged_in", true);
				redirect("/user");

			}
			else
			{
				$this->session->set_flashdata("msg", "This Password is Incorrect");
				redirect("home/login");
			}
		}
		else // username is not correct
		{
			$this->session->set_flashdata("msg", "This Username and Password is Incorrect");
			redirect("home/login");
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