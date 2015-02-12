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
						<option selected="selected">Ingresos</option>
						<option></option>
						<option></option>
					</select>
				</div>
				<div class="col-md-1 ver-select" style="padding-left:0px">de </div>
				
				<div class="col-md-3">		
				<div class="col-md-12 col-md-pull-3">
					<select name="" class="form-control box-shadow">
						<option selected="selected">Todos</option>
						<option>Recibos</option>
						<option>Facturas</option>
						<option>Todos</option>
					</select>
				</div>			
					
					
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
									<th>Folio</th>
									<th>Fecha</th>
									<th>Inquilino</th>
									<th>Subtotal</th>
									<th>IVA</th>
									<th>Ret. ISR</th>
									<th>Ret. IVA</th>
									<th>Total</th>
									
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									
									<td>01</td>									
									<td>01/01/2015</td>
									<td style="max-width: 250px;">
										Daniela Alejandra Araico García
									</td>
									<td>
										$50,000.00
									</td>
									<td>
										--
									</td>
									<td>
										--
									</td>
									<td>
										--
									</td>
									<td>$50,000.00</td>
								</tr>
								<tr class="text-center">
									
									<td>01</td>									
									<td>01/01/2015</td>
									<td style="max-width: 250px;">Bernardo Garza Quiroga</td>
									<td>
										$50,000.00
									</td>
									<td>
										$8,000.00
									</td>
									<td>
										$0.00
									</td>
									<td>
										$0.00
									</td>
									<td>$58,000.00</td>
								</tr>
									<tr class="text-center ">
									
									<td>01</td>									
									<td>01/02/2015</td>
									<td style="max-width: 250px;" >
										Bernardo Garza Quiroga
									</td>
									<td>
										$10,000.00
									</td>
									<td>
										--
									</td>
									<td>
										--
									</td>
									<td>
										--
									</td>
									<td>$10,000.00</td>
								</tr>
									<tr class="text-center">
									
									<td>04</td>									
									<td>01/03/2015</td>
									<td style="max-width: 250px;">
										Nombre Completo del Inquilino
									</td>
									<td>
										$10,000.00
									</td>
									<td>
										$1,600.00
									</td>
									<td>
										
									</td>
									<td>
										$0.00
									</td>
									<td>$120,000.00</td>
								</tr>
								</tr >
									
								</tr>
								
							</tbody>
							<tfoot>						
						  <tr class="text-center" id="finaltable" style=" border:1px solid gray; background-color: #20353c; color: white;">									
								<td ></td>									
								<td ></td>
								<td style="max-width: 250px;" style=" border:none">
									
								</td>
								<td>
									$120,000.00
								</td>
								<td>
									$9,600.00
								</td>
								<td>
									$0.00
								</td>
								<td>
									$0.00
								</td>
								<td>$129,000.00</td>
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
		$("#tablesort-cuenta").tablesorter({

		});
	});
	

});



</script>
