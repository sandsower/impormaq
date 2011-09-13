<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('maquinaria_model');
	}
	
	function index(){
		$data['tipos'] = $this->maquinaria_model->getAllTypes();
		//print_r($data['tipos']);
		$data['marcas'] = $this->maquinaria_model->getAllBrands();
		//print_r($data['marcas']);
		$data['maquinas'] =$this->maquinaria_model->getAll();
		$data['main_content'] = 'backend/dashboard';
		$this->load->view('backend/template',$data);
	}

	function crear(){
		$data['tipos'] = $this->maquinaria_model->getAllTypes();
		$data['marcas'] = $this->maquinaria_model->getAllBrands();
		$data['maquinas'] =$this->maquinaria_model->getAll();
		$data['main_content'] = 'backend/maquinaria/new';
		$this->load->view('backend/template',$data);
	} 

	function eliminar(){
		$id = $this->uri->segment(4,0);
		if($this->maquinaria_model->delete($id))
			redirect('backend/site');
	}
	function newMachine(){
		
		$data = array(
			 'Maquina' => $this->input->post('maquina'),
			 'IdMarcas' => $this->input->post('marca'),
			 'IdTipos' => $this->input->post('tipo'),
			 'Modelo' => $this->input->post('modelo'),
			 'Precio' => $this->input->post('precio'),
			 'Especificaciones' => $this->input->post('especificaciones'),
			 'VideoUrl' => $this->input->post('urlVideo')
		 );
		 	$this->maquinaria_model->insert($data);
		 	
			$this->index();
		 
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

/* End of file site.php */
/* Location: ./application/controllers/site.php */