<?php
class Mission extends CI_Controller
{
	public function index()
	{
		if(!empty($_GET['level'])) {
			$this->db->where('highest_lv>=',$_GET['level']);
			$this->db->where('lowest_lv<=',$_GET['level']);
		}
		if(!empty($_GET['name'])) $this->db->like('name',$_GET['name']);
		$query=$this->db->get('mission');
		echo json_encode($query->result(),JSON_UNESCAPED_UNICODE);
		$this->load->view('mission_list.php');
	}

	public function view()
	{
		if(!isset($_GET['id'])) redirect('mission/');
		$this->db->where('mission.id',$_GET['id']);
		$query_data=$this->db->get('mission');
		$this->db->select('npc.id,npc.name');
		$this->db->from('npc');
		$this->db->join('mission', 'mission.npc_id = npc.id');
		$this->db->where('mission.id',$_GET['id']);		
		$query_npc=$this->db->get();
		$this->db->select('reward.item_id,reward.number,item.id,item.name');
		$this->db->from('reward');
		$this->db->join('mission', 'reward.mission_id = mission.id');
		$this->db->join('item', 'reward.item_id = item.id');
		$this->db->where('mission.id',$_GET['id']);
		$query_reward=$this->db->get();
		$query=array_merge($query_data->result(),$query_npc->result(),$query_reward->result());
		echo json_encode($query,JSON_UNESCAPED_UNICODE);
		$this->load->view('mission_view.php');
	}
}

?>
