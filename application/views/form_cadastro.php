
	  <section id="form">
		<div class="container">
			<div class="row pt-5 pb-5">
				<div class="col-md-6 justify-content-center text-center">
					<form class="form-submit" method="POST" action="<?=base_url('form/submit')?>">
						<div class="form-group">
							<legend>Cadastro de Vinhos</legend>
							<div class="col-sm-12">
								<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12 text-left">
								<span>Descrição</span>
								<textarea class="form-control" name="descricao" id="descricao" required>

								</textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" class="form-control" name="peso" id="peso" placeholder="Peso" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" class="form-control" name="preco" id="preco" placeholder="Preço" required>
							</div>
						</div>
						<div class="form-group text-center">
							<div class="col-sm-12">
								<button id="btnSubmit" type="submit" class="btn btn-success">Cadastrar</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<img src="../img/bg-<?=rand(1,2)?>.jpg" width="100%" height="100%">
				</div>
			</div>
		</div>
	  </section>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
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
					dataType: "json"
				})
				.done(function(response) {
    				console.log(response);
					console.log(response.resposta_frontEnd);
					
					window.location.replace(url);
				})
			})

			$('#preco').mask('#.##0,00', {reverse: true});
		})

	</script>
