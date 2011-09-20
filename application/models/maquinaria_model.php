<?php

class Maquinaria_model extends CI_Model {

	function getAll(){
		 $this->db->select('*');
		 $this->db->from('Maquinas');
			 $this->db->join('Tipos', 'Maquinas.IdTipos = Tipos.idTipos');
			 $this->db->join('Marcas', 'Maquinas.IdMarcas = Marcas.IdMarca');
			 //$this->db->where('promo',false);
			 $this->db->where('venta',false);
		 $query = $this->db->get();
		 return $query->result();
	}
	
	function getAllTypes(){
		$query = $this->db->get('Tipos');
		return $query->result();
	}
	
	function getAllBrands(){
		$query = $this->db->get('Marcas');
		return $query->result();
	}

	function getById($id){
		//$query = $this->db->get_where('Maquinas', array('IdMaquina' => $id));
		$this->db->select('*');
		 $this->db->from('Maquinas');
			 $this->db->join('Tipos', 'Maquinas.IdTipos = Tipos.idTipos');
			 $this->db->join('Marcas', 'Maquinas.IdMarcas = Marcas.IdMarca');
			 $this->db->where('IdMaquina',$id);
		 $query = $this->db->get();
		return $query;
	}

	function insert($data){
		$this->db->insert('Maquinas', $data);
	}
	function delete($id){
		return $this->db->delete('Maquinas', array('IdMaquina' => $id));
	}

	function update($data){
		$this->db->where('IdMaquina', $data['IdMaquina']);
		return $this->db->update('Maquinas', $data);	
	}

	function validateExistence($marca){
		$query = $this->db->get_where('Marcas', array('Marca' => $marca['Marca']));
		return $query->result();
	}
}