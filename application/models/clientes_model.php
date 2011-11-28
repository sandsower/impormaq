<?php

class Clientes_model extends CI_Model {

	function getAll(){
		$query = $this->db->get('clientes');
		return $query->result();
	}

	function getById($id){
		$query = $this->db->get_where('clientes', array('IdClientes' => $id));
		return $query;
	}

	function insert($data){
		$this->db->insert('clientes', $data);
	}

	function delete($id){
		return $this->db->delete('clientes', array('IdClientes' => $id));
	}
	
	function update($data){
		$this->db->where('IdClientes', $data['IdClientes']);
		return $this->db->update('clientes', $data);	
	}

}