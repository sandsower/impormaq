<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('maquinaria_model');
		$this->load->library('session');
		$this->load->library('cart');
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

	//abre la vista para llenar los datos de una maquina nueva
	function crear(){
		$data['tipos'] = $this->maquinaria_model->getAllTypes();
		$data['marcas'] = $this->maquinaria_model->getAllBrands();
		$data['maquinas'] =$this->maquinaria_model->getAll();
		$data['main_content'] = 'backend/maquinaria/new';
		$this->load->view('backend/template',$data);
	} 

	//abre la vista para editar los valores de una maquina
	function editar(){
		$id = $this->uri->segment(4,0);
		$data['maquina']= $this->maquinaria_model->getById($id);
		$data['tipos'] = $this->maquinaria_model->getAllTypes();
		$data['marcas'] = $this->maquinaria_model->getAllBrands();
		$data['main_content'] = 'backend/maquinaria/edit';
		$this->load->view('backend/template',$data);
	} 

	//elimina una maquina de la base de datos
	function eliminar(){
		$id = $this->uri->segment(4,0);
		$this->load->model('gallery_model');
		$this->load->model('promociones_model');
		
		if($this->maquinaria_model->delete($id))
			redirect('backend/site');
	}
	//obtiene las especificaciones de una maquina y las imprime en un popup
	function getEspecifications(){
		$id = $this->uri->segment(4,0);
		$data['maquina']= $this->maquinaria_model->getById($id)->result();
		foreach($data['maquina'] as $row){
			echo '<b>Especificaciones: </b>'.$row->Especificaciones;
		}
	}

	//Abre la vista vender
	function vender(){
		
	}

	//abre la vista que permite añadir imagenes a una maquina
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

	//Abre la vista Promoveer
	function promote(){
		$id = $this->uri->segment(4,0);
		$data['main_content']='backend/maquinaria/promover';
		$this->load->model('gallery_model');
		$data['images'] = $this->gallery_model->get_imagesPromo($id);			
		$data['maquina']= $this->maquinaria_model->getById($id);
		$this->load->view('backend/template',$data);
	}

	//Esta funcion me permite subir la imagen que sera utilizada para las promociones
	function do_upload()
	{
		$data['id']=$this->input->post('id');
		$this->load->model('gallery_model');									
		$data['images'] = $this->gallery_model->get_imagesPromo($data['id']);	
		if($data['images']->num_rows>0){
			echo 'Esta promocion ya tiene una imagen';
		}
		else{
			$this->gallery_path = realpath(APPPATH . '../images');
			$uploadPath = $this->gallery_path=$this->gallery_path .'/'.  $data['id'].'/promo/';
			// echo $uploadPath;
			if(!file_exists($uploadPath)){
				mkdir($uploadPath,0750,true);
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
				$data['upload_data'] =  $this->upload->data();	
				$data['upload_data']['idMaquina']= $data['id'];
				$data['upload_data']['promo']= true;	
				$this->gallery_model->insert($data['upload_data']);
				$data['images'] = $this->gallery_model->get_imagesPromo($data['id']);
				$data['main_content'] = 'backend/maquinaria/promover';
				$this->load->view('backend/template',$data);
			}
		}	
	}	
		
	//update the fields in the database
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

	//Metodo para crear una nueva maquina en la base de datos
	function newMachine(){
		
		$data = array(
			'Maquina' => $this->input->post('maquina'),
			'IdMarcas' => $this->input->post('marca'),
			'IdTipos' => $this->input->post('tipo'),
			'Modelo' => $this->input->post('modelo'),
			'Precio' => $this->input->post('precio'),
			'Especificaciones' => $this->input->post('especificaciones'),
			'VideoUrl' => $this->input->post('urlVideo'),
			'promo'=>false,
			'venta'=>false
		);
		 	$this->maquinaria_model->insert($data);
			redirect('backend/site');
	}

	//Validate if the usser is logged in
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

/* End of file site.php */
/* Location: ./application/controllers/site.php */