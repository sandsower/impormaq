<?php

class Maquinaria_model extends CI_Model {

	function getAll(){
		 $this->db->select('*');
		 $this->db->from('maquinas');
			 $this->db->join('tipos', 'maquinas.IdTipos = tipos.idTipos');
			 $this->db->join('marcas', 'maquinas.IdMarcas = marcas.IdMarca');
			 $this->db->join('imagenes', 'maquinas.IdMaquina = imagenes.idMaquina');
			 $this->db->where('maquinas.promo',false);
			 $this->db->where('maquinas.venta',false);
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
		$this->db->delete('imagenes', array('IdMaquina'=>$id));
		//$url = base_url().'images/'.$id;
		//$this->load->helper('file'); 
		
		//$this->deleteDir( realpath(APPPATH . '../images/'.$id);
		//$this->deleteDir('/Users/Garrison/Sites/impormaq/images/'.$id.'/promo');
		//$this->deleteDir('/Users/Garrison/Sites/impormaq/images/'.$id.'/thumbs');

		//rmdir('/Users/Garrison/Sites/impormaq/images/'.$id);
		//unlink($url);
		//unlink($url);
		return $this->db->delete('maquinas', array('IdMaquina' => $id));
	}

	function update($data){
		$this->db->where('IdMaquina', $data['IdMaquina']);
		return $this->db->update('maquinas', $data);	
	}

	function validateExistence($marca){
		$query = $this->db->get_where('Marcas', array('Marca' => $marca['Marca']));
		return $query->result();
	}

	function deleteDir($dir) 
	{ 
	   if (substr($dir, strlen($dir)-1, 1) != '/') 
	       $dir .= '/'; 
	   echo '<br/>'.$dir; 
	   if ($handle = opendir($dir)) 
	   { 
	       while ($obj = readdir($handle)) 
	       { 
	           if ($obj != '.' && $obj != '..') 
	           { 
	               if (is_dir($dir.$obj)) 
	               { 
	                   if (!deleteDir($dir.$obj)) {
	         			    echo $dir.$obj; 
	         			    return false; 
	                   }
	               } 
	               elseif (is_file($dir.$obj)) 
	               { 
	                   if (!unlink($dir.$obj)) 
	                       return false; 
	               } 
	           } 
	       } 
	       closedir($handle); 

	       if (!@rmdir($dir)) 
	           return false; 
	       return true; 
	   } 
	   return false; 
	}  

	
}