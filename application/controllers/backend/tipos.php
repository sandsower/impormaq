<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipos extends CI_Controller {

	
	function index(){
		$data['main_content'] = 'backend/catalogos/tipos/default';
		$this->load->view('backend/template',$data);
	} 

	

	
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */