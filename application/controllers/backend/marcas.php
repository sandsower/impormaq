<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marcas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('marcas_model');
		$this->load->library('session');
		$this->load->library('cart');
	}
	
	function index(){
		$data = array();
		if($query = $this->marcas_model->getAll())
		{
			$data['records'] = $query;
		}
		$data['main_content'] = 'backend/catalogos/marcas/default';
		$this->load->view('backend/template',$data);

	} 

	function crear(){
		$data = array(
			 'Marca' => $this->input->post('marca')		 );
		 
		 $query = $this->marcas_model->validateExistence($data);

		 if($query!=null)
		 	echo 'Marca existente';
		 else{
		 	$this->marcas_model->insert($data);
		 	$message = 'Marca creada exitosamente';
			redirect('backend/marcas');
		 }	
	}

	function eliminar(){
		$id = $this->uri->segment(4,0);
		if($this->marcas_model->delete($id))
			redirect('backend/marcas');
	}
	
	function editar(){
		 $data = array(
			'IdMarca'=>$id = $this->uri->segment(4,0),
			'Marca' => $marca = $this->uri->segment(5,0)		  );
		  echo "<form method='post' action='marcas/actualizar' id='formItem'>";
		  echo "<fieldset><legend>Editar Marca</legend>";
		  echo "<input type='hidden' value=".$data['IdMarca']." name='id' />";
		  echo "<table>";
		  echo "<tr>";
		  echo "<td><label class='left'>Marca:</label></td>"; 
		  echo "<td><input type='text' name='marca' value=".$data['Marca']." class='validate'/></td>";
		  echo "</tr>";
		  echo "<tr style='display:none;'><td></td><td><button style='display:hidden;'>Enviar</button></td></tr>";
		  echo "</table></fieldset>";
		  echo "</form>";
		  
		
		// $this->marcas_model->update($data);
	}
	function actualizar(){
		$data = array(
			'IdMarca'=>$this->input->post('id'),
			'Marca' => $this->input->post('marca'),
			'Brand' => $this->input->post('brand')
		  );
		  if($this->marcas_model->update($data))
			redirect('backend/marcas');
		  else 
		  	echo 'error';	

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

/* End of file marcas.php */
/* Location: ./application/controllers/backend/catalogos/marcas.php */