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

	
	public function produtoDetails($id_produto = null)
	{
		
		$this->data['current_produto'] = $this->Produtos_model->getProdutoById($id_produto);
		foreach ($this->data['current_produto'] as $title) {
			$this->data['current_title'] = $title->nome;
		}
		$this->load->template('produto_details',$this->data);
	}

	public function formCadastro()
	{
		$this->load->template('form_cadastro');
	}

	public function sendData()
	{
		$dados_produto = $_REQUEST;
		$format_preco = $dados_produto['preco'];
		$dados_produto['preco'] = str_replace (',', '.', str_replace ('.', '', $format_preco));
		$salvo = $this->Produtos_model->saveDatabase($dados_produto);
		if ($salvo) {
			$this->data['resposta_frontEnd'] = 'Sucesso ao cadastrar produto';
			echo json_encode($this->data['resposta_frontEnd']);
		} else {
			echo json_encode('Houve erro ao cadastrar o produto');
		}
	}

	public function saveCompra($id_produto)
	{
		$this->data['qtd_pedido'] = $_REQUEST['quant'];
		$dados_produto_merge = $this->Produtos_model->getProdutoById($id_produto);
		$preco_unitario = $dados_produto_merge[0]->preco;
		$dados_produto_merge['quantidade'] = $this->data['qtd_pedido'];
		$dados_produto_merge['total'] = $preco_unitario *= $this->data['qtd_pedido'];
		$registra_venda = $this->Produtos_model->registerVenda($dados_produto_merge);

		if ($registra_venda) {
			echo json_encode($dados_produto_merge);
		}
	}

	public function produtosVendas()
	{
		$this->data['vendidos'] = $this->Produtos_model->listarVendas();
		
		$this->load->template('produtos_vendas',$this->data);
	}
}
