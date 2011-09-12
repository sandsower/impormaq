<?php

class Clientes_model extends CI_Model {

	function getAll(){
		$query = $this->db->get('Clientes');
		return $query->result();
	}

	function getById($id){
		$query = $this->db->get_where('Clientes', array('IdClientes' => $id));
		return $query;
	}

	function insert($data){
		$this->db->insert('Clientes', $data);
	}

	function delete(){
		
	}
	
	function update(){
		
	}

	
}