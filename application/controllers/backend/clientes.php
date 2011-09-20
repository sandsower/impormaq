<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('clientes_model');
	}

	function index(){
		$data = array();
		if($query = $this->clientes_model->getAll())
		{
			$data['records'] = $query;
		}
		$data['main_content'] = 'backend/catalogos/clientes/default';
		$this->load->view('backend/template',$data);
	} 

	function crear(){
		$data['main_content'] = 'backend/catalogos/clientes/new';
		$this->load->view('backend/template',$data);	
	}

	function newClient(){
			$data = array(
			 'Nombres' => $this->input->post('nombre'),
			 'APaterno' => $this->input->post('apellidoPat'),
			 'AMaterno' => $this->input->post('apellidoMat'),
			 'Empresa' => $this->input->post('empresa'),
			 'CorreoElectronico' => $this->input->post('email'),
			 'Oficina' => $this->input->post('oficina'),
			 'Celular' => $this->input->post('celular'),
			 'Radio' => $this->input->post('radio'),
			 'Calle' => $this->input->post('calle'),
			 'NumeroExt' => $this->input->post('numExterno'),
			 'NumeroInt' => $this->input->post('numInterno'),
			 'Colonia' => $this->input->post('colonia'),
			 'CodigoPostal' => $this->input->post('cp'),
			 'Municipio' => $this->input->post('municipio'),
			 'Estado' => $this->input->post('estado'),
			 'Pais' => $this->input->post('pais'),
			 'RFC' => $this->input->post('rfc'),
			 'RazonSocial' => $this->input->post('razonSocial')
		 );
		 
		 //$query = $this->marcas_model->validateExistence($data);
		 //if($query!=null)
		 //	echo 'Marca existente';
		// else{
		 	$this->clientes_model->insert($data);
			redirect('backend/clientes');
		 //}	
	}
	
	function eliminar(){
		$id = $this->uri->segment(4,0);
		if($this->clientes_model->delete($id))
			$this->index();
			// redirect('backend/clientes');
	}

	function editar(){
		$id = $this->uri->segment(4,0);
		$query = $this->clientes_model->getById($id);
		$data['result'] = $query;
		$data['main_content'] = 'backend/catalogos/clientes/edit';
		$this->load->view('backend/template',$data);
	}

	function update(){

		$data = array(
			 'IdClientes' => $this->input->post('id'),
			 'Nombres' => $this->input->post('nombre'),
			 'APaterno' => $this->input->post('apellidoPat'),
			 'AMaterno' => $this->input->post('apellidoMat'),
			 'Empresa' => $this->input->post('empresa'),
			 'CorreoElectronico' => $this->input->post('email'),
			 'Oficina' => $this->input->post('oficina'),
			 'Celular' => $this->input->post('celular'),
			 'Radio' => $this->input->post('radio'),
			 'Calle' => $this->input->post('calle'),
			 'NumeroExt' => $this->input->post('numExterno'),
			 'NumeroInt' => $this->input->post('numInterno'),
			 'Colonia' => $this->input->post('colonia'),
			 'CodigoPostal' => $this->input->post('cp'),
			 'Municipio' => $this->input->post('municipio'),
			 'Estado' => $this->input->post('estado'),
			 'Pais' => $this->input->post('pais'),
			 'RFC' => $this->input->post('rfc'),
			 'RazonSocial' => $this->input->post('razonSocial')
		 );
		 
		 //$query = $this->marcas_model->validateExistence($data);
		 //if($query!=null)
		 //	echo 'Marca existente';
		// else{
		 	$this->clientes_model->update($data);
			redirect('backend/clientes');
		 //}	
	}

	function Domicilio(){
		$id = $this->uri->segment(4,0);
		$query = $this->clientes_model->getById($id);
		foreach($query->result() as $row) {
			echo '<p><b>Domicilio:</b> '.$row->Calle;
			echo ' #'.$row->NumeroExt;
			echo ' <b>Interior:</b> '.$row->NumeroInt;
			echo ' <br/><b>C.P.:</b>'.$row->CodigoPostal;
			echo ', <b>Colonia:</b> '.$row->Colonia;
			echo ', '.$row->Municipio;
			echo ', '.$row->Estado;
			echo ', '.$row->Pais.'.</p>';
		}
	}

	function DatosFiscales(){
		$id = $this->uri->segment(4,0);
		$query = $this->clientes_model->getById($id);
		foreach($query->result() as $row) {
			echo '<p><b>RFC:</b> '.$row->RFC;
			echo '<br/><b>Razon Social:</b> '.$row->RazonSocial.'</p>';
			
		}

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
