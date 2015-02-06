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

		<div class="clearfix"></div>
		<div class="row" style="overflow:hidden; margin-bottom: 10px;">
			<div class="col-md-12">
				<div class="col-md-3 col-md-offset-6">
					<button  type="button" class="btn btn-mini superradiusin col-md-12" style="float:right; margin: 8px 5px 0 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;"> <strong>Registrar Pagos Seleccionados</strong> </button>
	    		</div>
	    		<div class="col-md-3">
					<button type="button" class="btn btn-mini superradiusin col-md-12 col-md-pull-1" style="float:right; margin: 8px 5px 0 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;"> <strong>Generar Recibos Seleccionados</strong> </button>
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
									<td> <input type="checkbox" value=""></td>
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
									<td> <input type="checkbox" value=""></td>
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
									<td> <input type="checkbox" value=""></td>
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
									<td> <input type="checkbox" value=""></td>
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
									<td> <input type="checkbox" value=""></td>
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
									<td> <input type="checkbox" value=""></td>
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
									<td> <input type="checkbox" value=""></td>
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

			<div class="clearfix"></div>
		<div class="row" style="overflow:hidden; margin-bottom: 5px;">
			<div class="col-md-12">
				<div class="col-md-3 col-md-offset-6">
					<button  type="button" class="btn btn-mini superradiusin col-md-12 col-md-push-1" style="float:right; margin: 8px 5px 0 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;"> <strong>Registrar Pagos Seleccionados</strong> </button>
	    		</div>
	    		<div class="col-md-3">
					<button type="button" class="btn btn-mini superradiusin col-md-12" style="float:right; margin: 8px 5px 0 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;"> <strong>Generar Recibos Seleccionados</strong> </button>
	    		</div>
			</div>
		</div>  

		</div>
	</div>
</div>

 <!-- MODAL DE GENERAR RECIBO-->

<div class="modal fade in" id="generarrecibos" data-backdrop="static"  >
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="background-color: #FAFAFA; height: 80px; border:0px solid">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center" id="modaltitulo" style=" padding-top:5px; padding-left:15px; " > <strong> Casa Monterrey en ciudad satelite 1-A</strong> </h3>

      </div>
  		 <!--<h4 class="modal-title">Modal title</h4>-->
  		 <!--
  		 http://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=carousel-methods
  		 http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/bootstrap-carousel.php
  		 http://stackoverflow.com/questions/10521165/bootstrap-javascript-carousel-doesnt-stop-cycling
		
      	-->
      <div class="modal-body" style="border:0px solid; overflow:hidden;">  <!-- overflow:hidden-->    	
      	<div class="bs-example" syle="width:100%; overflow:hidden; margin:-10px"><!-- overflow:hidden-->
		    <div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel" style="width:80%; float:left; border:0px solid; margin:0px; padding:0px;">
		        <!-- Carousel items -->
		        <div class="carousel-inner " style="whidth:100%; padding:0px;">
		        	

		            <div class="active item" style="background-color: white; padding:0px; width:100%; ">
		            	<!-- INICIO DE FORMULARIO -->
		            	<div class="row" style="height:140px;">
		            		<div class="col-md-3">
		            			<div class="col-md-4" >
		            				<div class="col-md-12 col-md-push-0" style="border:1px solid; width:120px; height:130px; background-color: gray"></div>
		            			</div>
		            		</div>
		            		<div class="col-md-5 ">
		            			<div class="col-md-12 col-md-push-1 text-left"> <strong>Nombre/Razon social del dueño</strong> </div>
	            				<div class="col-md-12 col-md-push-1 text-left" style="margin-top: 10px">Nomrbe de la calle, Núm Ext</div>
	            				<div class="col-md-12 col-md-push-1 text-left">Nombre de la colonia</div>
	            				<div class="col-md-12 col-md-push-1 text-left">Municipio, Estado</div>
	            				<div class="col-md-12 col-md-push-1 text-left">Pais, C.P.</div>
	            				<div class="col-md-12 col-md-push-1 text-left">RFC</div>		            			
		            		</div>
		            		<div class="col-md-4 ">
		            			<div class="col-md-10 col-md-push-1 text-center" style="border-width: 1px 1px 0 1px; border-style: solid; border-color: gray;">Recibo #1</div>
	            				<div class="col-md-10 col-md-push-1 text-center" style=" border-width: 0 1px 0 1px; border-style: solid; border-color: gray;">Fecha</div>
	            				<div class="col-md-10 col-md-push-1 text-center " style=" border: 1px solid gray;">17/02/2015 19:30:00</div>
		            		</div>			                  
	                	</div>

	                	<div class="row " style="margin-top:15px">
	                		<div class="col-md-12">
		            			<div class="col-md-12" >
		            				<div class="col-md-12 col-md-offset-0" style="border: 1px solid gray">Receptor del recibo de Arrendamiento</div>
		            			</div>
		            		</div>
	                	</div>

	                	<div class="row " style=" ">
	                		<div class="col-md-12">

		            			<div class="col-md-9" style ="" >
		            				<div class="col-md-12" style="border-width: 0px 0px 1px 1px; border-style: solid; border-color: gray;">
		            					<div class="col-md-9" style="margin-top: 8px">
		            						 	<input type="text" maxlength="30" value="Nombre/Razón Social del Inquilino" class="form-control superradiusin input-sm" id="" name=""  placeholder="">					   
		            					</div>
		            					<div class="col-md-10 " style="margin-left:-15px; margin-top: 4px">
		            						<div class="col-md-6">		            							
		            								<input type="text" maxlength="30" value="Nombre de Calle" class="form-control superradiusin input-sm" id="" name=""  placeholder="">					   		            									               							
		            						</div>
		            						<div class="col-md-3">
		            							<input type="text" maxlength="30" value="Núm ext" class="col-md-pull-1 form-control superradiusin input-sm col-md-4" id="" name=""  placeholder="">					   		            							
		            						</div>
		            						<div class="col-md-3">
		            								 	<input type="text" maxlength="30" value="Núm int" class="col-md-pull-3 form-control superradiusin input-sm col-md-4" id="" name=""  placeholder="">					   		            					
		            					 	</div>
		            					</div>
		            					<div class="col-md-8" style="margin-left:-15px; margin-top: 4px">
		            						<div class="col-md-11" >			            							
			            							<input type="text" maxlength="30" value="Colonia" class="form-control superradiusin input-sm" id="" name=""  placeholder="">					   		            									               							
							           						
            								</div>		            						
		            					</div>
		            					
		            					<div class="col-md-8" style="margin-left:-15px; margin-top: 4px">
		            						<div class="col-md-5" >			            							
			            							<input type="text" maxlength="30" value="Municipio" class="form-control superradiusin input-sm" id="" name=""  placeholder="">					   		            									               											           							
            								</div>	
            								<div class="col-md-5" >			            							
			            							<input type="text" maxlength="30" value="Estado" class="form-control superradiusin input-sm" id="" name=""  placeholder="">					   		            									               											           							
            								</div>		            						
		            					</div>
		            					<div class="col-md-8" style="margin-left:-15px; margin-top: 4px; margin-bottom:8px;">
		            						<div class="col-md-5" >			            							
			            							<input type="text" maxlength="30" value="País" class="5 form-control superradiusin input-sm" id="" name=""  placeholder="">					   		            									               											           							
            								</div>		
            								<div class="col-md-5" >			            							
			            							<input type="text" maxlength="30" value="C.P" class="form-control superradiusin input-sm" id="" name=""  placeholder="">					   		            									               											           							
            								</div>	            						
		            					</div>
		            				</div>
		            			</div>
		            			<div class="col-md-3" style="border-width: 0px 1px 1px 0; border-style: solid; border-color: gray; height:181px; margin-left:-15px;" >
			            			<div class="col-md-12 col-md-pull-3" >
			            				<div class="col-md-5" style="">



			            				</div>
			            			</div>
            					</div>	
		            		</div>
		            		
	                	</div>

	                	<div class="row " style="margin-top:20px">
	                		<div class="col-md-12">
		            			<div class="col-md-12" >
		            				<div class="col-md-2" style="border: 1px solid gray; height:44px; padding-top: 10px;">Cantidad</div>
		            				<div class="col-md-2" style="border: 1px solid gray; height:44px;">Unidad de Medida</div>
		            				<div class="col-md-4" style="border: 1px solid gray; height:44px;">Descripción de Concepto</div>
		            				<div class="col-md-2" style="border: 1px solid gray; height:44px;">Precio Unitario</div>
		            				<div class="col-md-2" style="border: 1px solid gray; height:44px; padding-top: 10px;">Importe</div>
		            			</div>
		            		</div>
	                	</div>

	                	<div class="row " style="margin-top:0px">
	                		<div class="col-md-12">
		            			<div class="col-md-12" >
		            				<div class="col-md-2" style="border: 1px solid gray; height:44px; padding-top: 10px;">1</div>
		            				<div class="col-md-2" style="border: 1px solid gray; height:44px; padding-top: 5px;">
		            					<input type="text" maxlength="30" value="Renta" class="form-control superradiusin input-sm" id="" name=""  placeholder="">					   		            									               											           							            								
		            				</div>
		            				<div class="col-md-4" style="border: 1px solid gray">
		            					<textarea class="form-control superradiusin" rows="2" id="nicomentarios" style="resize: none; padding:0px;">Renta de Casa de Monterrey en Ciudad SatéliteNúmero </textarea>
		            				</div>
		            				<div class="col-md-2" style="border: 1px solid gray; height:44px; padding-top: 5px;">
		            					<input type="text" maxlength="30" value="10,000.00" class="form-control superradiusin input-sm" id="" name=""  placeholder="">
		            				</div>
		            				<div class="col-md-2" style="border: 1px solid gray; height:44px; padding-top: 10px;">10,000.00</div>		            				
		            			</div>
		            		</div>
	                	</div>

	                	<div class="row " style="margin-top:10px">
	                		<div class="col-md-12">
		            			<div class="col-md-12 " >
		            				<div class="col-md-7 col-md-pull-0" style="height:44px; padding-top: 10px;">
		            					<button  class="col-md-5 col-md-pull-0" type="button" class="btn btn-mini superradiusin" style="color: gray; border: 3px solid #FAFAFA; border-top: none; border-left: none; background-color:white;"> <strong>Agregar Concepto</strong> </button>
		            				</div>
		            			</div>
		            		</div>
	                	</div>

	                	<div class="row " style="margin-top:20px;">
	                		<div class="col-md-12">
		            			<div class="col-md-12" style="" >
		            				<div class="col-md-8" style=" padding-top: 10px;  border: 1px solid gray;">
		            					<div class="col-md-12 col-md-pull-1 text-left " style=" ">
		            					<div  class="col-md-4"><strong>Forma de pago: </strong></div>	<div class="col-md-6 col-md-pull-1">Pago en una sola exhibición</div>
		            					</div>
		            					<div class="col-md-12 col-md-pull-1 text-left" style="">		            						
		            						<div  class="col-md-4"><strong>Método de pago: </strong></div>	
		            						<div class="col-md-6 col-md-pull-0">
		            							<input type="text" maxlength="30" value="No identificado" class="form-control superradiusin input-sm" id="" name=""  placeholder="">		            				
		            						</div>		            					
		            					</div>
		            					<div class="col-md-12 col-md-pull-1 text-left" style="padding-top: 10px;">
		            						<div  class="col-md-5"><strong>Lugar de expedición:</strong></div>	<div class="col-md-6 col-md-pull-1">Nuevo León</div>
		               					</div>
		            				</div>	
		            				<div class="col-md-4 zxc " style=" padding-top: 10px;   border: 1px solid gray; border-left: 0px; height: 93px;">
		            					<div class="col-md-12" style="padding-top: 5px;">
		            						<div  class="col-md-4 col-md-pull-2">Subtotal</div>	<div class="col-md-6 col-md-push-2 ">$10,000.00</div>
		               					</div>
		               					
		               					<div class="col-md-12" style="padding-top: 10px; border-top:1px solid; margin-top: 20px">
		            						<div  class="col-md-4 col-md-pull-2"><strong>Total</strong></div>	<div class="col-md-6 col-md-push-2 text-rigth"><strong>$10,000.00</strong></div>
		               					</div>

		            				</div>            				
		            				
		            			</div>
		            		</div>
	                	</div>

	                	
	                

		                

		            </div>
		            <div class="item" >		 
		            	<!-- segundo slider -->
		                
		            </div>
		            <div class="item" style="background-color: white;">
		            	<input type="text">
		            	<input type="text">
		            	<!--
		                <h2>Slide 3</h2>
		                <div class="carousel-caption">
		                  <h3>Third slide label</h3>
		                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
		                </div>-->
		            </div>
		        </div>
		    </div>
		    <!-- Controls buttons -->
		    <div class="control-buttons" style="color:#1db2a4; width:18%; min-height:700px; float:left; border-left: 1px solid gray; padding-top:15px;">		        		       
		        <div class="row">
		        	<div class="btn" id="uno" onClick="cambiarform(0)" class="col-md-12"> <strong>Casa Monterrey...</strong>  </div>
		        </div>	 
		        <div class="row">
		        	<div class="btn" onClick="cambiarform(1)" class="col-md-12"><strong>Casa Monterrey...</strong> </div>
		        </div>	
		        <div class="row">
		        	<div class="btn" onClick="cambiarform(2)" class="col-md-12"><strong>Casa Monterrey...</strong> </div>
		        </div>	       		      
		    </div>
		</div>      	

      </div>     
       <div class="modal-footer">
      

      	

      </div> 
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


 <!-- MODAL DE GENERAR RECIBO-->


<?php include 'footer.php';?>
<script>
	function cambiarform(cambio){	
		$("#myCarousel").carousel(cambio);
		//$("#myCarousel").carousel('pause');	
	}

$(document).ready(function() {
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});
	$('#generarrecibos').modal({
	        show: 'true'
	    });  
	
	//setTimeout('window.location.href="recibos.php"', 2000);
});



</script>
