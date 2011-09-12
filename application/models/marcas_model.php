<?php

class Marcas_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }
    
	function getAll(){
		$query = $this->db->get('Marcas');
		return $query->result();
	}

	function insert($data){
		$this->db->insert('Marcas', $data);
	}

	function delete($id){
		return $this->db->delete('Marcas', array('IdMarca' => $id));
	}

	function update($data){
		$this->db->where('IdMarca', $data['IdMarca']);
		return $this->db->update('Marcas', $data);	
	}

	function validateExistence($marca){
		$query = $this->db->get_where('Marcas', array('Marca' => $marca['Marca']));
		return $query->result();
	}

	
}