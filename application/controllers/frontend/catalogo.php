<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalogo extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('tipos_model');
		$this->load->model('marcas_model');
		$this->load->model('maquinaria_model');
	}

	function index(){
		//echo 'frontned';
		$data['main_content'] = 'frontend/catalogo';
		$data['brands'] = $this->marcas_model->getAll();
		$data['types'] = $this->tipos_model->getAll();
		$maquinas = $this->maquinaria_model->getAllWithImages();
		$data["maquinas"] = $maquinas;
		$this->load->view('frontend/template',$data);
	}

	function showCategory()
	{
		$id = $this->uri->segment(4,0);
		$maquinas = $this->maquinaria_model->getByIdTipo($id);
		$data["maquinas"] = $maquinas;
		$data["brands"] = $this->marcas_model->getAll();
		$data["types"] = $this->tipos_model->getAll();
		$data['main_content'] = 'frontend/catalogo';
		$this->load->view('frontend/template',$data);
		
	}
	function search()
	{
		$precio = $this->input->post('precio');
		$tipo = $this->input->post('tipo');
		$marca = $this->input->post('marca');
		$maquinas = $this->buscarMaquinaria($precio,$marca,$tipo);
		$data["maquinas"] = $maquinas;
		$data["brands"] = $this->marcas_model->getAll();
		$data["types"] = $this->tipos_model->getAll();
		$data['main_content'] = 'frontend/catalogo';
		$this->load->view('frontend/template',$data);
	
	}
	
	function buscarMaquinaria($precio,$marca,$tipo)
	{
		if($precio > 0 && $marca == 0 && $tipo == 0 )
		{
			
			return $this->maquinaria_model->getByPrice($precio);
			
		}else if($precio == 0 && $marca > 0 && $tipo == 0 )
		{
			return $this->maquinaria_model->getByIdMarca($marca);
		}else if($precio == 0 && $marca == 0 && $tipo > 0 )
		{
			return $this->maquinaria_model->getByIdTipo($tipo);
		}else if($precio > 0 && $marca == 0 && $tipo > 0 )
		{
			return $this->maquinaria_model->getByIdTipoPrecio($tipo,$precio);
			
		}
		else if($precio > 0 && $marca > 0 && $tipo == 0 )
		{
			return $this->maquinaria_model->getByIdMarcaPrecio($marca,$precio);
		}
		else if($precio == 0 && $marca > 0 && $tipo > 0 )
		{
			
			return $this->maquinaria_model->getByIdTipoIdMarca($marca,$tipo);
			
		}else if($precio > 0 && $marca > 0 && $tipo > 0 )
		{
			return $this->maquinaria_model->getByIdTipoIdMarcaPrecio($precio,$marca,$Tipo);
		}else
		{
			return null;
		
		}
	
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