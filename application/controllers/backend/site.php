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
	
	function editar(){
		$id = $this->uri->segment(4,0);
		$data['maquina']= $this->maquinaria_model->getById($id);
		$data['tipos'] = $this->maquinaria_model->getAllTypes();
		$data['marcas'] = $this->maquinaria_model->getAllBrands();
		$data['main_content'] = 'backend/maquinaria/edit';
		$this->load->view('backend/template',$data);
	} 


	function eliminar(){
		$id = $this->uri->segment(4,0);
		if($this->maquinaria_model->delete($id))
			redirect('backend/site');
	}
	
	function getEspecifications(){
		$id = $this->uri->segment(4,0);
		$data['maquina']= $this->maquinaria_model->getById($id)->result();
		foreach($data['maquina'] as $row){
			echo '<b>Especificaciones: </b>'.$row->Especificaciones;
		}
	}

	function vender(){
		
	}

	function imagenes(){
		$id = $this->uri->segment(4,0);
		$data['maquina']= $this->maquinaria_model->getById($id);
		$this->load->model('gallery_model');
		$data['images']= $this->gallery_model->get_images($id);
		// print_r($data['images']);
		$data['id']=$id;
		$data['main_content']='backend/maquinaria/imagenes';
		$this->load->view('backend/template',$data);
	}

	function promover(){
		
	}

	function update(){
		$data = array(
			 'IdMaquina'=> $this->input->post('id'),
			 'Maquina' => $this->input->post('maquina'),
			 'IdMarcas' => $this->input->post('marca'),
			 'IdTipos' => $this->input->post('tipo'),
			 'Modelo' => $this->input->post('modelo'),
			 'Precio' => $this->input->post('precio'),
			 'Especificaciones' => $this->input->post('especificaciones'),
			 'VideoUrl' => $this->input->post('urlVideo')
		 );
		 	$this->maquinaria_model->update($data);

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

			redirect('backend/site');
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