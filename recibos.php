<?php include 'header.php';?>


<div class="col-md-12 pull-right" style="padding:50px 5px 20px 0;">
	<div class="col-md-6"></div>
	<div class="col-md-6 pull-right input-group">
		<div class="col-md-5">
			<input type="text" class="form-control col-md-6" placeholder="Buscar una propiedad" name="srch-term" id="srch-term">
		</div>
		
		
		<div class="col-md-1 input-group-btn" style="margin-left:-33px;">
			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		</div>
		
		<div class="col-md-5" style="margin-left:40px;">
			<input type="text" class="form-control col-md-6" placeholder="01/01/2015 - 01-02-2015" name="srch-calendar" id="srch-calendar">
		</div>
	</div>
</div>

<!-- Recibos -->
<div class="col-md-12" id="dsb-recibos-pagos">
	<div class="col-md-12" style="padding:initial;">		
		<div class="col-md-12">
			<div class="col-md-11" style="padding:20px 0 20px 0;">
				<div class="col-md-1 ver-select">Ver: </div>
				
				<div class="col-md-2">
					<select name="" class="form-control box-shadow">
						<option>Facturas</option>
						<option selected="selected">Recibos</option>
						<option>Todos</option>
					</select>
				</div>
				<div class="col-md-2">
					<select name="" class="form-control box-shadow">
						<option>Activos</option>
						<option>Pagados</option>
						<option>Atrasados</option>
						<option>Cancelados</option>
						<option selected="selected">Todos</option>
					</select>
				</div>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="col-md-12" style="padding:0 20px 20px 20px;">
				<div class="col-md-12" style="padding:initial;" id="dsb-table-recibos-pagos">
					<div class="table-responsive">
						<table class="table table-regular">
							<thead>
								<tr class="text-center">
									<td>Folio</td>
									<td>Propiedad</td>
									<td>Periodo</td>
									<td>Subtotal</td>
									<td>Total</td>
									<td></td>
									<td>Pagos</td>
									<td>Facturas</td>
								</tr>
							</thead>
							<tbody>
								<tr class="text-center tr-last">
									<td>TR00001</td>
									<td><a href="" title="Propiedad">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="bottom" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/editar.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border">Generar factura</a>
										<a href="" class="a-edit">
											<img src="css/images/eliminar.png" alt="Eiminar Pago"/>
										</a>
									</td>
								</tr>
								<tr class="text-center tr-last">
									<td>TR00001</td>
									<td><a href="" title="Propiedad" class="underline">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/editar.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border">Generar factura</a>
										<a href="" class="a-edit">
											<img src="css/images/eliminar.png" alt="Eiminar Pago"/>
										</a>
									</td>
								</tr>
								<tr class="text-center">
									<td>TR00001</td>
									<td><a href="" title="Propiedad" class="underline">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Generar factura</a>
									</td>
								</tr>
								<tr class="text-center">
									<td>TR00001</td>
									<td><a href="" title="Propiedad" class="underline">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Generar factura</a>
									</td>
								</tr>
								<tr class="text-center">
									<td>TR00001</td>
									<td><a href="" title="Propiedad" class="underline">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Generar factura</a>
									</td>
								</tr>
								<tr class="text-center">
									<td>TR00001</td>
									<td><a href="" title="Propiedad" class="underline">Propiedad 1</a></td>
									<td>01/02/2015</td>
									<td>$40,000.00</td>
									<td>$50,000.00</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="top" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Deshacer pago</a>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									<td>
										<a href="" class="a-border-none text-white">Generar factura</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include 'footer.php';?>
<script>
$(document).ready(function() {
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});
});
</script>
