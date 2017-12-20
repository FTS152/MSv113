<?php
class Monster extends CI_Controller
{
	public function index()
	{
		if(isset($_GET['name'])) $this->db->like('name',$_GET['name']);
		$query=$this->db->get('monster');
		echo json_encode($query->result(),JSON_UNESCAPED_UNICODE);
		$this->load->view('monster_list.php');
	}

	public function view()
	{
		if(!isset($_GET['id'])) redirect('monster/');
		$this->db->where('monster.id',$_GET['id']);
		$query_data= $this->db->get('monster');
		$this->db->select('monster_haunt.map_id,map.name');
		$this->db->from('map');
		$this->db->join('monster_haunt', 'monster_haunt.map_id = map.id');
		$this->db->join('monster', 'monster_haunt.monster_id = monster.id');		
		$this->db->where('monster.id',$_GET['id']);
		$query_haunt=$this->db->get();
		$this->db->select('monster_trophy.item_id,item.name');
		$this->db->from('item');
		$this->db->join('monster_trophy', 'monster_trophy.item_id = item.id');
		$this->db->join('monster', 'monster_trophy.monster_id = monster.id');		
		$this->db->where('monster.id',$_GET['id']);
		$query_trophy=$this->db->get();
		$query=array_merge($query_data->result(),$query_haunt->result(),$query_trophy->result());
		echo json_encode($query,JSON_UNESCAPED_UNICODE);
		$this->load->view('monster_view.php');
	}
}

?>
