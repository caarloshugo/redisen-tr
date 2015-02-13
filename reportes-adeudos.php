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
						<option selected="selected">Adeudos</option>
						<option></option>
						<option></option>
					</select>
				</div>
				
			</div>			
		</div>
		<div class="clearfix"></div>
		<div class="row" style="margin-bottom:15px">
			<div class="col-md-8 ">
				<h4 style="padding-left:40px;">
					<strong>
						
					</strong>					
				</h4>
				
			</div>
			<div class="col-md-4">
				<div class="col-md-3 col-md-offset-6">
					<a href="" class="a-comentarios">
						<img style="width:45px; height:45px;" src="iconos/02-Dashboard-Imprimir.png" />
					</a>
				</div>
				<div class="col-md-3 text-rigth ">
					<a href="" class="text-right">
						<img style="width:45px; height:45px;" src="iconos/03-Propiedades-EdodeCuenta-DescargarXLS.png" />
					</a>
				</div>
			</div>

		</div>
		
		
		<!-- tabla tablesorter incio-->
		<div class="col-md-12">
			<div class="col-md-12" style="padding:0 20px 20px 20px;">
				<div class="col-md-12" style="padding:initial;" id="dsb-table-recibos-pagos">
					<div class="table-responsive">
						<table  class="table table-regular tablesorter" id="tablesort-cuenta" >
							<thead>
								<tr class="text-center">	
									<th>Inquilino</th>
									<th>Propiedad</th>
									<th></th>									
									<th>Saldo Pendiente</th>
									
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									<td style="max-width: 250px;">
										<a href="" class="underline">Daniela Alejandra Araico García</a>
									</td>
									
									<td>
										<a href="" class="underline">Casa de Monterrey en Satélite Número 1-A</a>
										
									</td>
									<td>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									<td class="underline">
										$50,000.00
									</td>
								</tr>
								<tr class="text-center">
									<td style="max-width: 250px;">
										<a href="" class="underline">Daniela Alejandra Araico García</a>
										</td>
									<td>									
										<a href="" class="underline">Oficina Río Suchiate #1</a>
									</td>
									<td class="text-center">
										<a href="" class="a-edit ">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									<td class="underline text-right" style="max-width: 130px">
										<div class="col-md-12">$10,000.00 </div>
										<div class="col-md-12">	DD/MM/AAAA $999,999.99	</div>
										<div class="col-md-12">	DD/MM/AAAA $999,999.99	</div>
										<div class="col-md-12">	DD/MM/AAAA $999,999.99	</div>										
									</td>
								</tr>
									<tr class="text-center ">
									<td style="max-width: 250px;" >
										<a href="" class="underline">Bernardo Garza Quiroga</a>
									</td>
									<td>									
										<a href="" class="underline">Propiedad 1</a>
									</td>
									<td>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>
									
									<td class="underline">
										$50,000.00
									</td>
								</tr>
									<tr class="text-center">
									<td style="max-width: 250px;">
										<a href="" class="underline">Nombre Completo del Inquilino</a>
									</td>
									<td>
										<a href="" class="underline">Propiedad 2</a>
									</td>
									<td>
										<a href="" class="a-edit">
											<img src="css/images/mensaje.png" alt="Editar Pago"/>
										</a>
									</td>									
									<td class="underline">
										$10,000.00
									</td>
								</tr>								
							</tbody>
							<tfoot>						
						  <tr class="text-center" id="finaltable" style=" border:1px solid gray; background-color: #20353c; color: white;">									
								
									<td style="max-width: 250px;">
										
									</td>
									<td>
										
									</td>
									<td>
										
									</td>
									
									<td>
										$120,000.00
									</td>
							 </tr>
						</tfoot>
						</table>						
					</div>
					<!--
					<div class="col-md-12" style=" border:1px solid gray; background-color: #20353c; color: white;">
							<div class="col-md-4 col-md-offset-8 text-right" style="padding-right: 0px;">
								<strong> Saldo Total: $120,000.00 </strong>								
							</div>
							
					</div>-->
				</div>
			</div>



		</div>
			<!-- tabla tablesorter final -->

		<div class="clearfix"></div>
		<div class="row" style="margin-top:15px">
			<div class="col-md-8 ">
				
				
			</div>
			<div class="col-md-4">
				<div class="col-md-3 col-md-offset-6">
					<a href="" class="a-comentarios">
						<img style="width:45px; height:45px;" src="iconos/02-Dashboard-Imprimir.png" />
					</a>
				</div>
				<div class="col-md-3 text-rigth ">
					<a href="" class="text-right">
						<img style="width:45px; height:45px;" src="iconos/03-Propiedades-EdodeCuenta-DescargarXLS.png" />
					</a>
				</div>
			</div>

		</div>


	</div>
</div>


<?php include 'footer.php';?>
<script>
	

$(document).ready(function() {
	$(function () {

		//$('[data-toggle="tooltip"]').tooltip()
		$("#tablesort-cuenta").tablesorter();
	});
	

});



</script>
