<?php
class item extends CI_Controller
{
	public function index()
	{
		if(isset($_GET['name'])) $this->db->like('name',$_GET['name']);
		$query=$this->db->get('item');
		echo json_encode($query->result(),JSON_UNESCAPED_UNICODE);
		$this->load->view('item_list.php');
	}

	public function view()
	{
		if(!isset($_GET['id'])) redirect('item/');
		$this->db->where('item.id',$_GET['id']);
		$query_data= $this->db->get('item');
		$this->db->select('reward.mission_id,mission.name');
		$this->db->from('mission');
		$this->db->join('reward', 'reward.mission_id = mission.id');		
		$this->db->join('item', 'reward.item_id = item.id');
		$this->db->where('item.id',$_GET['id']);
		$query_mission=$this->db->get();
		$this->db->select('monster_trophy.monster_id,monster.name');
		$this->db->from('monster');
		$this->db->join('monster_trophy', 'monster_trophy.monster_id = monster.id');		
		$this->db->join('item', 'monster_trophy.item_id = item.id');
		$this->db->where('item.id',$_GET['id']);
		$query_monster=$this->db->get();
		$query=array_merge($query_data->result(),$query_mission->result(),$query_monster->result());
		echo json_encode($query,JSON_UNESCAPED_UNICODE);
		$this->load->view('item_view.php');
	}
}

?>
