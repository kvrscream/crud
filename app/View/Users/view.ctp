<div class="row">
	<div class="col-md-12">
		<div class="jumboltron">
			<?php
				echo "<label>Código: ". $dados["User"]["id"] ."</label> <br />";
				echo "<label>Nome: ". $dados["User"]["name"] ."</label> <br />";
				echo "<label>E-mail: ". $dados["User"]["username"] ."</label> <br />";
			?>
			<a href="<?php echo $this->base.'/users/index'?>" class="btn btn-warning">Voltar</a>
		</div>
	</div>
</div>