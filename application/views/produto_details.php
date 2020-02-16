
	<section id="details">
		<div id="container" class="container">
			<div class="row">
				<div class="col-md-12 pt-5 pb-5">
					<?php foreach($current_produto as $produto) : ?>
					<h2>Vinho - <?=$produto->nome?></h2>
					<div class="row pt-5 justify-content-center">
						<div class="col-md-4">
							<img width="100%" src="../img/vinho-<?=rand(1,10)?>.jpg" alt="">
						</div>
						<div class="col-md-8 text-center">
							<form action="" method="post" class="form-comprar p-3">
								<h3>Descrição</h3>
								<p><?=$produto->descricao?></p>
								<div class="form-row align-items-end text-center">
									<div class="col-md-3 form-group">
										<label class="p-0 m-0">Qtde.</label>
										<input type="number" min="1" value="1" name="quant" id="quant">
										<p id="preco">Preço: R$<?=$produto->preco?></p>
										<p id="total">Total: R$<?=$produto->preco?></p>
									</div>
									<div class="col-md-9 form-group text-center">
										<button type="submit" class="btn btn-danger" id="btn-comprar">
											Comprar este produto
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<div class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?=$produto->nome?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>O valor total da compra: </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Save changes</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
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
			
			$('#quant').on('change',function() {
				var quant = $(this).val();
				var money = $('#preco').text().replace('Preço: R$','');
				var preco = money;
				var total = quant * preco;
				$('#total').text('Total: R$'+total.toFixed(2));
			})
			$('.form-comprar').on('submit',function(e) {
				e.preventDefault();

				$('#btn-comprar').attr('disable',true);
				$('#btn-comprar').text('Aguarde...');

				let data = $(this).serializeArray();
				let url = "<?=base_url()?>";
				$.ajax({
					url: url+'form/comprar/<?=$produto->id?>',
					type: "POST",
					data: data,
				})
				.done(function(response) {
    				console.log(response);
					window.location.replace(url);
				})
			});
		});

	</script>
