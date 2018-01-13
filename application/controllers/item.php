<?php
class item extends CI_Controller
{
	public function index()
	{
		if(!empty($_GET['name'])) $this->db->like('name',$_GET['name']);
		if(!empty($_GET['type'])) $this->db->like('type',$_GET['type']);
		$query=$this->db->get('item');
		// $data = array( 'data' => $query->result());
		echo json_encode($query->result(),JSON_UNESCAPED_UNICODE);
		// echo var_dump($data);
		// $this->load->view('item_view.php', $data);
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
		$data = array('data' => $query);

		$this->load->view('header.php');
		$this->load->view('item_view.php', $data);
		$this->load->view('footer.php');
	}

	public function add()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('login/');
		}
		else if(!empty($_GET['name']))
		{
			$this->load->model('item_model');
			$item_data=array(
				'name' => $_GET['name'],
				'type' => $_GET['type'],				
				'description' => $_GET['description'],				
			);
			if(!empty($_GET['rewardlist'])) {
				$mission_id_list = array();
				$mission_id_list = $this->item_model->get_asso($_GET['rewardlist'],'mission_model');
			}
			
			if(!empty($_GET['trophylist'])){
				$trophy_id_list = array();
				$trophy_id_list = $this->item_model->get_asso($_GET['trophylist'],'monster_model');
			} 
			$this->db->insert('item',$item_data);
			$item_id = $this->item_model->get_id_by_name($_GET['name']);
			if(!empty($mission_id_list)){
				foreach ($mission_id_list as $row){
					$mission_data = array(
						'item_id' => $item_id,
						'mission_id' => $row,
						'number' => 1,
					);
					$this->db->insert('reward',$mission_data);
				}
			}
			if(!empty($trophy_id_list)){
				foreach ($trophy_id_list as $row){
					$trophy_data = array(
						'item_id' => $item_id,
						'monster_id' => $row,
					);
					$this->db->insert('monster_trophy',$trophy_data);
				}
			}


			redirect('item/');

		}
		$this->load->view('header.php');
		$this->load->view('item_add.php');
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
			$this->load->model('item_model');
			$item_data=array(
				'name' => $_GET['name'],
				'type' => $_GET['type'],				
				'description' => $_GET['description'],				
			);
			if(!empty($_GET['rewardlist'])) {
				$mission_id_list = array();
				$mission_id_list = $this->item_model->get_asso($_GET['rewardlist'],'mission_model');
			}
			
			if(!empty($_GET['trophylist'])){
				$trophy_id_list = array();
				$trophy_id_list = $this->item_model->get_asso($_GET['trophylist'],'monster_model');
			} 
			$this->db->where('id',$_GET['id']);
			$this->db->update('item',$item_data);
			$this->db->where('item_id',$_GET['id']);
			$this->db->delete('reward');			
			$this->db->where('item_id',$_GET['id']);
			$this->db->delete('monster_trophy');
			if(!empty($mission_id_list)){
				foreach ($mission_id_list as $row){
					$mission_data = array(
						'item_id' => $_GET['id'],
						'mission_id' => $row,
						'number' => 1,
					);
					$this->db->insert('reward',$mission_data);
				}
			}
			if(!empty($trophy_id_list)){
				foreach ($trophy_id_list as $row){
					$trophy_data = array(
						'monster_id' => $row,
						'item_id' => $_GET['id'],
					);
					$this->db->insert('monster_trophy',$trophy_data);
				}
			}


			redirect('item/');

		}

		$this->load->view('item_edit.php');
	}

	public function delete()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('login/');
		}
		else 
		{
			$this->load->model('item_model');
			$this->db->where('id',$_GET['id']);
			$this->db->delete('item');
			$this->db->where('item_id',$_GET['id']);
			$this->db->delete('reward');			
			$this->db->where('item_id',$_GET['id']);
			$this->db->delete('monster_trophy');
			redirect('firstpage/');
		}
	}
}

?>
