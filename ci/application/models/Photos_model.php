<?php

class Photos_model extends CI_Model{


	function save($arr)
	{

		$this->db->insert("photos_tbl", $arr);
	}
	function update($id, $arr)
	{
		// update query
		$this->db->where("id", $id);
		$this->db->update("photos_tbl", $arr);
	}
	function remove()
	{
		// delete query
	}
	function getall()
	{
		// select query
	}
	
	function get_by_userid($userid)
	{
		// SELECT * FROM photos_tbl WHERE id = $id
		$this->db->where("user_id", $userid);
		$res=$this->db->get('photos_tbl');
		return $res;
	}
}


?>