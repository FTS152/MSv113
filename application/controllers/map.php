<?php
class map extends CI_Controller
{
	public function index()
	{
		if(!empty($_GET['name'])) $this->db->like('name',$_GET['name']);
		if(!empty($_GET['area'])) $this->db->like('area',$_GET['area']);
		$query=$this->db->get('map');
		echo json_encode($query->result(),JSON_UNESCAPED_UNICODE);
		$this->load->view('map_list.php');
	}

	public function view()
	{
		if(!isset($_GET['id'])) redirect('map/');
		$this->db->where('map.id',$_GET['id']);
		$query_data= $this->db->get('map');
		$this->db->select('npc_location.npc_id,npc.name');
		$this->db->from('npc');
		$this->db->join('npc_location', 'npc_location.npc_id = npc.id');
		$this->db->join('map', 'npc_location.map_id = map.id');
		$this->db->where('map.id',$_GET['id']);
		$query_npc=$this->db->get();
		$this->db->select('monster_haunt.monster_id,monster.name');
		$this->db->from('monster');
		$this->db->join('monster_haunt', 'monster_haunt.monster_id = monster.id');
		$this->db->join('map', 'monster_haunt.map_id = map.id');
		$this->db->where('map.id',$_GET['id']);
		$query_monster=$this->db->get();
		$query = array_merge($query_data->result(),$query_npc->result(),$query_monster->result());
		echo json_encode($query,JSON_UNESCAPED_UNICODE);
		$this->load->view('map_view.php');
	}
}

?>
