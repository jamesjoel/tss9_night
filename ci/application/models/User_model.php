<?php

class User_model extends CI_Model{


	function save($arr)
	{

		// insert query
		//$this->load->database(); // db connection

		// we can load database in config------>autoload.php------->library
		$this->db->insert("user_tbl", $arr);
	}
	function update($id, $arr)
	{
		// update query
		$this->db->where("id", $id);
		$this->db->update("user_tbl", $arr);
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
	function get_by_id($id)
	{
		// SELECT * FROM user_tbl WHERE id = $id
		$this->db->where("id", $id);
		$res=$this->db->get('user_tbl');
		return $res;
	}
}


?>