<?php

class Contenidos_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }
    
	function getById($id){
		$this->db->select("*");
		$this->db->from("contenido");
		$this->db->where("IdContenido",$id);
		$query = $this->db->get();
		return $query->result();
	}

	function getAllByArea($area)
	{
		$this->db->select("*");
		$this->db->from("contenido");
		$this->db->where("Area",$area);
		$query = $this->db->get();
		return $query->result();
	}

	function update($data){
		$this->db->where('IdContenido', $data['IdContenido']);
		return $this->db->update('contenido', $data);
	}

	function getAllAreas()
	{
		$query = $this->db->query("SELECT DISTINCT Area FROM contenido");
		return $query->result();
	}

	function insert($data){
		return $this->db->insert('contenido', $data);
	}

	function delete($id){
		return $this->db->delete('contenido', array('IdContenido' => $id));
	}
}
