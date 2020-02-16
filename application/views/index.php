
	  <section id="index">
		<div class="container">
			<div class="row">
				<?php foreach($todos_produtos as $produtos) : ?>
				<div class="col-md-4 text-center p-2">
					<div class="">
						<div class="card" style="font-size: 1rem">
							<img class="card-img-top" width="100"style="height:250px" src="./img/vinho-<?=rand(1,10)?>.jpg">
							<div class="card-body">
								<h5 class="card-title" style="font-size: 1rem"><?=$produtos->nome?></h5>
								<p>R$ <?=$produtos->preco?></p>
								<a href="<?=base_url('/produtos')?>/<?=$produtos->id?>" class="btn btn-danger">ver detalhes!</a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	  </section>
	
