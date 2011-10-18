<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('maquinaria_model');
		$this->load->model('promociones_model');
		$this->load->model('tipos_model');
		$this->load->model('marcas_model');
	}

	function index(){
		$data['marcas'] = $this->marcas_model->getAll();
		$data['tipos'] = $this->tipos_model->getAll();
		$data['promociones'] = $this->promociones_model->getAll();
		$data['main_content'] = 'frontend/site';
		$this->load->view('frontend/template',$data);
	}

	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="'.base_url().'">Login</a>';		
			die();		
		}		
	}
}