<?php
class Login extends CI_Controller
{
	public function index()
	{
		$this->load->view('login.php');
		if(!empty($_GET['username'])||!empty($_GET['password'])){
			if($_GET['username']!="admin" || $_GET['password']!="1234"){
				echo json_encode(array('msg' => 'login failed!'));
			}
			else{
				$this->session->set_userdata('username', $_GET['username']);
				$this->session->set_userdata('password', $_GET['password']);
				redirect('/');
			}
		}
	}

	public function logout()
	{

		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		redirect('/');
	}


}

?>