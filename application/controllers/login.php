<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function index(){
	} 

	function validate(){

		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
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
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */