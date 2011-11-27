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
		$data['areas'] = $this->contenidos_model->getAllAreas();
		$this->load->view('backend/template',$data);
	}

	function obtainInfo()
	{
		$info = $this->contenidos_model->getAllByArea($this->input->post('area'));
		echo json_encode($info);
	}

	function obtainContent()
	{
		$info = $this->contenidos_model->getById($this->input->post('id'));
		echo json_encode($info);
	}

	function modify(){
		$data = array(
				'IdContenido' => $this->input->post('id'),
				'Titulo' => $this->input->post('titulo'),
				'Texto' => $this->input->post('texto'),
				'Area' => $this->input->post('area')
			);
		if($this->contenidos_model->update($data))
			echo json_encode("Success");
	}

	function create(){
		$data = array(
				'Titulo' => $this->input->post('titulo'),
				'Texto' => $this->input->post('texto'),
				'Area' => $this->input->post('area')
			);
		if($this->contenidos_model->insert($data))
			echo json_encode("Success");
	}

	function delete(){
		$id = $this->input->post('id');
		if($this->contenidos_model->delete($id))
			echo json_encode("Success");
	}
}
