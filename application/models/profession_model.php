<?php
class Profession_model extends CI_Model
{
	function get_id_by_name($name){
		$this->db->select('id');
		$this->db->where('name',$name);
		$query=$this->db->get('profession');
		$id = $query->row()->id;
		return $id;
	}

	function get_asso($alist,$model){
		$this->load->model($model);
		$cutlist = array();
		$cutlist = preg_split('/\n|\r\n?/', trim($alist));
		$cut_id_list = array();
			foreach ($cutlist as $row) 
			{
				$cut = $this->$model->get_id_by_name($row);
				if($cut != '') array_push($cut_id_list,$cut);
			}
		return $cut_id_list;
	}
}
?>