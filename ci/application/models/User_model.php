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
	function get_by_username($u)
	{
		// SELECT * FROM user WHERE username='$u'

		$this->db->where("username", $u);
		$res=$this->db->get('user_tbl');
		// SELECT * FROM user_tbl
		return $res;
	}
}


?>