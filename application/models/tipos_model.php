<?php

class Tipos_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }
    
	function getAll(){
		$query = $this->db->get('tipos');
		return $query->result();
	}

	function insert($data){
		$this->db->insert('tipos', $data);
	}

	function delete($id){
		return $this->db->delete('Tipos', array('IdTipos' => $id));
	}

	function update($data){
		$this->db->where('idTipos', $data['IdTipos']);
		return $this->db->update('tipos', $data);	
	}

	function validateExistence($tipo){
		$query = $this->db->get_where('tipos', array('Tipo' => $tipo['Tipo']));
		return $query->result();
	}

	
}