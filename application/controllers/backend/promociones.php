<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promociones extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('promociones_model');
		$this->load->library('session');
		$this->load->library('cart');
	}
	
	function index(){
		$data['promociones'] =$this->promociones_model->getAll();
		//print_r($data['promociones']);
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
			'TituloPromocional' => $this->input->post('TituloPromocional'),
			'PrecioPromocional' => $this->input->post('PrecioPromocional')	
		);
		$this->promociones_model->insert($data);
		$this->promociones_model->turnPromoOn($this->input->post('idMaquina'));
		redirect('backend/promociones');
	}

	function eliminar(){
		$id = $this->uri->segment(4,0);
		$promo = $this->promociones_model->getById($id);
		$IdMachine = $promo[0]->IdMaquina;
		$IdImagenes = $promo[0]->IdImagenes;
		$this->load->model('gallery_model');
		$image = $this->gallery_model->getById($IdImagenes)->result();

		
		if($this->promociones_model->delete($id)){
			$this->promociones_model->turnPromoOff($IdMachine);
			$this->gallery_model->delete($IdImagenes);
			unlink($image[0]->full_path);
			redirect('backend/promociones');
		}
	}

	function editar(){
		$id = $this->uri->segment(4,0);
		echo $id;
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
		foreach ($query as $row) {
			echo '<img src="'.base_url().'images/'.$id.'/'.$row->file_name.'"/>';
		}
		
	}

}

/* End of file marcas.php */
/* Location: ./application/controllers/backend/catalogos/marcas.php */