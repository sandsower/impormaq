<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Multiple extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}
	
	function index(){
		$data['main_content'] = 'backend/reportes/multiple/default';
		$this->load->view('backend/template',$data);
	} 

	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="'.base_url().'">Login</a>';		
			die();		
			//$this->load->view('login_form');
		}		
	}



	
}

/* End of file marcas.php */
/* Location: ./application/controllers/backend/catalogos/marcas.php */