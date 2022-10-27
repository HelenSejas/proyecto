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
		public function listaestudiantes($idCurso)
	{
		$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->join('curso','estudiante.idCurso=curso.idCurso');
		$this->db->where('curso.idCurso',$idCurso);
		return $this->db->get();
	}
	public function listacursoinactivos()
	{
		$this->db->select('*');
		$this->db->from('curso');
		$this->db->where('estado',0);
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
	public function listauncurso($idCurso)
	{
		$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->join('curso','estudiante.idCurso=curso.idCurso');
		$this->db->where('idCurso',$idCurso);
	}


	//model_entrenador
	public function listaentrenador()
	{
		$this->db->select('*');
		$this->db->from('entrenador');
		$this->db->where('estado',1);
		return $this->db->get();
	}
		public function entrenador()
	{
		$this->db->select('*');
		$this->db->from('entrenador');
		$usuario=$this->session->userdata('usuario'); 
		$this->db->where('usuario',$usuario);
		return $this->db->get();
	}
	public function agregarentrenador ($data)
	{
		$this->db->insert('entrenador',$data);
	
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



	//model_equipos
	public function listaequipos()
	{
		$this->db->select('*');
		$this->db->from('equipo');
		$this->db->where('estado',1);
		return $this->db->get();
	}
	public function agregarequipo ($data)
	{
		$this->db->insert('equipo',$data);
	
	}
		public function recuperarequipo($idEquipo)
	{
		$this->db->select('*');
		$this->db->from('equipo');
		$this->db->where('idEquipo',$idEquipo);
		return $this->db->get();
	}
	public function modificarequipo($idEquipo,$data)
	{
		$this->db->where('idEquipo',$idEquipo);
	    $this->db->update('equipo',$data);
	}
}
?>