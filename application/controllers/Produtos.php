<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Produtos extends CI_Controller {

	private $data;

	public function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->data['todos_itens'] = $this->Produtos_model->listarProdutos();
	}

	public function index($produtos = null)
	{
		$this->data['produto_current'] = $produtos;
		$this->load->view('produtos',$this->data);
	}

	public function produtoDetails($produto = null)
	{
		$this->data['produto'] = $produto;
		$this->load->view('produto_details',$this->data);
	}

	public function formCadastro()
	{
		$this->load->view('form_cadastro');
	}

	public function sendData()
	{
		$dados_produto = $_REQUEST;

		$this->Produtos_model->saveDatabase($dados_produto);
	}
}
