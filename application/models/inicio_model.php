<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estudiante_model extends CI_Model {

	
	public function listaestudiantes()
	{
		$this->db->select('*');
		$this->db->from('estudiante');
		return $this->db->get();
	}

}
?>