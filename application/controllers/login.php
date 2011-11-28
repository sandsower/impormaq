<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function index(){
		$data['main_content']= 'frontend/login';
		$this->load->view('frontend/template', $data);
	} 

	function validate(){

		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		if($query) // if the user's credentials validated...
		{
			$usuario = $this->membership_model->getUser($this->input->post('username'));
			foreach($usuario as $row){
				$id = $row->IdUsuarios;
				$username = $row->Username;
			}
			$data = array(
				'username' => $username,
				'UserId'=>$id,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('frontend/site');
		}
		else // incorrect username or password
		{
			$this->load->view('home');
		}
	}

	function validateAdmin(){

		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		if($query) // if the user's credentials validated...
		{
			$usuario = $this->membership_model->getUser($this->input->post('username'));
			foreach($usuario as $row){
				$id = $row->IdUsuarios;
				$username = $row->Username;
			}
			$data = array(
				'username' => $username,
				'UserId'=>$id,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('backend/site');
		}
		else // incorrect username or password
		{
			$this->load->view('home');
		}
	}

	function close(){
		$this->session->sess_destroy();
		redirect('home');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */