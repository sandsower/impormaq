<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contenido extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('cart');
		$this->load->model('contenidos_model');
	}

	function index(){
		$data['main_content'] = 'backend/modulos/contenido/default';
		$result = $this->contenidos_model->getAll();
		$data['mision']= $result[0]->Mision;
		$data['vision']= $result[0]->Vision;
		$data['politicas']= $result[0]->Politicas;
		$data['nosotros']= $result[0]->Nosotros;
		$data['objetivo']= $result[0]->Objetivo;
		$this->load->view('backend/template',$data);
	}

	function modify(){
		$data = array(
				'Mision' => $this->input->post('mision'),
				'Vision' => $this->input->post('vision'),
				'Politicas' => $this->input->post('politicas'),
				'Nosotros' => $this->input->post('nosotros'),
				'Objetivo' => $this->input->post('objetivo')
			);
		if($this->contenidos_model->update($data))
			redirect('backend/Contenido');
	}
}
