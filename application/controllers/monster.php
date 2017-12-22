<?php
class Monster extends CI_Controller
{
	public function index()
	{
		if(!empty($_GET['name'])) $this->db->like('name',$_GET['name']);
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

//需要將name設為primary key
	public function add()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('login/');
		}
		else if(!empty($_GET['name']))
		{
			$this->load->model('monster_model');
			$this->load->model('map_model');
			$this->load->model('item_model');
			$monster_data=array(
				'name' => $_GET['name'],
				'lv' => $_GET['level'],				
				'hp' => $_GET['hp'],				
				'mp' => $_GET['mp'],				
				'atk' => $_GET['atk'],				
				'def' => $_GET['def'],
				'exp' => $_GET['exp'],
			);
			if(!empty($_GET['hauntlist'])) {
				$monster_haunt = array();
				$monster_haunt = explode("\n", trim($_GET['hauntlist']));
				$haunt_id_list = array();
				foreach ($monster_haunt as $row) 
				{
					$haunt = $this->map_model->get_id_by_name($row);
					if($haunt) array_push($haunt_id_list,$haunt);
				}
			}
			
			if(!empty($_GET['trophylist'])){
				$monster_trophy = array();
				$monster_trophy = explode("\n", trim($_GET['trophylist']));
				$trophy_id_list = array();
				foreach ($monster_trophy as $row) 
				{
					$trophy = $this->item_model->get_id_by_name($row);
					if($trophy) array_push($trophy_id_list,$trophy);
				}				
			} 
			$this->db->insert('monster',$monster_data);
			
			$monster_id = $this->monster_model->get_id_by_name($_GET['name']);
			if(!empty($haunt_id_list)){
				foreach ($haunt_id_list as $row){
					$haunt_data = array(
						'monster_id' => $monster_id,
						'map_id' => $row,
					);
					$this->db->insert('monster_haunt',$haunt_data);
				}
			}
			if(!empty($trophy_id_list)){
				foreach ($trophy_id_list as $row){
					$trophy_data = array(
						'monster_id' => $monster_id,
						'item_id' => $row,
					);
					$this->db->insert('monster_trophy',$trophy_data);
				}
			}


			redirect('monster/');

		}
		$this->load->view('monster_add.php');
	}
}

?>
