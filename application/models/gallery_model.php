<?php

class Gallery_model extends CI_Model {

	function insert($data){
		$this->db->insert('Imagenes', $data);
	}

	function get_images($id) {
		$query = $this->db->get_where('Imagenes', array('IdMaquina' => $id));
		return $query;
	}
	function delete($id){
		return $this->db->delete('Imagenes', array('IdImagenes' => $id));
	}
	function getById($id){
		$query = $this->db->get_where('Imagenes', array('IdImagenes' => $id));
		return $query;
	}

	
	
	

	
	
	

	
}