<?php
class Monster extends CI_Controller
{
	public function index()
	{
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		if(isset($_GET['name'])) $this->db->like('name',$_GET['name']);
		$query=$this->db->get('monster');
		echo json_encode($query->result(),JSON_UNESCAPED_UNICODE);
		$this->load->view('monster_list.php');
	}

}

?>
