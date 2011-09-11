<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {

	

	function index(){
		
		$data['main_content'] = 'backend/catalogos/clientes/default';
		$this->load->view('backend/template',$data);
	} 

	

	
}
