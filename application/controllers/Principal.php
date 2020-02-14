<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Principal extends CI_Controller {

	private $data;

	public function __construct()
	{
		parent::__construct();
		$this->data['todos_produtos'] = $this->Produtos_model->listarProdutos();
		
	}
	
	public function index()
	{
		$this->load->view('index',$this->data);
	}
	
}
