<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estudiante_model extends CI_Model {

	
	public function listaestudiantes()
	{
		$this->db->select('*');
		$this->db->from('estudiante');
	    $this->db->join('curso','estudiante.idCurso=curso.idCurso');
		$this->db->where('estudiante.estado',1);
		return $this->db->get();
	}
	public function listadeshabilitados()
	{
		$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->where('estado',0);
		return $this->db->get();
	}
	public function agregarestudiante($data)
	{
		$this->db->insert('estudiante',$data);
	}
	
		public function recuperarestudiante($IdEstudiante)
	{
		$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->join('curso','estudiante.idCurso=curso.idCurso');
		$this->db->where('estudiante.IdEstudiante',$IdEstudiante);
		$this->db->where('estudiante.estado',1);
		return $this->db->get();
	}

	
	public function modificarestudiante($IdEstudiante,$data)
	{
		$this->db->where('IdEstudiante',$IdEstudiante);
	    $this->db->update('estudiante',$data);
	}
	
		public function validarusuario($usuario,$password)
	{
		$this->db->select('*');
		$this->db->from('entrenador');
		$this->db->where('usuario',$usuario);
		$this->db->where('password',$password);
		return $this->db->get();
	}
		public function inscribir($data,$idCurso,$idEntrenador)
	{
		$this->db->trans_strict();
			$this->db->insert('estudiante',$data);
			$IdEstudiante->$this->db->insert_id();
			$data2['idCurso'] =$idCurso;
			$data2['idEntrenador'] =$idEntrenador;
            $data2['IdEstudiante'] =$IdEstudiante;

            $this->db->insert('inscripcion',$data2);
		$this->db->trans_complete();

	if ($this->db->_trans_status()===FALSE) {
		return FALSE;
	}
	}
}
?>