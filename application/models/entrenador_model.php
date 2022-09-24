<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class entrenador_model extends CI_Model {

	
	public function listaentrenador()
	{
		$this->db->select('*');
		$this->db->from('entrenador');
		return $this->db->get();
	}
	public function agregarentrenador ($data)
	{
		$this->db->insert('entrenador',$data);
	
	}
	
	public function eliminarentrenador($idCurso)
	{
		$this->db->where('idEntrenador',$idEntrenador);
	    $this->db->update('entrenador',);
	}
		public function recuperarentrenador($idEntrenador)
	{
		$this->db->select('*');
		$this->db->from('entrenador');
		$this->db->where('idEntrenador',$idEntrenador);
		return $this->db->get();
	}
	public function modificarentrenador($idEntrenador,$data)
	{
		$this->db->where('idEntrenador',$idEntrenador);
	    $this->db->update('entrenador',$data);
	}
}
?>