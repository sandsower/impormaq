<?php

class Contenidos_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }
    
	function getAll(){
		$query = $this->db->get('contenidos');
		return $query->result();
	}

	function update($data){
		$this->db->where('IdContenidos', 1);
		return $this->db->update('contenidos', $data);	
	}
}
