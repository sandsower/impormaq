<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipos extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('tipos_model');
		$this->load->library('session');
		$this->load->library('cart');
	}
	
	function index(){
		$data = array();
		if($query = $this->tipos_model->getAll())
		{
			$data['records'] = $query;
		}

		$data['main_content'] = 'backend/catalogos/tipos/default';
		$this->load->view('backend/template',$data);

	} 

	function crear(){
		
		$data = array(
			 'Tipo' => $this->input->post('tipo'),
			 'Type' => $this->input->post('type')
		 );
		 
		 $query = $this->tipos_model->validateExistence($data);

		 if($query!=null)
		 	echo 'Tipo existente';
		 else{
		 	$this->tipos_model->insert($data);
		 	$message = 'Tipo creada exitosamente';
			redirect('backend/tipos');
		 }	
	}

	function eliminar(){
		$id = $this->uri->segment(4,0);
		if($this->tipos_model->delete($id))
			redirect('backend/Tipos');
	}
	function editar(){
		 $data = array(
			'IdTipos'=>$id = $this->uri->segment(4,0),
			'Tipo' => $Tipo = $this->uri->segment(5,0),
			'Type' => $type = $this->uri->segment(6,0)
		  );
		  echo "<form method='post' action='tipos/actualizar' id='formItem'>";
		  echo "<fieldset><legend>Editar Tipo</legend>";
		  echo "<input type='hidden' value=".$data['IdTipos']." name='id' />";
		  echo "<table>";
		  echo "<tr>";
		  echo "<td><label class='left'>Marca:</label></td>"; 
		  echo "<td><input type='text' name='tipo' value=".$data['Tipo']." class='validate'/></td>";
		  echo "</tr><tr>";
		  echo "<td><label class='left'>Brand:</label>"; 
		  echo "<td><input type='text' name='type' value=".$data['Type']." class='validate'/></td></tr>";
		  echo "<tr style='display:none;'><td></td><td><button style='display:hidden;'>Enviar</button></td></tr>";
		  echo "</table></fieldset>";
		  echo "</form>";
		
		// $this->tipos_model->update($data);
	}
	function actualizar(){
		$data = array(
			'IdTipos'=>$this->input->post('id'),
			'Tipo' => $this->input->post('tipo'),
			'Type' => $this->input->post('type')
		  );
		  if($this->tipos_model->update($data))
			redirect('backend/Tipos');
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

/* End of file tipos.php */
/* Location: ./application/controllers/backend/tipos.php */