<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marcas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}
	
	function index(){
		$data['main_content'] = 'backend/catalogos/marcas/default';
		$this->load->view('backend/template',$data);
	} 

	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="<?php echo base_url();">Login</a>';	
			die();		
			//$this->load->view('login_form');
		}		
	}



	
}

/* End of file marcas.php */
/* Location: ./application/controllers/backend/catalogos/marcas.php */