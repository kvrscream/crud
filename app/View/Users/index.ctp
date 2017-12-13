<div class="row">
	<div class="pull-right">
		<a href="<?php echo $this->base.'/users/add'; ?>" class="btn btn-primary">
			Cadastrar Novo Usuário;
		</a>
	</div>
	<div class="col-md-12">
		<table class="table table-responsive">
			<thead>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Ações</th>
			</thead>
			<tbody>
			<?php if(isset($dados)) {?>
				<?php foreach ($dados as $data) { ?>
					<tr>
						<td><?php echo $data["User"]["name"] ?></td>
						<td><?php echo $data["User"]["username"] ?></td>
						<td>
							<a href="<?php echo $this->base.'/users/view/'.$data["User"]["id"] ?>" class="btn btn-default">
								Ver
							</a>
							<a href="<?php echo $this->base.'/users/edit/'.$data["User"]["id"] ?>" class="btn btn-primary">
								Editar
							</a>
							<a href="<?php echo $this->base.'/users/delete/'.$data["User"]["id"] ?>" class="btn btn-danger">
								Excluir
							</a>
						</td>
					</tr>
				<?php } ?>
			<?php } else { ?>
							<tr>
								<td colspan="6">Nenhum cadastro foi encontrado.</td>
							</tr>
			<?php } ?>		
			</tbody>
		</table>
	</div>
</div>