<?php

class Contenidos_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }
    
	function getAll(){
		$query = $this->db->get('contenido');
		return $query->result();
	}

	function update($data){
		$this->db->where('IdContenido', 1);
		return $this->db->update('contenido', $data);	
	}
}