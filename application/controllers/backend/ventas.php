<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ventas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('maquinaria_model');
		$this->load->model('ventas_model');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('cart');
		$this->load->helper('date');
	}
	
	function index(){
		$data['main_content'] = 'backend/modulos/ventas/default';
		$this->load->model('clientes_model');
		$info = array();
		$result = $this->clientes_model->getAll();
		foreach($result as $item)
		{
			$info[$item->IdClientes] = $item->Nombres . " " . $item->APaterno . " " . $item->AMaterno;
		}
		$data['maquinas'] = $this->cart->contents();
		$data['clientes'] = $info;
		print_r($data['clientes']);
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

	function agregar($id){
	$this->load->model('promociones_model');
	
	$info = $this->maquinaria_model->getById($id)->result();
	$costo = $info[0]->Precio;
	if($info[0]->promo == 1)
	{
		$costo = $this->promociones_model->getPromoMachine($id);
		$costo = $costo[0]->PrecioPromocional;
	}
		$data = array(
			'id' => $id,
			'name' => $info[0]->Maquina,
			'qty' => 1,
			'price' => $costo
			);
		$this->cart->insert($data);
		redirect('backend/site');
	}

	function vaciarCarro(){
		$this->cart->destroy();
		redirect('backend/site');
	}

	function eliminar($id){
		$data = array(
			'rowid' => $id,
			'qty' => 0
			);
		$this->cart->update($data);
			
		redirect('backend/ventas');
	}

	function completar(){
		$query = $this->maquinaria_model->getAll();
		foreach($query as $item)
		{
			if(isset($_POST[$item->IdMaquina]))
			{
				if(isset($_POST['cliente']))
				{
					$price = $_POST[$item->IdMaquina];
					$data = array(
						'IdMaquina' => $item->IdMaquina,
						'venta' => 1
						);
					$this->maquinaria_model->update($data);
					$cliente = $_POST['cliente'];
					$fecha = date('Y-m-d');
					$userID = $this->session->userdata('UserId');
					$data = array(
						'Fecha' => $fecha,
						'Monto' => $price,
						'IdMaquina' => $item->IdMaquina,
						'IdClientes' => $cliente,
						'IdUsuarios' => $userID
						);
					$this->ventas_model->insert($data);
				}
			}
		}
		$this->cart->destroy();
		redirect('backend/site');
	}
		
}

/* End of file marcas.php */
/* Location: ./application/controllers/backend/catalogos/marcas.php */