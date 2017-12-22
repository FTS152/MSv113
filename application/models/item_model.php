<?php
class Item_model extends CI_Model
{
	function get_id_by_name($name){
		$this->db->select('id');
		$this->db->where('name',$name);
		$query=$this->db->get('item');
		$id = $query->row()->id;
		return $id;
	}
}
?>