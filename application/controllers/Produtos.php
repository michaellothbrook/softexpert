<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// use Produtos_model as Produtos_Banco;
use Produtos_model as Produtos_todos;
class Produtos extends CI_Controller {

	private $data;

	function __construct()
	{
		$this->data = array();
	}

	public function index($produtos = null)
	{
		$this->data['produto_current'] = $produtos;

		$this->load->view('produtos',$this->data);
	}

	public function produtoDetails($produto = null)
	{
		$this->data['produto'] = $produto;

		$this->data['todos_itens'] = $this->Produtos_model->listarProdutos();

		$this->load->view('produto_details',$this->data);
	}
}
