<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nosotros extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('contenidos_model');
	}

	function index(){
		//echo 'frontned';
		$data['main_content'] = 'frontend/nosotros';
		$result = $this->contenidos_model->getAll();
		$data['mision']= $result[0]->Mision;
		$data['vision']= $result[0]->Vision;
		$data['politicas']= $result[0]->Politicas;
		$data['nosotros']= $result[0]->Nosotros;
		$data['objetivo']= $result[0]->Objetivo;
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