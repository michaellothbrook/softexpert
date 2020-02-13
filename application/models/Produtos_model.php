<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {

	private $data;

	public function listarProdutos()
	{
		$query = $this->db->get('vinhos');
		
		return $query->result();
	}
}
