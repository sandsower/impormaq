<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->gallery_path = realpath(APPPATH . '../images');
		$this->gallery_path_url = base_url().'images/';
		$this->load->model('gallery_model');
	}

	function index()
	{
		
	}

	function do_upload()
	{
		$data['id']=$this->input->post('id');
		 // $id = $data['id'].'/';
		$uploadPath = $this->gallery_path=$this->gallery_path .'/'.  $data['id'].'/';
		// echo $uploadPath;
		if(!file_exists($uploadPath)){
			mkdir($uploadPath,0750,true);
			mkdir($uploadPath.'thumbs/',0750,true);	
			mkdir($uploadPath.'promo/',0750,true);	
		}
		
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
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
			$data['upload_data']['idMaquina']= $data['id'];
			$data['upload_data']['promo']= false;

			$this->gallery_model->insert($data['upload_data']);											//registra la imagen en la bd
			$config = array(																			
				'source_image' => $data['upload_data']['full_path'],
				'new_image' => $uploadPath. 'thumbs',
				'maintain_ration' => true,
				'width' => 150,
				'height' => 100
			);
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();																	//crea thumbnail
			$data['images'] = $this->gallery_model->get_images($data['id']);	
			$data['main_content'] = 'backend/maquinaria/imagenes';
			$this->load->view('backend/template',$data);
			
		}
	}

	function delete(){
		$id= $this->uri->segment(3,0);
		$imagen = $this->gallery_model->getById($id);
		//print_r($imagen);
			foreach($imagen->result() as $row){
				if($this->gallery_model->delete($id)){	
					 unlink($row->full_path);
					 unlink($row->file_path.'thumbs/'.$row->file_name);
					 $idMaquina = $row->idMaquina;	
			 }	
		}
		redirect('backend/site/imagenes/'.$idMaquina);
	}
}
?>