
	  <div class="container">
		  <div class="row">
			  <div class="col-12 text-center">
				  <table class="table table-responsive border d-md-table table-striped">
					  <thead class="thead-dark">
						  <tr>
							  <th>Id_Venda</th>
							  <th>Id_Produto</th>
							  <th>Nome</th>
							  <th>Quantidade</th>
							  <th>Total</th>
							  <th>Data Venda</th>
						  </tr>
					  </thead>
					  <tbody>
						  <?php foreach($vendidos as $produto) : ?>
						  <tr>
							  <td scope="row"><?=$produto->id_venda?></td>
							  <td><?=$produto->id_produto?></td>
							  <td><?=$produto->nome?></td>
							  <td><?=$produto->quantidade?></td>
							  <td><?=$produto->total?></td>
							  <td><?=$produto->create_at?></td>
						  </tr>
						  <?php endforeach ?>
					  </tbody>
				  </table>
			  </div>
		  </div>
	  </div>
