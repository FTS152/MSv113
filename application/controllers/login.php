<?php
class Login extends CI_Controller
{
	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('login.php');
		$this->load->view('footer.php');
		if(!empty($_GET['username'])||!empty($_GET['password'])){
			if($_GET['username']!="admin" || $_GET['password']!="1234"){
				echo "<script>alert('Failed! Please check your account and password again!')</script>";
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