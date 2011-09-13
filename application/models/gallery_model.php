<?php

class Gallery_model extends CI_Model {

	var $gallery_path;
	var $gallery_path_url;
	
	function __construct(){
		 parent::__construct();
		
		$this->gallery_path = realpath(APPPATH . '../images');
		$this->gallery_path_url = base_url().'images/';
	}
	
	function doUpload() {
		
		echo $this->gallery_path.'<br/>';
		echo $this->gallery_path_url.'<br/>';
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 2000
		);
		
		$this->load->library('upload', $config);
		$this->upload->do_upload();
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
		echo 'doupload';
		
	}

	function do_upload()
	{
		$config['upload_path'] = $this->gallery_path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '40000';
		$config['max_width']  = '1400';
		$config['max_height']  = '1024';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			print_r($error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			echo 'success';
		}
	}
	
	function get_images() {
		
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'thumbs'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
			);
		}
		
		return $images;
	}

	
}