<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actividad extends CI_Controller {

	function __construct(){
		$this->load->library('session');
		$this->load->library('cart');
	}

	function index(){
		
		$data['main_content'] = 'backend/modulos/actividad/default';
		$this->load->view('backend/template',$data);
	} 
}
