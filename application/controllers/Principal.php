<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Produtos_model as Categoria_model_produtos;

class Principal extends CI_Controller {

	private $data;

	function __construct()
	{
		$this->data = array();
		// $this->data['todos_produtos'] = $this->Produtos_model->listarProdutos();
		
	}
	
	public function index()
	{
		$this->load->view('index', $this->data);
	}
	
}
