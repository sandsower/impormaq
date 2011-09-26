<?php

class Ventas_model extends CI_Model {

	function getAll(){
		 $this->db->select('*');
		 $this->db->from('Ventas');
		 $query = $this->db->get();
		 return $query->result();
	}

	function insert($data){
		$this->db->insert('Ventas', $data);		
	}


}