<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estudiante_model extends CI_Model {

	
	public function listaestudiantes()
	{
		$this->db->select('*');
		$this->db->from('estudiante');
		return $this->db->get();
	}
	public function agregarestudiante($data)
	{
		$this->db->insert('estudiante',$data);
	
	}
	
	public function eliminarestudiante($IdEstudiante)
	{
		$this->db->where('IdEstudiante',$IdEstudiante);
	    $this->db->delete('estudiante');
	}
		public function recuperarestudiante($IdEstudiante)
	{
		$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->where('IdEstudiante',$IdEstudiante);
		return $this->db->get();
	}
	public function modificarestudiante($IdEstudiante,$data)
	{
		$this->db->where('IdEstudiante',$IdEstudiante);
	    $this->db->update('estudiante',$data);
	}
		public function encontrarestudiante($busqueda)
	{
		$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->where('ApellidoPaterno',$busqueda);
		return $this->db->get();
	}
}
?>