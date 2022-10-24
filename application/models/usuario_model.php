<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_Model {

		public function validarusuario($usuario,$password)
	{
		$this->db->select('*');
		$this->db->from('entrenador');
		$this->db->where('usuario',$usuario);
		$this->db->where('password',$password);
		return $this->db->get();
	}
}
?>