<?php
header('Content-Type: application/json; charset=UTF-8');
class Npc extends CI_Controller
{
	public function index()
	{
		if(!empty($_GET['name']))
			$this->db->like('name', $_GET['name']);
		$query=$this->db->get('npc');
		echo json_encode($query->result(),JSON_UNESCAPED_UNICODE);
	}

	public function view()
	{
		if(!isset($_GET['id'])) redirect('npc/');
		$this->db->where('npc.id',$_GET['id']);
		$query_data= $this->db->get('npc');
		$this->db->select('npc_location.map_id,map.name');
		$this->db->from('map');
		$this->db->join('npc_location', 'npc_location.map_id = map.id');
		$this->db->join('npc', 'npc_location.npc_id = npc.id');		
		$this->db->where('npc.id',$_GET['id']);
		$query_location=$this->db->get();
		$this->db->select('mission.npc_id,mission.name');
		$this->db->from('mission');
		$this->db->join('npc', 'mission.npc_id = npc.id');
		$this->db->where('npc.id',$_GET['id']);		
		$query_mission=$this->db->get();
		$query=array_merge($query_data->result(),$query_location->result(),$query_mission->result());
		echo json_encode($query,JSON_UNESCAPED_UNICODE);
		$this->load->view('npc_view.php');
	}
}

?>
