<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nosotros extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('contenidos_model');
	}

	function index(){
		//echo 'frontned';
		$data['main_content'] = 'frontend/nosotros';
		$result = $this->contenidos_model->getAllByArea(1);
		$data['contenido']= $result;
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