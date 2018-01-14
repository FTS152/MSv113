<?php
class map extends CI_Controller
{
	public function index()
	{
		if(!empty($_GET['name'])) $this->db->like('name',$_GET['name']);
		if(!empty($_GET['area'])) $this->db->like('area',$_GET['area']);
		$query=$this->db->get('map');
		$data = array('data' => $query->result());

		$this->load->view('header.php');
		$this->load->view('map_list.php', $data);
		$this->load->view('footer.php');
		
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
		$query_map=$this->db->get();
		$query = array_merge($query_data->result(),$query_npc->result(),$query_map->result());
		$data = array('data' => $query);
		// echo var_dump($query);
		$this->load->view('header.php');
		$this->load->view('map_view.php', $data);
		$this->load->view('footer.php');
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
			$this->load->model('map_model');
			$map_data=array(
				'name' => $_GET['name'],
				'area' => $_GET['area'],				
			);
			if(!empty($_GET['hauntlist'])) {
				$haunt_id_list = array();
				$haunt_id_list = $this->map_model->get_asso($_GET['hauntlist'],'monster_model');
			}
			
			if(!empty($_GET['locatelist'])){
				$locate_id_list = array();
				$locate_id_list = $this->map_model->get_asso($_GET['locatelist'],'npc_model');
			} 
			$this->db->insert('map',$map_data);
			
			$map_id = $this->map_model->get_id_by_name($_GET['name']);
			if(!empty($haunt_id_list)){
				foreach ($haunt_id_list as $row){
					$haunt_data = array(
						'map_id' => $map_id,
						'monster_id' => $row,
					);
					$this->db->insert('monster_haunt',$haunt_data);
				}
			}
			if(!empty($locate_id_list)){
				foreach ($locate_id_list as $row){
					$locate_data = array(
						'map_id' => $map_id,
						'npc_id' => $row,
					);
					$this->db->insert('npc_location',$trophy_data);
				}
			}


			redirect('map/');

		}
		$this->load->view('header.php');
		$this->load->view('map_add.php');
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
			$this->load->model('map_model');
			$map_data=array(
				'name' => $_GET['name'],
				'area' => $_GET['area'],				
			);
			if(!empty($_GET['hauntlist'])) {
				$haunt_id_list = array();
				$haunt_id_list = $this->map_model->get_asso($_GET['hauntlist'],'monster_model');
			}
			
			if(!empty($_GET['locatelist'])){
				$locate_id_list = array();
				$locate_id_list = $this->map_model->get_asso($_GET['locatelist'],'npc_model');
			} 
			$this->db->where('id',$_GET['id']);
			$this->db->update('map',$map_data);
			$this->db->where('map_id',$_GET['id']);
			$this->db->delete('monster_haunt');			
			$this->db->where('map_id',$_GET['id']);
			$this->db->delete('npc_location');
			if(!empty($haunt_id_list)){
				foreach ($haunt_id_list as $row){
					$haunt_data = array(
						'map_id' => $_GET['id'],
						'monster_id' => $row,
					);
					$this->db->insert('monster_haunt',$haunt_data);
				}
			}
			if(!empty($locate_id_list)){
				foreach ($locate_id_list as $row){
					$locate_data = array(
						'map_id' => $_GET['id'],
						'npc_id' => $row,
					);
					$this->db->insert('npc_location',$locate_data);
				}
			}


			redirect('map/');

		}
		//這段都是從view複製過來的，用來匯入資料
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
		$query_map=$this->db->get();
		$query = array_merge($query_data->result(),$query_npc->result(),$query_map->result());
		$data = array('data' => $query);

		$this->load->view('header.php');
		$this->load->view('map_edit.php', $data);
		$this->load->view('footer.php');
	}

	public function delete()
	{
		if(!$this->session->userdata('username'))
		{
			redirect('login/');
		}
		else 
		{
			$this->load->model('map_model');
			$this->db->where('id',$_GET['id']);
			$this->db->delete('map');
			$this->db->where('map_id',$_GET['id']);
			$this->db->delete('monster_haunt');			
			$this->db->where('map_id',$_GET['id']);
			$this->db->delete('npc_location');
			redirect('map/');
		}
	}
}

?>
