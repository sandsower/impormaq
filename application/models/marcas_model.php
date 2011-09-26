<?php

class Marcas_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }
    
	function getAll(){
		$query = $this->db->get('marcas');
		return $query->result();
	}

	function insert($data){
		$this->db->insert('marcas', $data);
	}

	function delete($id){
		return $this->db->delete('marcas', array('IdMarca' => $id));
	}

	function update($data){
		$this->db->where('IdMarca', $data['IdMarca']);
		return $this->db->update('marcas', $data);	
	}

	function validateExistence($marca){
		$query = $this->db->get_where('marcas', array('Marca' => $marca['Marca']));
		return $query->result();
	}

	
}