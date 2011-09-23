<?php

class Promociones_model extends CI_Model {

	function getAll(){
		 $this->db->select('*');
		 $this->db->from('Promociones');
			 $this->db->join('Maquinas', 'Maquinas.IdMaquina = Promociones.IdMaquina');
			 $this->db->join('Imagenes', 'Promociones.IdImagenes = Imagenes.IdImagenes');
			 $this->db->where('Maquinas.promo',true);
			 $this->db->where('Maquinas.venta',false);
		 $query = $this->db->get();
		 return $query->result();
	}

	function getById($id){
		$query = $this->db->get_where('Promociones', array('IdPromociones' => $id));
		return $query->result();
	}

	function getMachineById($id){
		$this->db->select('*');
		 $this->db->from('Maquinas');
			 $this->db->join('Tipos', 'Maquinas.IdTipos = Tipos.idTipos');
			 $this->db->join('Marcas', 'Maquinas.IdMarcas = Marcas.IdMarca');
			 $this->db->where('IdMaquina',$id);
		 $query = $this->db->get();
		return $query->result();
	}
	
	function insert($data){
		$this->db->insert('Promociones', $data);
	}

	function turnPromo($idMachine){
		$data = array(
               'promo' => true,
            );
		$this->db->where('IdMaquina', $idMachine);
		return $this->db->update('Maquinas', $data); 
	}
	
	function deleteImage($id){
		$data = array (
				'IdImagenes' => null,
			);
		$this->db->select('*');
		$this->db->from('Promociones');
		$this->db->where('IdImagenes', $id);
		$query = $this->db->get();
		$this->db->update('Promociones', $data);
		return $query->result();
	}

}