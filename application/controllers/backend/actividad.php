<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actividad extends CI_Controller {
	function index(){
		
		$data['main_content'] = 'backend/modulos/actividad/default';
		$this->load->view('backend/template',$data);
	} 
}
