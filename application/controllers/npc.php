<?php

class Npc extends CI_Controller
{
	public function index()
	{
		if(!empty($_GET['name']))
			$this->db->like('name', $_GET['name']);
		$query=$this->db->get('npc');
		$data = array('data' => $query->result());

		$this->load->view('header.php');
		$this->load->view('npc_list.php', $data);
		$this->load->view('footer.php');
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
		$this->db->select('mission.id as mission_id, mission.name');
		$this->db->from('mission');
		$this->db->join('npc', 'mission.npc_id = npc.id');
		$this->db->where('npc.id',$_GET['id']);		
		$query_mission=$this->db->get();
		$query=array_merge($query_data->result(),$query_location->result(),$query_mission->result());
		$data = array('data' => $query);

		$this->load->view('header.php');
		$this->load->view('npc_view.php', $data);
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
			$this->load->model('npc_model');
			$npc_data=array(
				'name' => $_GET['name'],
				'description' => $_GET['description'],				
				'imgurl' => $_GET['imgurl'],
			);
			if(!empty($_GET['locatelist'])){
				$locate_id_list = array();
				$locate_id_list = $this->npc_model->get_asso($_GET['locatelist'],'map_model');
			} 
			$this->db->insert('npc',$npc_data);
			
			$npc_id = $this->npc_model->get_id_by_name($_GET['name']);
			if(!empty($locate_id_list)){
				foreach ($locate_id_list as $row){
					$locate_data = array(
						'npc_id' => $npc_id,
						'map_id' => $row,
					);
					$this->db->insert('npc_location',$locate_data);
				}
			}

			redirect('npc/');

		}
		$this->load->view('header.php');
		$this->load->view('npc_add.php');
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
			$this->load->model('npc_model');
			$npc_data=array(
				'name' => $_GET['name'],
				'description' => $_GET['description'],				
				'imgurl' => $_GET['imgurl'],
			);
			if(!empty($_GET['locatelist'])){
				$locate_id_list = array();
				$locate_id_list = $this->npc_model->get_asso($_GET['locatelist'],'map_model');
			} 
			$this->db->where('id',$_GET['id']);
			$this->db->update('npc',$npc_data);
			$this->db->where('npc_id',$_GET['id']);
			$this->db->delete('npc_location');			
			if(!empty($locate_id_list)){
				foreach ($locate_id_list as $row){
					$locate_data = array(
						'npc_id' => $_GET['id'],
						'map_id' => $row,
					);
					$this->db->insert('npc_location',$locate_data);
				}
			}


			redirect('firstpage/');

		}

		//這段都是從view複製過來的，用來匯入資料
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
		$data = array('data' => $query);

		$this->load->view('header.php');
		$this->load->view('npc_edit.php', $data);
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
			$this->load->model('npc_model');
			$this->db->where('id',$_GET['id']);
			$this->db->delete('npc');
			$this->db->where('npc_id',$_GET['id']);
			$this->db->delete('npc_location');			
			redirect('firstpage/');
		}
	}

}

?>
