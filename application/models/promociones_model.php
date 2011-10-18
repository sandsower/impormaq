<?php

class Promociones_model extends CI_Model {

	function getAll(){
		 $this->db->select('*');
		 $this->db->from('promociones');
			 $this->db->join('maquinas', 'maquinas.IdMaquina = promociones.IdMaquina');
			 $this->db->join('imagenes', 'promociones.IdImagenes = imagenes.IdImagenes');
			 $this->db->where('maquinas.promo',true);
			 $this->db->where('maquinas.venta',false);
		 $query = $this->db->get();
		 return $query->result();
	}

	function getById($id){
		$query = $this->db->get_where('promociones', array('IdPromociones' => $id));
		return $query->result();
	}

	function delete($id){
		return $this->db->delete('promociones', array('IdPromociones' => $id));
	}

	function getMachineById($id){
		$this->db->select('*');
		 $this->db->from('maquinas');
			 $this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
			 $this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
			 $this->db->where('IdMaquina',$id);
		 $query = $this->db->get();
		return $query->result();
	}
	
	function insert($data){
		$this->db->insert('promociones', $data);
	}

	function turnPromoOn($idMachine){
		$data = array('promo' => true);
		$this->db->where('IdMaquina', $idMachine);
		return $this->db->update('maquinas', $data); 
	}

	function turnPromoOff($idMachine){
		$data = array('promo' => false);
		$this->db->where('IdMaquina', $idMachine);	
		return $this->db->update('maquinas', $data);
	}
	
	function deleteImage($id){
		$data = array (
				'IdImagenes' => null,
			);
		$this->db->select('*');
		$this->db->from('promociones');
		$this->db->where('idImagenes', $id);
		$query = $this->db->get();
		$this->db->update('promociones', $data);
		return $query->result();
	}

	function getPromoMachine($id){
		print_r($id);
		$this->db->select('PrecioPromocional');
		$this->db->from('promociones');
		$this->db->where('IdMaquina',$id);
		$query = $this->db->get();
		return $query->result();
	}

}