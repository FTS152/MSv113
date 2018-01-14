<?php
class Profession extends CI_Controller
{
	public function index()
	{
		$query=$this->db->get('profession');
<<<<<<< HEAD
		$data = array('data' => $query->result());

		$this->load->view('header.php');
		$this->load->view('profession_list.php', $data);
		$this->load->view('footer.php');
=======
		echo json_encode($query->result(),JSON_UNESCAPED_UNICODE);
		// $this->load->view('profession_list.php');
>>>>>>> origin/master
	}

	public function view()
	{
		if(!isset($_GET['id'])) redirect('profession/');
		$this->db->where('profession.id',$_GET['id']);
		$query_data=$this->db->get('profession');
		$this->db->select('skill.*');
		$this->db->from('skill');
		$this->db->join('have_skill', 'have_skill.skill_id = skill.id');
		$this->db->join('profession', 'have_skill.profession_id = profession.id');
		$this->db->where('profession.id',$_GET['id']);
		$query_skill=$this->db->get();
		$query=array_merge($query_data->result(),$query_skill->result());
		$data = array('data' => $query);
<<<<<<< HEAD
		// echo var_dump($data);
=======

>>>>>>> origin/master
		$this->load->view('header.php');
		$this->load->view('profession_view.php', $data);
		$this->load->view('footer.php');
	}

}

?>
