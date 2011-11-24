<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('maquinaria_model');
		$this->load->model('promociones_model');
		$this->load->model('tipos_model');
		$this->load->model('marcas_model');
		$this->load->model('gallery_model');
	}

	function index(){
		$data['marcas'] = $this->marcas_model->getAll();
		$data['tipos'] = $this->tipos_model->getAll();
		$data['promociones'] = $this->promociones_model->getAll();
		$maquinas =$this->maquinaria_model->getAllWithImages();
		$data['maquinas'] = $maquinas;
		$data["popups"] = $this->popupsInfo($maquinas);
		
		$data['main_content'] = 'frontend/site';
		$this->load->view('frontend/template',$data);
	}
	function product(){
		$data['main_content'] = 'frontend/product';
		$this->load->view('frontend/temp',$data);
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
	
	function popupsInfo($maquinas)
	{
		for ($i = 0;$i < sizeof($maquinas); ++$i)
		{
			
			$id = $maquinas[$i]->IdMaquina;
			$maquina = $this->maquinaria_model->getById($id)->result();
			$mainimage = $this->gallery_model->get_mainImage($id);
			$popups[$i] = array(
						"maquina" => $maquina[0],
						"detail" => $this->gallery_model->get_images($id)->result(),
						"main" =>  $mainimage[0]
						);
		}
		return $popups;
	}
	
	function reporte()
	{		
		
		$id = $this->uri->segment(3,0);
		$maquina = $this->maquinaria_model->getById($id)->result();
		$mainimage = $this->gallery_model->get_mainImage($id);
		$data['main'] =   $mainimage[0];
		$data['detail'] =  $this->gallery_model->get_images($id)->result();
		$data['maquina']= $maquina[0];
		$data['main_content'] = '/frontend/reporte';
		$this->load->view('frontend/template',$data);
	}
}