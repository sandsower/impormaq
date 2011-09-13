<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->gallery_path = realpath(APPPATH . '../images');
		$this->gallery_path_url = base_url().'images/';
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = $this->gallery_path = realpath(APPPATH . '../images');;
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
			$data = array('upload_data' => $this->upload->data());
			$image_data = $this->upload->data();
		
			$config = array(
				'source_image' => $image_data['full_path'],
				'new_image' => $this->gallery_path . '/thumbs',
				'maintain_ration' => true,
				'width' => 150,
				'height' => 100
			);
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
		}
	}
}
?>