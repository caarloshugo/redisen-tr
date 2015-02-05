<?php include 'header.php';?>

<div class="col-md-12 pull-right">
	<div class="col-md-6">
		<ol class="breadcrumb">
			<li><a href="">Inicio</a></li>
			<li><a href="#">Propiedades</a></li>
			<li class="active"><a href="#">Agregar Propiedad</a></li>
		</ol>
	</div>
</div>

<!-- Step Process Contrato -->
<div class="col-md-12 section-propiedad" style="padding:10px; margin-top:10px;">
	<div class="col-md-12 pull-right">
		<a href="" title="Cerrar" class="pointer close-x pull-right">x</a>
	</div>
	
	<div class="col-md-10 col-md-offset-1 step-process-contrato text-center">
		<div class="col-md-4 step-active" id="section-step-1">
			<div class="col-md-12">
				<div class="circle-blue">1</div>
			</div>
			<div class="col-md-12 black-bold">Ingresa los Datos Fiscales del Dueño</div>
			<div class="col-md-12 padding-top-15">
				<img style="margin-left:-20px;" src="css/images/step-facturas-1.png" alt="Paso 1 - Datos fiscales del Dueño"/>
			</div>
		</div>
		
		<div class="col-md-4 step-inactive" id="section-step-2">
			<div class="col-md-12">
				<div class="circle-blue">2</div>
			</div>
			<div class="col-md-12 black-bold">Completa los Datos Fiscales del Inquilino</div>
			<div class="col-md-12 padding-top-15">
				<img style="margin-left:-20px;" src="css/images/step-facturas-3.png" alt="Paso 2 - Datos fiscales del inquilino"/>
			</div>
		</div>
		
		<div class="col-md-4 step-inactive" id="section-step-3">
			<div class="col-md-12">
				<div class="circle-blue">3</div>
			</div>
			<div class="col-md-12 black-bold">Verifica el monto</div>
			<div class="col-md-12 padding-top-15">
				<img style="margin-left:-20px;" src="css/images/step-facturas-2.png" alt="Paso 3 - Datos fiscales del inquilino"/>
			</div>
		</div>
	</div>
	
	<form name="step-process-contrato" id="step-process-factura">
		<!-- Step 1 -->
		<div class="col-md-12 col-md-offset-1" style="padding:40px 20px 20px 20px;" id="step-1">
			<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Dueño</div>

			<div class="col-md-8 section-process-form" id="section-datos-propiedad" style="padding:30px 0 0 20px; ">
				<div class="col-md-12" style="padding: 0px; padding-top:10px;">
					<div class="col-md-4 " style="padding:0px;"> <a href="#" data-toggle="modal" data-target="#modal-dueno-existente"> Dueño existente</a></div>
					<div class="col-md-6" style="margin-left:-50px">
						<!--<input type="text" class="form-control col-md-2" name="nombre-razon-social" id="nombre-razon-social" required>-->
						<select class="form-control">
						  <option value="id">marcos julio hernandes</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
					</div>
				</div>

				<div class="row" style="margin-top:70px" >					
					<div class="col-md-4" style="border:0px solid;"> <hr> </div>
					<div class="col-md-1" style="height: 43px; padding-top:10px ;border:0px solid; margin-left: -20px" >O</div>
					<div class="col-md-4" style="border:0px solid; margin-left: -40px"> <hr> </div>
				</div>
				<div class="row" style="margin-top:45px">
					<div class="col-md-4"> <a href="#" style="color:#1db2a4" data-toggle="modal" data-target="#modal-dueno-nuevo"> <strong> Agregar Nuevo</strong></a> </div>
				</div>
				<!--
				<div class="col-md-12 pull-right" style="padding-top:30px;">
					<h4 class="pull-right">
						<a id="next-step-2" title="Siguiente" class="btn-add-propiedad no-decoration">
							<span class="label label-warning"><img src="css/images/candado.png"/> Siguiente </span>
						</a>
					</h4>
				</div>
			-->
			</div>
			<div class="col-md-12">
				<div class="col-md-10 col-md-offset-2 label-input" style="padding:20px 20px 0 0;">* Campos Requeridos</div>
			</div>
		</div>

		<!-- MODAL AGREGAR DATOS FISCALES DEL DUEÑO (DUEÑO EXISTENTE) -->

		<div class="modal fade in" id="modal-dueno-existente" data-backdrop="static"  >
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="background-color: #FAFAFA; border: 0px; height: 80px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" style=" padding-top:5px; padding-left:0px; " ><img style="width:30px; height: 30px; overflow:hidden;  padding:0px;" src="iconos/02-Dashboard-InfoToolTip.png"> <strong> Dueño</strong> </h3>
      </div>
      <div class="modal-body" >
      	<div style="padding: 0 15px 0 15px ">
      		<div class="row">
      			<div class="col-md-3" style=""><a href="#" data-dismiss="modal"> <strong>&lt;&lt; Regresar</strong> </a></div>
      		</div>  			
  							
  			<div class="row">
  				<div class="col-md-8" style="margin-top: 15px;">
					<div class="col-md-4">Dueño existente</div>
					<div class="col-md-8 col-md-pull-1">
						<input style="" type="text" class="form-control superradiusin" name ="inputnom-dueno-existe" id="inputnom-dueno-existe" maxlength="30"  placeholder="">
					</div>
				</div>
  			</div>
			
			<div class="row">
				<div class="col-md-8" style="margin-top:15px">
				 	<div class="col-md-4">Tipo de Persona*</div>
				 	<div class="col-md-4 col-md-pull-1"> <input type="radio" id="inputperfisica-dueno-existe" name="inputperfisica-dueno-existe" checked> Persona física </div>
				 	<div class="col-md-4 col-md-pull-2"> <input type="radio" id="inputpermoral-dueno-existe" name="inputpermoral-dueno-existe">Persona Moral </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8" style="margin-top:15px">
					<div class="col-md-4">RFC*</div>
					<div class="clearfix"></div>
					<div class="col-md-6"><input type="text" class="form-control superradiusin input-sm" maxlength="30" id="inputrfc-dueno-existe" name="inputrfc-dueno-existe"  placeholder=""></div>
				</div>				
			</div>
			<div class="row" style="margin-top:10px;">
				<div class="col-md-12">
					<div class="row col-md-6">
						<div class="col-md-6 text-gray">Calle*</div>
						<div class="clearfix"></div>
						<div class="col-md-6">
							<input style="width:335px; float: left;" type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputcallenom-dueno-existe" name="inputcallenom-dueno-existe"  placeholder="">
						</div>
					</div>
					<div class="row col-md-3">
						<div class="col-md-12 col-md-pull-1 text-gray">Núm Ext*</div>
						<div class="clearfix"></div>
						<div class="col-md-12 col-md-pull-1">
							<input style="" type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputcallenumint-dueno-existe" name="inputcallenumint-dueno-existe"  placeholder="">
						</div>
					</div>
					<div class="row col-md-3">
						<div class="col-md-12 col-md-pull-1 text-gray">Núm Int</div>
						<div class="clearfix"></div>
						<div class="col-md-12 col-md-pull-1">
							<input style=" " type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputcallenumext-dueno-existe" name="inputcallenumext-dueno-existe"  placeholder="">
						</div>
					</div>
					
				</div>
			</div>
			<div class="row" style="margin-top:10px;">
				<div class="col-md-12">
					<div class="row col-md-6">
						<div class="col-md-12">Colonia*</div>
						<div class="col-md-11">
							<input type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputcolonia-dueno-existe" name="inputcolonia-dueno-existe"  placeholder="">
						</div>
					</div>
					<div class="row col-md-6" style="margin-left:5px;">
						<div class="col-md-12 col-md-pull-1">C.P*</div>
						<div class="col-md-11 col-md-pull-1">
							<input type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputcpostal-dueno-existe" name="inputcpostal-dueno-existe"  placeholder="">
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin:10px 0 20px 0 ;">
				<div class="col-md-12">
					<div class="row col-md-4" style="margin:0 3px 0-30px">
						<div class="col-md-12">Municipio*</div>
						<div class="col-md-12">
							<input style="" type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputciudad-dueno-existe" name="inputciudad-dueno-existe"  placeholder="">
						</div>
					</div>
					<div class="row col-md-4">
						<div class="col-md-12">Estado*</div>
						<div class="col-md-12">
							<input style="" type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputestado-dueno-existe" name="inputestado-dueno-existe"  placeholder="">
						</div>
					</div>
					<div class="row col-md-4">
						<div class="col-md-12">Pais*</div>
						<div class="col-md-12">
							<input style="" type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputpais-dueno-existe" name="inputpais-dueno-existe"  placeholder="">
						</div>
					</div>

				</div>
			</div>
			


      	</div>
      	      		
	  		<div style="border:0px solid; overflow:hidden; margin-bottom:3px;" >
		  			<div class="col-xs-8" style="border:0px solid; ">
						
					</div>
					<div class="col-xs-4" style="border:0px solid; overflow:hidden;">
						<h4 class="pull-right">
							<a id="next-step-2" title="Siguiente"  data-dismiss="modal" class="btn-add-propiedad no-decoration next-step-2">
								<span class="label label-warning"><img src="css/images/candado.png"/> Siguiente </span>
							</a>
						</h4>
						<!--
						<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 0px; background-color: #1db2a4; color: white; "><strong>Siguiente</strong></button>
						<!--<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;" data-dismiss="modal"> <strong>Cancelar</strong> </button>-->
		        		<button type="button" class="btn btn-mini superradiusin" style="float:right; margin: 8px 5px 0 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;" data-dismiss="modal"> <strong>Cancelar</strong> </button>
		        		
					</div>
      			</div> 

  		<!--</form>	-->

      </div>     
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- MODAL AGREGAR DATOS FISCALES DEL DUEÑO (EXISTENTE DUEÑO) <<<<<<<<<<<FINAL>>>>>><  -->

<!-- MODAL AGREGAR DATOS FISCALES DEL DUEÑO (NUEVO DUEÑO) -->

		<div class="modal fade in" id="modal-dueno-nuevo" data-backdrop="static"  >
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="background-color: #FAFAFA; border: 0px; height: 80px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" style=" padding-top:5px; padding-left:0px; " ><img style="width:30px; height: 30px; overflow:hidden;  padding:0px;" src="iconos/02-Dashboard-InfoToolTip.png"> <strong> Dueño</strong> </h3>
      </div>
      <div class="modal-body" >
      	<div style="padding: 0 15px 0 15px ">
      		<!--
      		<div class="row">
      			<div class="col-md-3" style=""><a href="#" data-dismiss="modal"> <strong>&lt;&lt; Regresar</strong> </a></div>
      		</div>  			
  							-->
  			<div class="row">
  				<div class="col-md-8" style="margin-top: 12px;">
					<div class="col-md-4"> <h4>Agregar Nuevo</h4> </div>					
				</div>
  			</div>
			
			<div class="row">
				<div class="col-md-8" style="margin-top:15px">
				 	<div class="col-md-4">Tipo de Persona*</div>
				 	<div class="col-md-4 col-md-pull-1"> <input type="radio" id="inputperfisica-dueno-nuevo" name="inputperfisica-dueno-nuevo" checked> Persona física </div>
				 	<div class="col-md-4 col-md-pull-2"> <input type="radio" id="inputpermoral-dueno-nuevo" name="inputpermoral-dueno-nuevo">Persona Moral </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12" style="margin-top:15px">
					<div class="col-md-3">Nombre Completo*</div>
					<div class="col-md-3 col-md-pull-1">
						<input style="width:210px; float: left;" type="text" class="form-control superradiusin" name ="inputpernombre-dueno-nuevo" id="inputpernombre-dueno-nuevo" maxlength="30"  placeholder="Nombres(s)">				    	
					</div>
					<div class="col-md-3 col-md-pull-1">
						<input style="width:210px; float: left; margin-left:5px;" type="text" class="form-control superradiusin" maxlength="30" name ="inputperape1-dueno-nuevo" id="inputperape1-dueno-nuevo"  placeholder="Apellido Paterno">				    	
					</div>
					<div class="col-md-3 col-md-pull-1">
						   	<input style="width:210px; float: left; margin-left:10px;" type="text" class="form-control superradiusin" maxlength="30" name ="inputperape2-dueno-nuevo" id="inputperape2-dueno-nuevo"  placeholder="Apellido Materno">						   
			     	</div>
				</div>	
			</div>			

			<div class="row">
				<div class="col-md-12" style="margin-top:10px">
					<div class="col-md-4">RFC*</div>
					<div class="clearfix"></div>
					<div class="col-md-5"><input type="text" class="form-control superradiusin input-sm" maxlength="30" id="inputrfc-dueno-nuevo" name="inputrfc-dueno-nuevo"  placeholder=""></div>
				</div>				
			</div>
			<div class="row" style="margin-top:10px;">
				<div class="col-md-12">
					<div class="row col-md-6">
						<div class="col-md-6 text-gray">Calle*</div>
						<div class="clearfix"></div>
						<div class="col-md-6">
							<input style="width:335px; float: left;" type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputcallenom-dueno-nuevo" name="inputcallenom-dueno-nuevo"  placeholder="">
						</div>
					</div>
					<div class="row col-md-3">
						<div class="col-md-12 col-md-pull-1 text-gray">Núm Ext*</div>
						<div class="clearfix"></div>
						<div class="col-md-12 col-md-pull-1">
							<input style="" type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputcallenumint-dueno-nuevo" name="inputcallenumint-dueno-nuevo"  placeholder="">
						</div>
					</div>
					<div class="row col-md-3">
						<div class="col-md-12 col-md-pull-1 text-gray">Núm Int</div>
						<div class="clearfix"></div>
						<div class="col-md-12 col-md-pull-1">
							<input style=" " type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputcallenumext-dueno-nuevo" name="inputcallenumext-dueno-nuevo"  placeholder="">
						</div>
					</div>
					
				</div>
			</div>
			<div class="row" style="margin-top:10px;">
				<div class="col-md-12">
					<div class="row col-md-6">
						<div class="col-md-12">Colonia*</div>
						<div class="col-md-11">
							<input type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputcolonia-dueno-nuevo" name="inputcolonia-dueno-nuevo"  placeholder="">
						</div>
					</div>
					<div class="row col-md-6" style="margin-left:5px;">
						<div class="col-md-12 col-md-pull-1">C.P*</div>
						<div class="col-md-11 col-md-pull-1">
							<input type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputcpostal-dueno-nuevo" name="inputcpostal-dueno-nuevo"  placeholder="">
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin:10px 0 20px 0 ;">
				<div class="col-md-12">
					<div class="row col-md-4" style="margin:0 3px 0-30px">
						<div class="col-md-12">Municipio*</div>
						<div class="col-md-12">
							<input style="" type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputciudad-dueno-nuevo" name="inputciudad-dueno-nuevo"  placeholder="">
						</div>
					</div>
					<div class="row col-md-4">
						<div class="col-md-12">Estado*</div>
						<div class="col-md-12">
							<input style="" type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputestado-dueno-nuevo" name="inputestado-dueno-nuevo"  placeholder="">
						</div>
					</div>
					<div class="row col-md-4">
						<div class="col-md-12">Pais*</div>
						<div class="col-md-12">
							<input style="" type="text" maxlength="30" class="form-control superradiusin input-sm" id="inputpais-dueno-nuevo" name="inputpais-dueno-nuevo"  placeholder="">
						</div>
					</div>

				</div>
			</div>
			

					    

      	</div>
      	      	
	  		<div style="border:0px solid; overflow:hidden; margin-bottom:3px;" >
		  			<div class="col-xs-8" style="border:0px solid; ">
						
					</div>
					<div class="col-xs-4" style="border:0px solid; overflow:hidden;">
						<h4 class="pull-right">
						<a id="next-step-2" title="Siguiente"  data-dismiss="modal" class="btn-add-propiedad no-decoration  next-step-2">
							<span class="label label-warning"><img src="css/images/candado.png"/> Siguiente </span>
						</a>
					</h4>

						<!--<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 0px; background-color: #1db2a4; color: white; "><strong>Siguiente</strong></button>-->
						<button type="button" class="btn btn-mini superradiusin" style="float:right; margin: 8px 5px 0 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;" data-dismiss="modal"> <strong>Cancelar</strong> </button>
		        		
					</div>
      			</div> 

      </div>     
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- MODAL AGREGAR DATOS FISCALES DEL DUEÑO (NUEVO DUEÑO) <<<<<<<<<<<FINAL>>>>>><  -->
		
		<!-- Step 2 -->
		<div class="col-md-12 col-md-offset-1 hide" style="padding:40px 20px 20px 20px;" id="step-2">
			<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Dueño</div>
			<div class="col-md-9 section-process-form" id="section-datos-propiedad" style="padding:20px 0 0 20px; border:1x solid;">
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-5 label-input-2">Nombre Completo/Razón Sociial*</div>
					
					<div class="col-md-7" style="margin-left: -70px;">
						<input type="text" style="width:475px;" class="form-control col-md-2" name="nombre-razon-social-inquilino" id="nombre-razon-social-inquilino" required>
					</div>
				</div>
				<!--
				<div class="col-md-4">RFC*</div>
				<div class="col-md-12" style="padding-top:20px;">					
					<div class="col-md-4 col-md-offset-7 label-input-2">RFC*</div>
				</div>
				-->
				<div class="row" style="margin-top:25px">
					<div class="col-md-12" style="margin:20px 0 -10px 0">
						<div class="col-md-1 col-md-offset-7 text-gray">RFC*</div>
					</div>					
				</div>

				<div class="row" style="">
					<div class="col-md-7" style="margin-top:25px">
					 	<div class="col-md-4">Tipo de Persona*</div>
					 	<div class="col-md-4"> <input type="radio" id="inputperfisica-dueno-nuevo" value="inputperfisica-dueno-nuevo" name="radio-dueno-nuevo" checked> Persona física </div>
					 	<div class="col-md-4"> <input type="radio" id="inputpermoral-dueno-nuevo" value="inputpermoral-dueno-nuevo" name="radio-dueno-nuevo">Persona Moral </div>
					</div>
					<div class="col-md-5" style="margin-top:15px" >					 	
					 	<input type="text" style="width:280px;" class="form-control col-md-2" name="input-rfc-inquilino" id="input-rfc-inquilino" required>
					 </div>

				</div>
				
				<!--
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-3 label-input-2" style="border:0px solid;  ">Tipo de persona*</div>
					<div class="col-md-4" style="margin-left:-0px;">
						<input type="text" class="form-control col-md-2" name="input-tipo-persona-inquilino" id="input-tipo-persona-inquilino" required>
					</div>
					<div class="col-md-4">
						
					</div>
				</div>
			-->
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Calle*</div>
					<div class="col-md-3 label-input-2">Núm Ext.*</div>
					<div class="col-md-3 label-input-2">Núm Int.</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-calle-inquilino" id="input-calle-inquilino" required>
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control col-md-2" name="input-num-ext-inquilino" id="input-num-ext-inquilino" required>
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control col-md-2" name="input-num-int-inquilino" id="input-num-int-inquilino">
					</div>
				</div>
			
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Colonia*</div>
					<div class="col-md-6 label-input-2">C.P.*</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-colonia-inquilino" id="input-colonia-inquilino" required>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-cp-inquilino" id="input-cp-inquilino" required>
					</div>
				</div>
			
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-4 label-input-2">Municipio*</div>
					<div class="col-md-4 label-input-2">Estado*</div>
					<div class="col-md-4 label-input-2">País*</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-4">
						<input type="text" class="form-control col-md-2" name="input-municipio-inquilino" id="input-municipio-inquilino" required>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control col-md-2" name="input-estado-inquilino" id="input-estado-inquilino" required>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control col-md-2" name="input-pais-inquilino" id="input-pais-inquilino" required>
					</div>
				</div>


				<div class="col-md-12 pull-right" style="padding-top:30px;">
					<h4 class="pull-right">
						<a id="next-step-3" title="Siguiente" class="btn-add-propiedad no-decoration">
							<span class="label label-warning"><img src="css/images/candado.png"/> Siguiente </span>
						</a>
					</h4>
					
					<h4 class="pull-right" style="margin-right:20px;">
						<a id="back-step-1" title="Anterior" class="btn-finish no-decoration">
							<span class="label label-finish">< Anterior</span>
						</a>
					</h4>
				</div>
			
			</div>
			<div class="col-md-12">
				<div class="col-md-10 col-md-offset-2 label-input" style="padding:20px 20px 0 0;">* Campos Requeridos</div>
			</div>
		</div>
		
		<!-- Step 3 -->
		<div class="col-md-12 col-md-offset-1 hide" style="padding:40px 20px 20px 20px;" id="step-3">
			<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Inquilino</div>
			<div class="col-md-9 section-process-form" id="section-datos-propiedad" style="padding:30px 0 0 20px;">
				<div class="row">
					<div class="col-md-4">
						<img style="width:20px; height: 20px; overflow:hidden" src="iconos/02-Dashboard-InfoToolTip.png">
						Tipo de Inmueble*
					</div>
					<div class="col-md-4" style="margin-left: -100px;">
						<input type="text" class="form-control col-md-2" name="input-mueble-verificar" id="input-pais-inquilino" required>
					</div>
				</div>
				<div class="row" style="margin-top:20px;">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-6 section-propiedad" style="margin-left: -84px;  height:260px;">
						<div class="row" style="margin-top:10px">
							<div class="col-md-6" text-gray>Subtotal</div>
							<div class="col-md-5 section-propiedad text-center"> <strong>$8,400.00</strong> </div>							
						</div>
						<div class="row" style="margin-top:40px">
							<div class="col-md-6" text-gray><img style="width:20px; height: 20px; overflow:hidden" src="iconos/02-Dashboard-InfoToolTip.png">  <span class="color-gray">IVA</span> </div>
							<div class="col-md-5 text-right"> <strong>$1,600.00</strong> </div>							
						</div>
						<div class="row" style="margin-top:3px">
							<div class="col-md-6 " text-gray><img style="width:20px; height: 20px; overflow:hidden" src="iconos/02-Dashboard-InfoToolTip.png">  <span class="color-gray">Retención ISR</span> </div>
							<div class="col-md-5 text-right"> <strong>$0.00</strong> </div>							
						</div>
						<div class="row" style="margin-top:3px">
							<div class="col-md-6" text-gray><img style="width:20px; height: 20px; overflow:hidden" src="iconos/02-Dashboard-InfoToolTip.png">  <span class="color-gray">Retención IVA</span> </div>
							<div class="col-md-5 text-right"> <strong>$0.00</strong> </div>							
						</div>
						<div class="row" style="margin-top:40px">
							<div class="col-md-6" text-gray>Total</div>
							<div class="col-md-5 section-propiedad text-center"> <strong>$10,000.00</strong> </div>							
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-7 " style="margin-top:10px; color: #FAFAFA"><a href="#" > <strong>Más Información</strong> </a></div>
					</div>

				</div>

				<div class="col-md-12 pull-right" style="padding-top:30px;">
					<h4 class="pull-right">
						<a id="save-and-exit" title="Finalizar" class="btn-add-propiedad no-decoration">
							<span class="label label-warning"><img src="css/images/candado.png"/> Finalizar </span>
						</a>
					</h4>
					
					<h4 class="pull-right" style="margin-right:20px;">
						<a id="back-step-2" title="Anterior" class="btn-finish no-decoration">
							<span class="label label-finish">< Anterior</span>
						</a>
					</h4>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-10 col-md-offset-2 label-input" style="padding:20px 20px 0 0;">* Campos Requeridos</div>
			</div>
		</div>
	</form>
</div>
<!-- /Step Process Contrato -->

<?php include 'footer.php';?>

<script>
	<!-- Falta agrear validaciones de los campos requeridos, poner el focus cuando le das siguiente y atras -->
	$(document).ready(function() {
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});
		
		/*Next Step*/
		$('.next-step-2').click(function() {
			$("#step-1").addClass("hide");
			$("#step-2").removeClass("hide");
			$("#step-3").addClass("hide");
		
			
			$("#section-step-1").removeClass("step-active").addClass("step-inactive");
			$("#section-step-2").removeClass("step-inactive").addClass("step-active");
			$("#section-step-3").removeClass("step-active").addClass("step-inactive");
		});
		
		$('#next-step-3').click(function() {
			$("#step-1").addClass("hide");
			$("#step-2").addClass("hide");
			$("#step-3").removeClass("hide");

			
			$("#section-step-1").removeClass("step-active").addClass("step-inactive");
			$("#section-step-2").removeClass("step-active").addClass("step-inactive");
			$("#section-step-3").removeClass("step-inactive").addClass("step-active");
		});
		
		
		/* Back Step*/
		$('#back-step-2').click(function() {
			$("#step-1").addClass("hide");
			$("#step-2").removeClass("hide");
			$("#step-3").addClass("hide");
			
			$("#section-step-1").removeClass("step-active").addClass("step-inactive");
			$("#section-step-2").removeClass("step-inactive").addClass("step-active");
			$("#section-step-3").removeClass("step-active").addClass("step-inactive");
		});
		
		$('#back-step-1').click(function() {
			$("#step-1").removeClass("hide");
			$("#step-2").addClass("hide");
			$("#step-3").addClass("hide");
			
			$("#section-step-1").removeClass("step-inactive").addClass("step-active");
			$("#section-step-2").removeClass("step-active").addClass("step-inactive");
			$("#section-step-3").removeClass("step-active").addClass("step-inactive");
		});
		
		
		/* Save and exit*/
		$('#save-and-exit').click(function() {
			var focus = false;
			if(!$("#input-fecha-inicio").val()) {
				if(focus == false) { $("#input-fecha-inicio").focus(); focus=true; }
				$("#input-fecha-inicio").addClass("highlight");
			}
			
			if(!$("#input-fecha-fin").val()) {
				if(focus == false) { $("#input-fecha-fin").focus(); focus=true; }
				$("#input-fecha-fin").addClass("highlight");
			}
			
			if(!$("#input-monto").val()) {
				if(focus == false) { $("#input-monto").focus(); focus=true; }
				$("#input-monto").addClass("highlight");
			}
			
			if($("#input-fecha-inicio").val() && $("#input-fecha-fin").val() && $("#input-monto").val()) {
				//Save and Exit
				alert("Save and exit");
			}
		});
		
		/* Save and Return*/
		$('#save-and-return').click(function() {
			if(!$("#input-fecha-inicio").val()) {
				$("#input-fecha-inicio").addClass("highlight");
			}
			
			if(!$("#input-fecha-fin").val()) {
				$("#input-fecha-fin").addClass("highlight");
			}
			
			if(!$("#input-monto").val()) {
				$("#input-monto").addClass("highlight");
			}
			
			if($("#input-fecha-inicio").val() && $("#input-fecha-fin").val() && $("#input-monto").val()) {
				//Save and Return
				alert("Save and Return");
			}
		});
	});
</script>


<script type="text/javascript">
$(function(){
	/*
	$('#modal-dueno-nuevo').modal({
        show: 'true'
    }); 
	 */

})

$("#nidocumentofile").change(function(){
       var fileName = $(this).val();
       $("#nitexturldocument").val(fileName);
 });

</script>