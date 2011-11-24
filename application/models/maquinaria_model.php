<?php

class Maquinaria_model extends CI_Model {

	function getAll(){
		 $this->db->select('*');
		 $this->db->from('maquinas');
			 $this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
			 $this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
			 $this->db->where('maquinas.promo',false);
			 $this->db->where('maquinas.venta',false);
		 $query = $this->db->get();
		 return $query->result();
	}
	function getAllWithImages(){
		 $this->db->select('*');
		 $this->db->from('maquinas');
			 $this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
			 $this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
			 $this->db->join('imagenes', 'maquinas.IdMaquina = imagenes.idMaquina');
			 $this->db->where('maquinas.promo',false);
			 $this->db->where('maquinas.venta',false);
			 $this->db->where('imagenes.default',true);
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
	
	
	function getByIdTipo($idTipo){
		//$query = $this->db->get_where('Maquinas', array('IdMaquina' => $id));
		$this->db->select('*');
		 $this->db->from('maquinas');
			 $this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
			 $this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
			 $this->db->join('imagenes', 'maquinas.IdMaquina = imagenes.idMaquina');
			 $this->db->where('maquinas.promo',false);
			 $this->db->where('maquinas.venta',false);
			 $this->db->where('imagenes.default',true);
			 $this->db->where('maquinas.IdTipos',$idTipo);
		 $query = $this->db->get();
		return $query->result();
	}
	function getByPrice($precio)
	{
		$this->db->select('*');
		$this->db->from('maquinas');
		$this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
		$this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
		$this->db->join('imagenes', 'maquinas.IdMaquina = imagenes.idMaquina');
		$this->db->where('maquinas.promo',false);
		$this->db->where('maquinas.venta',false);
		$this->db->where('imagenes.default',true);
		$this->db->where('maquinas.Precio <=',$precio); 
		$query = $this->db->get();
		return $query->result();
	
	}
	function getByIdMarca($marca){
		$this->db->select('*');
		$this->db->from('maquinas');
		$this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
		$this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
		$this->db->join('imagenes', 'maquinas.IdMaquina = imagenes.idMaquina');
		$this->db->where('maquinas.promo',false);
		$this->db->where('maquinas.venta',false);
		$this->db->where('imagenes.default',true);
		$this->db->where('maquinas.IdMarcas',$marca);
		 $query = $this->db->get();
		return $query->result();
	}
	function getByIdTipoPrecio($tipo,$precio)
	{
		$this->db->select('*');
		$this->db->from('maquinas');
		$this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
		$this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
		$this->db->join('imagenes', 'maquinas.IdMaquina = imagenes.idMaquina');
		$this->db->where('maquinas.promo',false);
		$this->db->where('maquinas.venta',false);
		$this->db->where('imagenes.default',true);
		$this->db->where('maquinas.IdTipos',$tipo);
		$this->db->where('maquinas.Precio <=',$precio); 
		$query = $this->db->get();
		return $query->result();
	}
	function getByIdMarcaPrecio($marca,$precio)
	{
		$this->db->select('*');
		$this->db->from('maquinas');
		$this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
		$this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
		$this->db->join('imagenes', 'maquinas.IdMaquina = imagenes.idMaquina');
		$this->db->where('maquinas.promo',false);
		$this->db->where('maquinas.venta',false);
		$this->db->where('imagenes.default',true);
		$this->db->where('maquinas.IdMarcas',$marca);
		$this->db->where('maquinas.Precio <=',$precio); 
		$query = $this->db->get();
		return $query->result();
	}
	function getByIdTipoIdMarca($marca,$tipo)
	{
		$this->db->select('*');
		$this->db->from('maquinas');
		$this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
		$this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
		$this->db->join('imagenes', 'maquinas.IdMaquina = imagenes.idMaquina');
		$this->db->where('maquinas.promo',false);
		$this->db->where('maquinas.venta',false);
		$this->db->where('imagenes.default',true);
		$this->db->where('maquinas.IdTipos',$tipo);
		$this->db->where('maquinas.IdMarcas',$marca);
		$query = $this->db->get();
		return $query->result();
	
	}
	function getByIdTipoIdMarcaPrecio($precio,$marca,$Tipo){
		$this->db->select('*');
		$this->db->from('maquinas');
		$this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
		$this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
		$this->db->join('imagenes', 'maquinas.IdMaquina = imagenes.idMaquina');
		$this->db->where('maquinas.promo',false);
		$this->db->where('maquinas.venta',false);
		$this->db->where('imagenes.default',true);
		$this->db->where('maquinas.IdTipos',$tipo);
		$this->db->where('maquinas.IdMarcas',$marca);
		$this->db->where('maquinas.Precio <=',$precio); 
		$query = $this->db->get();
		return $query->result();
	}
	
	function insert($data){
		$this->db->insert('maquinas', $data);
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