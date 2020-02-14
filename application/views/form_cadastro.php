<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
	  <header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
			<a class="navbar-brand" href="#">vinho - Michael</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url()?>">Home </a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?=base_url('create')?>">Cadastrar</a><span class="sr-only">(current)</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
				</ul>
			</div>
		</nav>
	  </header>
	  </script>
	  <div class="container">
		  <div class="row">
			  <div class="col-6 justify-content-center text-center">
				<form class="form-submit" method="POST" action="<?=base_url('form/submit')?>">
					<div class="form-group">
						<legend>Cadastro de Vinhos</legend>
						<!-- <label for="nome" class="col-sm-12 col-form-label">
							Nome:
						</label> -->
						<div class="col-sm-12">
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
						</div>
					</div>
					<div class="form-group">
						<!-- <label for="tipo" class="col-sm-12 col-form-label">
							Tipo:
						</label> -->
						<div class="col-sm-12">
							<input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo">
						</div>
					</div>
					<div class="form-group">
						<!-- <label for="peso" class="col-sm-12 col-form-label">
							Peso:
						</label> -->
						<div class="col-sm-12">
							<input type="text" class="form-control" name="peso" id="peso" placeholder="Peso">
						</div>
					</div>
					<div class="form-group">
						<!-- <label for="preco" class="col-sm-12 col-form-label">
							Preço:
						</label> -->
						<div class="col-sm-12">
							<input type="text" class="form-control" name="preco" id="preco" placeholder="Preço">
						</div>
					</div>
					<div class="form-group text-center">
						<div class="col-sm-12">
							<button id="btnSubmit" type="submit" class="btn btn-success">Cadastrar</button>
						</div>
					</div>
				</form>
			  </div>
		  </div>
	  </div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script>

		$(document).ready(function () {
			$('.form-submit').on('submit',function(e) {
				e.preventDefault();

				$('#btnSubmit').attr('disable',true);
				$('#btnSubmit').text('Aguarde...');

				let data = $(this).serializeArray();
				let url = "<?=base_url()?>"
				$.ajax({
					url: url+'form/submit',
					type: "POST",
					data: data,
					dataType: "html"
				})
				.done(function(response) {
    				console.log(response);
					window.location.replace('/');
				})
			})
		})

	</script>
  </body>
</html>
