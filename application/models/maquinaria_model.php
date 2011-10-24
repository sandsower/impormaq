<?php

class Maquinaria_model extends CI_Model {

	function getAll(){
		 $this->db->select('*');
		 $this->db->from('maquinas');
			 $this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
			 $this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
			 $this->db->where('promo',false);
			 $this->db->where('venta',false);
		 $query = $this->db->get();
		 return $query->result();
	}
	
	function getAllTypes(){
		$query = $this->db->get('tipos');
		return $query->result();
	}
	
	function getAllBrands(){
		$query = $this->db->get('marcas');
		return $query->result();
	}

	function getById($id){
		//$query = $this->db->get_where('Maquinas', array('IdMaquina' => $id));
		$this->db->select('*');
		 $this->db->from('maquinas');
			 $this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
			 $this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
			 $this->db->where('IdMaquina',$id);
		 $query = $this->db->get();
		return $query;
	}

	function insert($data){
		$this->db->insert('maquinas', $data);
	}
	function delete($id){
		if ($this->db->delete('imagenes', array('IdMaquina'=>$id)))
		{
			if($this->db->delete('maquinas', array('IdMaquina' => $id)))
			{
				$this->deleteDir(getcwd().'/images/'.$id);
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	function update($data){
		$this->db->where('IdMaquina', $data['IdMaquina']);
		return $this->db->update('maquinas', $data);	
	}

	function validateExistence($marca){
		$query = $this->db->get_where('Marcas', array('Marca' => $marca['Marca']));
		return $query->result();
	}

	function deleteDir($path) 
	{ 
		$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::CHILD_FIRST);
		for ($dir->rewind(); $dir->valid(); $dir->next()) 
		{
			if ($dir->isDir()) {
			rmdir($dir->getPathname());
			} 
			else 
			{
				unlink($dir->getPathname());
			}
		}
		rmdir($path);
	}  

	
}