<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {

	private $data;

	public function listarProdutos()
	{
		$query = $this->db->get('produtos');
		return $query->result();
	}

	public function getProdutoById($id)
	{
		if ($id) {
			$this->db->select('*')
			->where('id',$id);
			$result = $this->db->get('produtos');
			return $result->result();
		}
	}

	public function saveDatabase($dados)
	{
		if ($dados) {
			$this->db->insert('produtos',$dados);
		}
	}

	public function registerVenda($dados_venda)
	{
		if ($dados_venda) {
			$data = array(
				'id_produto' => $dados_venda[0]->id,
				'nome' => $dados_venda[0]->nome,
				'quantidade' => $dados_venda['quantidade'],
				'total' => $dados_venda['total']
			);
			$this->db->insert('vendas',$data);
		}
	}

	public function listarVendas()
	{
		
		$query = $this->db->get('vendas');
		return $query->result();
		
	}
}
