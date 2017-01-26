<div class="row">
	<div class="col-ms-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
				<b class="text-info"><i class="fa fa-check" aria-hidden="true"></i>
				index
				</b></h3>
			</div>
			<div class="panel-body">
				Vista <b>index</b> del mudulo <b>partidos</b>
				<hr>
				<form action="<?php echo baseUrl ?>partidos/principal/1?cos=asdadas" method="POST">
				<input type="text" name="var">
				<input type="submit" value="Actualizar">
				</form>

				<form action="<?php echo baseUrl ?>partidos/principal/1/delete?cos=asdadas" method="POST">
				<input type="text" name="var">
				<input type="submit" value="Eliminar">
				</form>
			</div>
		</div>
	</div>
</div>