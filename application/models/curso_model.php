<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curso_model extends CI_Model {

	
	public function listacurso()
	{
		$this->db->select('*');
		$this->db->from('curso');
		$this->db->where('estado',1);
		return $this->db->get();
	}
	public function agregarcurso ($data)
	{
		$this->db->insert('curso',$data);
	
	}
	
		public function recuperarcurso($idCurso)
	{
		$this->db->select('*');
		$this->db->from('curso');
		$this->db->where('idCurso',$idCurso);
		return $this->db->get();
	}
	public function modificarcurso($idCurso,$data)
	{
		$this->db->where('idCurso',$idCurso);
	    $this->db->update('curso',$data);
	}
	public function listaentrenador()
	{
		$this->db->select('*');
		$this->db->from('entrenador');
		return $this->db->get();
	}
	public function listaequipos()
	{
		$this->db->select('*');
		$this->db->from('equipo');
		return $this->db->get();
	}
}
?>