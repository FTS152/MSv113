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
		// $this->load->view('mission_list.php');
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

//需要將name設為primary key
	public function add()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('login/');
		}
		else if(!empty($_GET['name']))
		{
			$this->load->model('mission_model');
			$this->load->model('npc_model');
			$npc_id = $this->npc_model->get_id_by_name($_GET['npc_name']);
			$mission_data=array(
				'name' => $_GET['name'],
				// 'type' => $_GET['type'],				
				'description' => $_GET['description'],				
				'highest_lv' => $_GET['highest_lv'],				
				'lowest_lv' => $_GET['lowest_lv'],				
				'npc_id' => $npc_id,
			);
			if(!empty($_GET['rewardlist'])) {
				$mission_id_list = array();
				$mission_id_list = $this->mission_model->get_asso($_GET['rewardlist'],'item_model');
			}
			$this->db->insert('mission',$mission_data);

			$mission_id = $this->mission_model->get_id_by_name($_GET['name']);
			if(!empty($mission_id_list)){
				foreach ($mission_id_list as $row){
					$mission_data = array(
						'mission_id' => $mission_id,
						'item_id' => $row,
						'number' => 1,
					);
					$this->db->insert('reward',$mission_data);
				}
			}


			redirect('mission/');

		}
		$this->load->view('header.php');
		$this->load->view('mission_add.php');
		$this->load->view('footer.php');
	}

//未完成功能: 傳預設值至view
	public function edit()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('login/');
		}
		else if(!empty($_GET['name']))
		{
			$this->load->model('mission_model');
			$this->load->model('npc_model');
			$npc_id = $this->npc_model->get_id_by_name($_GET['npc_name']);
			$mission_data=array(
				'name' => $_GET['name'],
				'type' => $_GET['type'],				
				'description' => $_GET['description'],				
				'highest_lv' => $_GET['highest_lv'],				
				'lowest_lv' => $_GET['lowest_lv'],				
				'npc_id' => $npc_id,
			);
			if(!empty($_GET['rewardlist'])) {
				$mission_id_list = array();
				$mission_id_list = $this->mission_model->get_asso($_GET['rewardlist'],'item_model');
			}
			$this->db->where('id',$_GET['id']);
			$this->db->update('mission',$mission_data);
			$this->db->where('mission_id',$_GET['id']);
			$this->db->delete('reward');			
			if(!empty($mission_id_list)){
				foreach ($mission_id_list as $row){
					$mission_data = array(
						'mission_id' => $_GET['id'],
						'item_id' => $row,
						'number' => 1,
					);
					$this->db->insert('reward',$mission_data);
				}
			}


			redirect('mission/');

		}

		$this->load->view('mission_edit.php');
	}

	public function delete()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('login/');
		}
		else 
		{
			$this->load->model('mission_model');
			$this->db->where('id',$_GET['id']);
			$this->db->delete('mission');
			$this->db->where('mission_id',$_GET['id']);
			$this->db->delete('reward');			
			redirect('mission/');
		}
	}
}

?>
