<?php

class Gallery_model extends CI_Model {

	function insert($data){
		$this->db->insert('imagenes', $data);
	}

	function get_images($id) {
		$query = $this->db->get_where('imagenes', array('IdMaquina' => $id,'promo'=>false));
		return $query;
	}
	function get_imagesPromo($id) {
		$query = $this->db->get_where('imagenes', array('IdMaquina' => $id,'promo'=>true));
		return $query;
	}
	function delete($id){
		return $this->db->delete('imagenes', array('IdImagenes' => $id));
	}
	function getById($id){
		$query = $this->db->get_where('imagenes', array('IdImagenes' => $id));
		return $query;
	}
}