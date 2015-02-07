<?php include 'header.php';?>

<div class="col-md-12 pull-right">
	<div class="col-md-6">
		<ol class="breadcrumb">
			<li><a href="">Inicio</a></li>
			<li class="active"><a href="#">Dueños</a></li>
			
		</ol>
	</div>
	
	<div class="col-md-6">
		<h3 class="pull-right">
			<a href="#" title="Agregar dueño" class="btn-add-propiedad no-decoration" data-toggle="modal" data-target="#adddueno">
				<span class="label label-warning"  >Agregar Dueño</span>
				<!-- class="btn btn-primary btn-large"-->				
			</a>
		</h3>
	</div>
</div>

<div class="col-md-12 pull-right" style="padding:20px 5px 20px 0;">
	<div class="col-md-6"></div>
	<div class="col-md-6 pull-right input-group">
		<div class="col-md-5">
			<input type="text" class="form-control col-md-6" placeholder="Buscar un dueño" name="srch-term" id="srch-term">
		</div>
		
		
		<div class="col-md-1 input-group-btn" style="margin-left:-33px;">
			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		</div>
		
		<div class="col-md-6">
			<select name="" class="col-md-4 form-control box-shadow" style="margin-left:40px;">
				<option>Ordernar por...</option>
				<option>Nombre</option>
				<option>Contrato</option>
			</select>
		</div>
	</div>
</div>

<!-- dueños -->
<div class="col-md-12 section-inquilinos" style="padding:initial; margin-top:10px;">
	
	<div class="col-md-12 border-bottom">
		<div class="col-md-12 title-section-inquilino" id="title-recibos-propiedad" data-toggle="collapse" href="#collapse-recibos-propiedad" aria-expanded="true" aria-controls="#collapse-recibos-propiedad">
			<div class="col-md-5">
				<div class="arrow-left"></div> <span class="pointer underline OpenSansBold">Nombre completo del Dueño</span>
			</div>
			<div class="col-md-5 text-right">
				<img style="" src="css/images/inquilinos-contacto-tel.png" alt="Conacto inquilino telefono" 
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 &nbsp;&nbsp;&nbsp;&nbsp; Celular: 044 81 15 43 99 62 &nbsp;&nbsp;&nbsp; Correo: caarloshugo@gmail.com"/>
				
				<img style="margin-left:40px;" src="css/images/inquilinos-contacto-correo.png" alt="Conacto inquilino telefono" 
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 Celular: 044 81 15 43 99 62 Correo: caarloshugo@gmail.com"/>
			</div>
			<!--
			<div class="col-md-5">
				Contrato: <a href="" title="Contrato" class="color-link underline">Oficinas en rio bravo #45</a>
			</div>
			-->
		</div>
		
		<div class="col-md-12 collapse" id="collapse-recibos-propiedad" style="margin-top:20px;">
			<div class="col-md-12" style="padding:0 20px 20px 20px;">
				Hola
			</div>
		</div>
	</div>
	
	<div class="col-md-12 border-bottom">
		<div class="col-md-12 title-section-inquilino" id="title-cuenta-propiedad" data-toggle="collapse" href="#collapse-cuenta-propiedad" aria-expanded="true" aria-controls="#collapse-cuenta-propiedad">
			<div class="col-md-5">
				<div class="arrow-left"></div> <span class="pointer underline OpenSansBold">Nombre completo del dueño</span>
			</div>
			<div class="col-md-5 text-right" >
				<img style="" src="css/images/inquilinos-contacto-tel.png" alt="Conacto inquilino telefono"
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 &nbsp;&nbsp;&nbsp;&nbsp Celular: 044 81 15 43 99 62 &nbsp;&nbsp;&nbsp;&nbsp Correo: caarloshugo@gmail.com"/>
				<img style="margin-left:40px;" src="css/images/inquilinos-contacto-correo.png" alt="Conacto inquilino telefono"
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 Celular: 044 81 15 43 99 62 Correo: caarloshugo@gmail.com"/>
			</div>
			<!--
			<div class="col-md-5">
				Contrato: <a href="" title="Contrato" class="color-link underline">Oficinas en rio bravo #45</a>
			</div>
		-->
		</div>
		
		<div class="col-md-12 collapse" id="collapse-cuenta-propiedad" style="padding:5px 20px 5px 20px;">	
			<div class="col-md-11" style="border-bottom:1px solid #ccc; padding:20px 0 20px 0; margin-left:-9px">
				<div class="col-md-12" style="padding:initial;">
					<div class="col-md-2 text-left" style="padding: 0px; border:0px solid;">
						<span class="text-gray"> <img style="width:20px; height: 20px; overflow:hidden" src="iconos/02-Dashboard-InfoToolTip.png">  Logotipo</span>
					</div>
					<div class="col-md-4" style="margin-left:-50px;" >
						<span class="text-gray">
							<div class="col-md-4" style="border:1px solid; height: 80px;"></div>

						</span>
					</div>
				<!--
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">Casa de monterrey en romero de terreros</span>
					</div>
				-->
				</div>
				<!--
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
				
					<div class="col-md-2 ">
						<span class="text-gray">Contrato 2:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">Casa en Colima, Colima</span>
					</div>
				
				</div>
				-->
			</div>
			<div class="col-md-11" style="border-bottom:1px solid #ccc; padding:20px 0 20px 0; margin-left: -9px">
				<div class="row">
					<div class="col-md-2"> <span class="text-gray">  <img style="width:20px; height: 20px; overflow:hidden" src="iconos/02-Dashboard-InfoToolTip.png"> propiedades</span> </div>
					<div class="col-md-10" style="margin-left:-50px;">case de monterrey en Satélite Numero 1-A</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10" style="margin-left:-50px;"  >Propiedad 2</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10" style="margin-left:-50px;"  >Propiedad 3</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10" style="margin-left:-50px;"  >Propiedad 3</div>
				</div>
				
				
			</div>
			
			<div class="col-md-1 pull-right">
				<a href="" class="a-trash left-10px pull-right">
					<img src="css/images/trash.png" alt="Borrar Propiedad"/>
				</a>
				
				<a href="" class="a-edit-propiedad pull-right">
					<img src="css/images/editar.png" alt="Editar Propiedad"/>
				</a>
			</div>
			
			<div class="col-md-11" style="border-bottom:1px solid #ccc; padding:20px 0 20px 0;">
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Tel. Casa:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">565589752</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Celular:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">0443121138379</span>
					</div>
				</div>
				<!--
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Tel Oficina:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black"></span>
					</div>
				</div>
				-->
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Correo 1:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">caarloshugo@gmail.com</span>
					</div>
				</div>
				<!--
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Correo 2:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black"></span>
					</div>
				</div>
			-->
			</div>
			<div class="col-md-1"></div>
			
			<div class="col-md-11" style="border-bottom:1px solid #ccc; padding:20px 0 20px 0;">
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2 ">
						<span class="text-gray">RFC:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">GOCC880405789</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2">
						<span class="text-gray">Dirección:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">
							Paseo del Acueducto, #6519<br/>
							Col. Ciudad Satélite, C.P. 64960<br/>
							Monterrey, Nuevo León,<br/>
							México
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			
			<div class="col-md-11" style="border-bottom:1px solid #ccc; padding:20px 0 20px 0;">
				<div class="col-md-12" style="padding:initial; padding-top:10px;">
					<div class="col-md-2 ">
						<span class="text-gray">Comentarios:</span>
					</div>
					<div class="col-md-10" style="margin-left:-50px;">
						<span class="text-black">Comentarios sobre el dueño.</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding:initial; padding-top:20px; margin-left: -9px; border:0px solid">
					<div class="col-md-2" style=" padding-left: 0px;" >
						<span class="text-gray"><img style="width:20px; height: 20px; overflow:hidden;" src="iconos/02-Dashboard-InfoToolTip.png"> Documentos:</span>
					</div>
					<div class="col-md-4" style="margin-left:-50px; padding-right:0px;">
						<input type="text" class="form-control" readonly>
					</div>
					<div class="col-md-2" style="padding:initial;">
						<span class="input-group-btn">
							<span class="btn btn-file btn-finish no-decoration" style="border:1px solid #ccc;">
								Seleccionar <input type="file" multiple>
							</span>
						</span>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-2"></div>
					<div class="col-md-4 title-datos" style="margin-left:-50px;">
						<a href="" title="Documento">Escrituras_casa_monterrey.pdf</a>
					</div>
					<div class="col-md-3">
						<a href=""><img src="css/images/vista-previa.png" alt="Vista previa"/></a>
						<a href="" style="margin-left:15px;"><img src="css/images/descargar.png" alt="Descargar"/></a>
						<a href="" style="margin-left:15px;"><img src="css/images/eliminar.png" alt="Eliminar"/></a>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="col-md-2"></div>
					<div class="col-md-4 title-datos" style="margin-left:-50px;">
						<a href="" title="Documento">Escrituras_casa_monterrey.pdf</a>
					</div>
					<div class="col-md-3">
						<a href=""><img src="css/images/vista-previa.png" alt="Vista previa"/></a>
						<a href="" style="margin-left:15px;"><img src="css/images/descargar.png" alt="Descargar"/></a>
						<a href="" style="margin-left:15px;"><img src="css/images/eliminar.png" alt="Eliminar"/></a>
					</div>
				</div>
				<!--
				<div class="col-md-12" style="padding:initial; padding-top:30px;">
					<div class="col-md-8" style="padding:initial;">
						<div class="table-responsive">
							<table class="table table-regular-2">
								<tbody>
									<tr>
										<td class="text-gray">
											Inquilino de <a href="" title="" class="color-link underline">Nombre de la propiedad de 01/02/2013 a 01/02/2014</a>
											<a href="" title="Borrar historial" class="pointer close-x pull-right">x</a>
										</td>
									</tr>
									<tr>
										<td class="text-gray">
											Inquilino de <a href="" title="" class="color-link underline">Nombre de la propiedad de 01/02/2013 a 01/02/2014</a>
											<a href="" title="Borrar historial" class="pointer close-x pull-right">x</a>
										</td>
									</tr>
									<tr class="text-gray">
										<td>
											Inquilino de <a href="" title="" class="color-link underline">Nombre de la propiedad de 01/02/2013 a 01/02/2014</a>
											<a href="" title="Borrar historial" class="pointer close-x pull-right">x</a>
										</td>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			-->
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	<div class="col-md-12 border-bottom">
		<div class="col-md-12 title-section-inquilino pointer" id="title-historial-propiedad"  data-toggle="collapse" href="#collapse-historial-propiedad" aria-expanded="true" aria-controls="#collapse-historial-propiedad">
			<div class="col-md-5">
				<div class="arrow-left"></div> <span class="pointer underline OpenSansBold">Nombre completo del dueño</span>
			</div>
			<div class="col-md-5 text-right">
				<img style="" src="css/images/inquilinos-contacto-tel.png" alt="Conacto inquilino telefono" 
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 &nbsp;&nbsp;&nbsp;&nbsp; Celular: 044 81 15 43 99 62 &nbsp;&nbsp;&nbsp; Correo: caarloshugo@gmail.com"/>
				
				<img style="margin-left:40px;" src="css/images/inquilinos-contacto-correo.png" alt="Conacto inquilino telefono" 
				data-toggle="tooltip" 
				data-placement="bottom"
				title="Casa: 01 81 83 66 55 88 Celular: 044 81 15 43 99 62 Correo: caarloshugo@gmail.com"/>
			</div>
			<!--
			<div class="col-md-5">
				Contrato:
			</div>
		-->
		</div>
		
		<div class="col-md-12 collapse" id="collapse-historial-propiedad" style="margin-top:20px;">
			<div class="col-md-12" style="padding:0 20px 20px 20px;">
				Hola 3
			</div>
		</div>
	</div>
</div>
<!-- MODAL AGRAGAR INQUILINOS -->

<div class="modal fade in" id="adddueno" data-backdrop="static"  >
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="background-color: #FAFAFA; border: 0px; height: 80px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" style=" padding-top:5px; padding-left:15px; " ><img style="width:30px; height: 30px; overflow:hidden;  padding:0px;" src="iconos/02-Dashboard-InfoToolTip.png"> <strong> Nuevo Dueño</strong> </h3>
      </div>
      <div class="modal-body">
      	<!-- cabecera -->

      	<form class="form-horizontal" role="form">
      		<div style="border:0px solid; overflow:hidden; margin-bottom:5px;" >
  			<div class="col-xs-8" style="border:0px solid; ">
				 <label for="inoptradio" class="col-lg-0 control-label" style="float:left; margin-left:-5px; ">Tipo de Persona*</label>
			 	<div class="radio" style="float:left; width:150px; text-align: center;">
			      <label><input type="radio" name="optradio" checked>Persona física</label>
			    </div>
			    <div class="radio" style="float:left; width:150px; text-align: center; ">
			      <label><input type="radio" name="optradio">Persona Moral</label>
			    </div>
			</div>
			<div class="col-xs-4" style="border:0px solid; overflow:hidden;">
				<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 0px; background-color: #1db2a4; color: white; "><strong>Guardar Cambios</strong></button>
				<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;" data-dismiss="modal"> <strong>Cancelar</strong> </button>
        		
			</div>

      		</div>
       	<!-- cuerpo -->
	       	<div style="border: 0px solid; overflow:hidden; width:880px"  >
	      		<div class="form-group">
	      			
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="niNombres" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Nombre*</label>
				    	<div class="col-xs-10" style="overflow: hidden; border: 0px solid; margin-left:15px;">
					    		<input style="width:200px; float: left;" type="text" class="form-control superradiusin" name ="niNombres" id="niNombres" maxlength="30"  placeholder="Nombres(s)">
						    	<input style="width:170px; float: left; margin-left:15px;" type="text" class="form-control superradiusin" maxlength="30" name ="niapepaterno" id="niapepaterno"  placeholder="Apellido Paterno">
						    	<input style="width:170px; float: left; margin-left:15px;" type="text" class="form-control superradiusin" maxlength="30" name ="niapematerno" id="niapematerno"  placeholder="Apellido Materno">						   
					     </div>
					 </div>

				    <br><br><hr style="width:740px; overflow:hidden; float:left; margin-left: 35px;">

				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px; height:130px;">
				    	<label for="niaddlogotipo" class="col-lg-1 control-label" style="overflow:hidden; width:90px; overflow:hidden; padding:0px; border:0px solid; text-align: left; margin-left: -2px"> <img style="width:20px; height: 20px; overflow:hidden" src="iconos/02-Dashboard-InfoToolTip.png"> Logotipo:</label>				    	
				    	<div class="col-xs-4"><input type="text" class="form-control col-xs-6 input-sm" maxlength="20" id="niaddlogotipo" name="niaddlogotipo"  placeholder=""></div>
				    </div>

				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="niaddpropiedad" class="col-lg-1 control-label" style="overflow:hidden; width:160px; overflow:hidden; padding:0px; border:0px solid; text-align: left; margin-left: -2px"> <img style="width:20px; height: 20px; overflow:hidden" src="iconos/02-Dashboard-InfoToolTip.png"> Agregar Propiedades:</label>				    	
				    	<div class="col-xs-4">
				    		<select name="" class="col-md-4 col-md-pull-1 form-control box-shadow" style="margin-left:40px;">
								<option>Propiedad...</option>
								<option>Casa moterrey</option>
								<option>casa monterrey</option>
							</select>
				    		<!--
				    		<input type="text" class="form-control superradiusin col-xs-6 input-sm" maxlength="20" id="niaddpropiedad" name="niaddpropiedad"  placeholder="">
				    		-->
				    	</div>
				    </div>

				     <br><br><hr style="width:740px; overflow:hidden; float:left; margin-left: 35px;">
				    
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="nitelcasa" class="col-lg-1 control-label"  style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Tel. Casa:</label>
				    	<div class="col-xs-4"><input type="text" class="form-control superradiusin col-xs-6 input-sm" maxlength="20" id="nitelcasa" name="nitelcasa"  placeholder=""></div>
				    	 <label for="niemail1" class="col-lg-1 control-label" style="overflow:hidden; width:100px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo 1:</label>
					    <div class="col-xs-4"><input style="width:290px;" type="text" class="form-control superradiusin input-sm" maxlength="30" id="niemail1" name="niemail1"  placeholder=""></div>
				    
				    </div>
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="nicelular" class="col-lg-1 control-label"  style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Celular:</label>
					    <div class="col-xs-4"><input type="text" class="form-control superradiusin input-sm" maxlength="20" id="nicelular" name="nicelular"  placeholder=""></div>
				     	<label for="niemail2" class="col-lg-1 control-label" style="overflow:hidden; width:100px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo 2:</label>
					    <div class="col-xs-4"><input style="width:290px;" type="text" class="form-control superradiusin input-sm" maxlength="20" id="niemail2" name="niemail2"  placeholder=""></div>
				    
				    </div>
					<div class="col-xs-10" style="border:0px solid; margin-bottom:6px; margin-left: 10px;">
				    	<label for="nitelofi" class="col-lg-1 control-label" style="overflow:hidden; width:90px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Tel. Oficina:</label>
					    <div class="col-xs-4"><input style="margin-left: -5px;" type="text" maxlength="20" class="form-control superradiusin input-sm" id="nitelofi" name="nitelofi"  placeholder=""></div>
				    </div><!--
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="niemail1" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Correo 1:</label>
					    <div class="col-xs-6"><input type="text" class="form-control superradiusin input-sm" maxlength="30" id="niemail1" name="niemail1"  placeholder=""></div>
				    </div>
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="niemail2" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Correo 2:</label>
					    <div class="col-xs-6"><input type="text" class="form-control superradiusin input-sm" maxlength="20" id="niemail2" name="niemail2"  placeholder=""></div>
				    </div>
		    		-->
				    <br><br><hr style="width:740px; overflow:hidden; float:left; margin-left: 35px;">

				    <div class="col-xs-10" style="border:0px solid; margin-bottom:6px; margin-left: 10px;">
				    	<label for="nirfc" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">RFC:</label>
					    <div class="col-xs-8"><input type="text" class="form-control superradiusin input-sm" maxlength="30" id="nirfc" name="nirfc"  placeholder=""></div>
				    </div>
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="ninomcalle" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Dirección:</label>
				    	 <div class="col-xs-10" style="overflow: hidden">
			    	 	   <input style="width:335px; float: left;" type="text" maxlength="30" class="form-control superradiusin input-sm" id="ninomcalle" name="ninomcalle"  placeholder="Nombre de la Calle">
						    <input style="width:104px; float: left; margin-left:15px;" type="text" maxlength="10" class="form-control input-sm" id="ninumint" name="ninumint"  placeholder="Núm. Ext">
						    <input style="width:104px; float: left; margin-left:15px;" type="text" maxlength="10" class="form-control input-sm" id="ninumext" name="ninumext"  placeholder="Núm. Int">				    
				    	 </div>

					 </div>
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="ninomcolonia" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px"></label>
					     <div class="col-xs-8" style="overflow: hidden">
					     	<input style="width:335px; float: left;" type="text" maxlength="30" class="form-control superradiusin input-sm" id="ninomcolonia" name="ninomcolonia"  placeholder="Nombre de la Colonia">
					    	<input style="width:104px; float: left; margin-left:15px;" maxlength="30" type="text" class="form-control input-sm" id="ninumcp" name="ninumcp"  placeholder="C.P.">
					    </div>					   
					 </div>

					 <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="ninomcciudad" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px"></label>
					    <div class="col-xs-8" style="overflow: hidden">
					    	<input style="width:141px; float: left;" type="text" maxlength="30" class="form-control superradiusin input-sm" id="ninomcciudad" name="ninomcciudad"  placeholder="Ciudad">
					    	<input style="width:141px; float: left; margin-left:15px;" type="text" maxlength="30" class="form-control superradiusin input-sm" id="ninomestado" name="ninomestado"  placeholder="Estado">
					    	<input style="width:141px; float: left; margin-left:15px;" type="text" maxlength="30" class="form-control superradiusin input-sm" id="ninompais" name="ninompais"  placeholder="País">
					    </div>
					 </div>

					  <br><br><hr style="width:740px; overflow:hidden; float:left; margin-left: 35px;">

					  <div class="col-xs-10" style="border:0px solid; margin-bottom:6px; margin-left: 10px;">
				    	<label for="nicomentarios" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px" maxlength="200">Comentarios</label>
					    <div class="col-xs-8" style="overflow: hidden">
					   		<textarea class="form-control superradiusin" rows="2" id="nicomentarios" style="resize: none;"></textarea>
					   </div>
					 </div>
					 <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: -0px;">
				    	  <label for="nidocumentos" class="col-lg-1 control-label" style="overflow:hidden; width:107px; overflow:hidden; padding:0px; border:0px solid; text-align: left; margin-left: -2px"> <img style="width:20px; height: 20px; overflow:hidden" src="iconos/02-Dashboard-InfoToolTip.png"> Documentos</label>
					    <div class="col-xs-8" style="overflow: hidden; padding-left: 0px; border:0px solid; margin-left:-10px;">
				    		<input style="width:295px; float: left; margin-left:15px; margin-right:25px; background-color: white" maxlength="200" type="text" class="form-control superradiusin" id="nitexturldocument" name="nitexturldocument"  placeholder="" disabled>					    
					    	<span class="btn btn-file superradiusin" style="color: black; border: 2px solid #FAFAFA; border-top: none; border-left: 3px solid #FAFAFA; background-color:white;">
					    		<strong>Seleccionar</strong>  <input id="nidocumentofile" class="btn btn-mini superradiusin" type="file" >
					    	</span>
					   		<!--<input type="file" class="form-control" id="nidocumentos" placeholder="d" style="max-width: 70%" value="d"/>					-->
					   </div>
					 </div>

				    <!--
				    http://plugins.krajee.com/file-input/demo
				    http://nakupanda.github.io/bootstrap3-dialog/				        
			    	-->
				</div>	

	  		</div>
	  		<div style="border:0px solid; overflow:hidden; margin-bottom:3px;" >
		  			<div class="col-xs-8" style="border:0px solid; ">
						
					</div>
					<div class="col-xs-4" style="border:0px solid; overflow:hidden;">
						<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 0px; background-color: #1db2a4; color: white; "><strong>Guardar Cambios</strong></button>
						<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;" data-dismiss="modal"> <strong>Cancelar</strong> </button>
		        		
					</div>
      			</div> 

  		</form>	

      </div>     
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
$(function(){
	/*
	$('#adddueno').modal({
        show: 'true'
    }); 
	*/	  
})
$("#nidocumentofile").change(function(){
       var fileName = $(this).val();
       $("#nitexturldocument").val(fileName);
 });
</script>

<?php include 'footer.php';?>
