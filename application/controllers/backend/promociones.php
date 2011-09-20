<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promociones extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('promociones_model');
	}
	
	function index(){
		$data['promociones'] =$this->promociones_model->getAll();
		$data['main_content'] = 'backend/modulos/promociones/default';
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
	function crear(){
		$data = array(
			'IdImagenes' => $this->input->post('IdImagenes'),
			'IdMaquina' => $this->input->post('idMaquina'),
			'IdUsuarios' => $this->input->post('idUser'),
			'TextoPromocional' => $this->input->post('TextoPromocional'),
			'PrecioPromocional' => $this->input->post('PrecioPromocional')	
		);
		print_r($data);
		$this->promociones_model->insert($data);
		//$this->promociones_model->turnPromo($this->input->post('idMaquina'));
		//redirect('backend/site');
	}

	function Maquina(){
		$id = $this->uri->segment(4,0);
		$query = $this->promociones_model->getMachineById($id);
		foreach($query as $row){
			echo '<b>Maquina: </b>'.$row->Maquina;
			echo '<b> Marca: </b>'.$row->Marca;
			echo '<b> Tipo: </b>'.$row->Tipo;
			echo '<b> Modelo: </b>'.$row->Modelo;
			echo '<br/>';
			echo '<b> Especificaciones: </b>'.$row->Especificaciones;
			echo '<br/>';
			echo '<img src=""/>';
		}
	}

	function textoPromocional(){
		$id = $this->uri->segment(4,0);
		$query = $this->promociones_model->getById($id);
		foreach($query as $row){
			echo $row->TextoPromocional;
		}
	}
	
	function fotos(){
		$id = $this->uri->segment(4,0);
		$this->load->model('gallery_model');
		$query = $this->gallery_model->get_images($id)->result();
		print_r($query);
	}

}

/* End of file marcas.php */
/* Location: ./application/controllers/backend/catalogos/marcas.php */