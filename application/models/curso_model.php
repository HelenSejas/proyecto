<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curso_model extends CI_Model {

	
	public function listacurso()
	{
		$this->db->select('*');
		$this->db->from('curso');
		return $this->db->get();
	}
	public function agregarcurso ($data)
	{
		$this->db->insert('curso',$data);
	
	}
	
	public function eliminarcurso($idCurso)
	{
		$this->db->where('idCurso',$idCurso);
	    $this->db->update('curso',);
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
}
?>