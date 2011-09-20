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

	function delete($id){
		return $this->db->delete('Clientes', array('IdClientes' => $id));
	}
	
	function update($data){
		$this->db->where('IdClientes', $data['IdClientes']);
		return $this->db->update('Clientes', $data);	
	}

}