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
			<div class="col-md-9" style="padding:20px 0 20px 0;">
				<div class="col-md-1 ver-select">Ver: </div>
				
				<div class="col-md-3">
					<select name="" class="form-control box-shadow">
						<option selected="selected">Estado de Cuenta</option>
						<option>Ingresos</option>
						<option>Adeudos</option>
					</select>
				</div>
				
			</div>			
		</div>
		
		<!-- tabla tablesorter incio-->
		<div class="col-md-12">
			<div class="col-md-12" style="padding:0 20px 20px 20px;">
				<div class="col-md-12" style="padding:initial;" id="dsb-table-recibos-pagos">
					<div class="table-responsive">
						<table  class="table table-regular tablesorter" >
							<thead>
								<tr class="text-center">									
									<td>Folio</td>
									<td>Fecha</td>
									<td>Concepto</td>
									<td></td>
									<td>Cargo</td>
									<td>Abono</td>
									<td>Saldo</td>
									
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									
									<td>01</td>									
									<td>01/01/2015</td>
									<td style="max-width: 250px;">
										Renta de Casa de Monterrey en Sat..., período: 01 de
										Noviembre de 2014 a 30 de Noviembre de 2014
									</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="bottom" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										$50,000.00
									</td>
									<td>
										
									</td>
									<td>
										$50,000.00
									</td>
								</tr>
								<tr class="text-center">
									
									<td>01</td>									
									<td>01/01/2015</td>
									<td style="max-width: 250px;">Pago</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="bottom" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										
									</td>
									<td>
										$30,000.00
									</td>
									<td>
										$20,000.00
									</td>
								</tr>
									<tr class="text-center ">
									
									<td>01</td>									
									<td>01/02/2015</td>
									<td style="max-width: 250px;" >
										Renta de Casa de Monterrey, período: 01 de Diciembre
										de 2014 a 31 de Diciembre de 2014
									</td>
									<td>
										<a href="" class="a-comentarios">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="bottom" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										$50,000.00
									</td>
									<td>
										
									</td>
									<td>
										$70,000.00
									</td>
								</tr>
									<tr class="text-center">
									
									<td>04</td>									
									<td>01/03/2015</td>
									<td style="max-width: 250px;">
										Renta de Casa de Monterrey, período: 01 de Enero
										de 2015 a 31 de Enero de 2015
									</td>
									<td>
										<a href="" class="a-comentarios" style="oberflow:hidden">
											<img src="css/images/comentarios-disabled.png" alt="Comentarios" data-toggle="tooltip" data-placement="bottom" title="Renta de casa de Monterrey, período: 01 de Noviembre de 2014 a 30 de Noviembre de 2015"/>
										</a>
									</td>
									<td>
										$50,000.00
									</td>
									<td>
										
									</td>
									<td>
										$120,000.00
									</td>
								</tr>

								
							</tbody>
						</table>
					</div>
				</div>
			</div>



		</div>
			<!-- tabla tablesorter final -->
	</div>
</div>


<?php include 'footer.php';?>
<script>
	

$(document).ready(function() {
	$(function () {

		//$('[data-toggle="tooltip"]').tooltip()
		$(".tablesorter").tablesorter();
	});
	

});



</script>