<?php
class Monster_model extends CI_Model
{
	function get_id_by_name($name){
		$this->db->select('id');
		$this->db->where('name',$name);
		$query=$this->db->get('monster');
		$id = $query->row()->id;
		return $id;
	}
}
?>