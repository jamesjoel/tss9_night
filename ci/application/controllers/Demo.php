<?php
class Demo extends CI_Controller{

	
	function about()
	{
		$this->load->helper("url");
		$this->load->view("about");
	}
	function contact()
	{
		$this->load->helper("url");
		$this->load->view("info");
	}
	function index()
	{
		$this->load->helper("url");
		$this->load->view("home");
	}


}

/*
	http://localhost/tss9/ci/index.php/demo/abc

	http://localhost/tss9/ci/index.php/demo/about

	http://localhost/tss9/ci/index.php/demo/contact

	http://localhost/tss9/ci/index.php/demo/index
	http://localhost/tss9/ci/index.php/demo/



	helper - url

	$this->load->helper("url");


*/
?>




