<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>
	<title>SOFTEXPERT - <?=isset($current_title) ? $current_title : 'Cadastrar' ?></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?=base_url('/css/style.css')?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
	  
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
		<a class="navbar-brand" href="<?=base_url()?>">SOFTEXPERT</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?= active_link(''); ?>">
					<a class="nav-link " href="<?=base_url()?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item <?= active_link('form/create'); ?>">
					<a class="nav-link" href="<?=base_url('form/create')?>">Cadastrar</a>
				</li>
				<li class="nav-item <?= active_link('produtos/vendas'); ?>">
					<a class="nav-link" href="<?=base_url('produtos/vendas')?>">Vendas</a>
				</li>
			</ul>
		</div>
	</nav>
	<header>
		<h1 class="text-center p-2">SOFTEXPERT - VINHOS</h1>
	</header>
