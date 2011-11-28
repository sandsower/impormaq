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
	
	function do_upload()
	{
	   $id = $this->input->post('type');
		$uploadPath = 'img/frontend/contenido';
		
		switch($id){
		   case 1:
		      $name = 'logo.jpg';
		      break;
		   case 2:
		      $name = 'imgizq.jpg';
		      break;
		   case 3:
		      $name = 'imgder.jpg';
		      break;
		   case 4:
		      $name = 'imgcen.jpg';
		      break;
		}
		
		if(file_exists($uploadPath.'/'.$name))
   		unlink($uploadPath.'/'.$name);
		
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '2000';
		$config['max_height']  = '1400';
      
      
      $this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}
		else
		{
			$data['upload_data'] =  $this->upload->data();												//Sube la imagen
			rename('img/frontend/contenido/'.$data['upload_data']['file_name'], 'img/frontend/contenido/'.$name);
			$this->index();
		}
	}

}
