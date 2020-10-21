<?php

class User_model extends CI_Model{


	function save($arr)
	{

		// insert query
		//$this->load->database(); // db connection

		// we can load database in config------>autoload.php------->library
		$this->db->insert("user_tbl", $arr);
	}
	function update()
	{
		// update query
	}
	function remove()
	{
		// delete query
	}
	function getall()
	{
		// select query
	}
}


?>