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
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Tipo de persona*</div>
					<div class="col-md-6 label-input-2">RFC*</div>
				</div>

				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-tipo-persona" id="input-tipo-persona" required>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-rfc" id="input-rfc" required>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Calle*</div>
					<div class="col-md-3 label-input-2">Núm Ext.*</div>
					<div class="col-md-3 label-input-2">Núm Int.</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-calle" id="input-calle" required>
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control col-md-2" name="input-num-ext" id="input-num-ext" required>
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control col-md-2" name="input-num-int" id="input-num-int">
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Colonia*</div>
					<div class="col-md-6 label-input-2">C.P.*</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-colonia" id="input-colonia" required>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-cp" id="input-cp" required>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-4 label-input-2">Municipio*</div>
					<div class="col-md-4 label-input-2">Estado*</div>
					<div class="col-md-4 label-input-2">País*</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-4">
						<input type="text" class="form-control col-md-2" name="input-municipio" id="input-municipio" required>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control col-md-2" name="input-estado" id="input-estado" required>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control col-md-2" name="input-pais" id="input-pais" required>
					</div>
				</div>
				-->
				<div class="col-md-12 pull-right" style="padding-top:30px;">
					<h4 class="pull-right">
						<a id="next-step-2" title="Siguiente" class="btn-add-propiedad no-decoration">
							<span class="label label-warning"><img src="css/images/candado.png"/> Siguiente </span>
						</a>
					</h4>
				</div>
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
				 	<div class="col-md-4 col-md-pull-1"> <input type="radio" name="optradio" checked> Persona física </div>
				 	<div class="col-md-4 col-md-pull-2"> <input type="radio" name="optradio">Persona Moral </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8" style="margin-top:15px">
					<div class="col-md-4">RFC*</div>
					<div class="clearfix"></div>
					<div class="col-md-6"><input type="text" class="form-control superradiusin input-sm" maxlength="30" id="inputrfc-dueno-existe" name="inputrfc-dueno-existe"  placeholder=""></div>
				</div>				
			</div>


      	</div>
      	      		

       	<!-- cuerpo -->
       	<!--
	       	<div style="border: 0px solid; overflow:hidden; width:880px"  >
	      		<div class="form-group">      			
				    

				    <br><br><hr style="width:740px; overflow:hidden; float:left; margin-left: 35px;">
				    
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="nitelcasa" class="col-lg-1 control-label"  style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Tel. Casa:</label>
				    	<div class="col-xs-4"><input type="text" class="form-control superradiusin col-xs-6 input-sm" maxlength="20" id="nitelcasa" name="nitelcasa"  placeholder=""></div>
				    </div>
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="nicelular" class="col-lg-1 control-label"  style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Celular:</label>
					    <div class="col-xs-4"><input type="text" class="form-control superradiusin input-sm" maxlength="20" id="nicelular" name="nicelular"  placeholder=""></div>
				    </div>
					<div class="col-xs-10" style="border:0px solid; margin-bottom:6px; margin-left: 10px;">
				    	<label for="nitelofi" class="col-lg-1 control-label" style="overflow:hidden; width:90px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Tel. Oficina:</label>
					    <div class="col-xs-4"><input style="margin-left: -5px;" type="text" maxlength="20" class="form-control superradiusin input-sm" id="nitelofi" name="nitelofi"  placeholder=""></div>
				    </div>
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="niemail1" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Correo 1:</label>
					    <div class="col-xs-6"><input type="text" class="form-control superradiusin input-sm" maxlength="30" id="niemail1" name="niemail1"  placeholder=""></div>
				    </div>
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="niemail2" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Correo 2:</label>
					    <div class="col-xs-6"><input type="text" class="form-control superradiusin input-sm" maxlength="20" id="niemail2" name="niemail2"  placeholder=""></div>
				    </div>

				    <br><br><hr style="width:740px; overflow:hidden; float:left; margin-left: 35px;">

				    
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
					   </div>
					 </div>
				</div>	

	  		</div>
	  	-->
	  		<div style="border:0px solid; overflow:hidden; margin-bottom:3px;" >
		  			<div class="col-xs-8" style="border:0px solid; ">
						
					</div>
					<div class="col-xs-4" style="border:0px solid; overflow:hidden;">
						<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 0px; background-color: #1db2a4; color: white; "><strong>Siguiente</strong></button>
						<!--<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;" data-dismiss="modal"> <strong>Cancelar</strong> </button>-->
		        		
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
      		<div class="row">
      			<div class="col-md-3" style=""><a href="#" data-dismiss="modal"> <strong>&lt;&lt; Regresar</strong> </a></div>
      		</div>  			
  							
  			<div class="row">
  				<div class="col-md-8" style="margin-top: 12px;">
					<div class="col-md-4"> <h4>Agregar Nuevo</h4> </div>					
				</div>
  			</div>
			
			<div class="row">
				<div class="col-md-8" style="margin-top:15px">
				 	<div class="col-md-4">Tipo de Persona*</div>
				 	<div class="col-md-4 col-md-pull-1"> <input type="radio" name="optradio" checked> Persona física </div>
				 	<div class="col-md-4 col-md-pull-2"> <input type="radio" name="optradio">Persona Moral </div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12" style="margin-top:15px">
					<div class="col-md-3">Nombre Completo*</div>
					<div class="col-md-3 col-md-pull-1">
						<input style="width:210px; float: left;" type="text" class="form-control superradiusin" name ="niNombres" id="niNombres" maxlength="30"  placeholder="Nombres(s)">				    	
					</div>
					<div class="col-md-3 col-md-pull-1">
						<input style="width:210px; float: left; margin-left:5px;" type="text" class="form-control superradiusin" maxlength="30" name ="niapepaterno" id="niapepaterno"  placeholder="Apellido Paterno">				    	
					</div>
					<div class="col-md-3 col-md-pull-1">
						   	<input style="width:210px; float: left; margin-left:5px;" type="text" class="form-control superradiusin" maxlength="30" name ="niapematerno" id="niapematerno"  placeholder="Apellido Materno">						   
			     	</div>
				</div>	
			</div>			

			<div class="row">
				<div class="col-md-8" style="margin-top:15px">
					<div class="col-md-4">RFC*</div>
					<div class="clearfix"></div>
					<div class="col-md-6"><input type="text" class="form-control superradiusin input-sm" maxlength="30" id="inputrfc-dueno-existe" name="inputrfc-dueno-existe"  placeholder=""></div>
				</div>				
			</div>


      	</div>
      	      		

       	<!-- cuerpo -->
       	<!--
	       	<div style="border: 0px solid; overflow:hidden; width:880px"  >
	      		<div class="form-group">      			
				    

				    <br><br><hr style="width:740px; overflow:hidden; float:left; margin-left: 35px;">
				    
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="nitelcasa" class="col-lg-1 control-label"  style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Tel. Casa:</label>
				    	<div class="col-xs-4"><input type="text" class="form-control superradiusin col-xs-6 input-sm" maxlength="20" id="nitelcasa" name="nitelcasa"  placeholder=""></div>
				    </div>
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="nicelular" class="col-lg-1 control-label"  style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Celular:</label>
					    <div class="col-xs-4"><input type="text" class="form-control superradiusin input-sm" maxlength="20" id="nicelular" name="nicelular"  placeholder=""></div>
				    </div>
					<div class="col-xs-10" style="border:0px solid; margin-bottom:6px; margin-left: 10px;">
				    	<label for="nitelofi" class="col-lg-1 control-label" style="overflow:hidden; width:90px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Tel. Oficina:</label>
					    <div class="col-xs-4"><input style="margin-left: -5px;" type="text" maxlength="20" class="form-control superradiusin input-sm" id="nitelofi" name="nitelofi"  placeholder=""></div>
				    </div>
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="niemail1" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Correo 1:</label>
					    <div class="col-xs-6"><input type="text" class="form-control superradiusin input-sm" maxlength="30" id="niemail1" name="niemail1"  placeholder=""></div>
				    </div>
				    <div class="col-xs-10" style="border:0px solid; margin-bottom:2px; margin-left: 10px;">
				    	<label for="niemail2" class="col-lg-1 control-label" style="overflow:hidden; width:85px; padding-left:0px; border:0px solid; text-align: left; margin-left: -0px">Correo 2:</label>
					    <div class="col-xs-6"><input type="text" class="form-control superradiusin input-sm" maxlength="20" id="niemail2" name="niemail2"  placeholder=""></div>
				    </div>

				    <br><br><hr style="width:740px; overflow:hidden; float:left; margin-left: 35px;">

				    
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
					   </div>
					 </div>
				</div>	

	  		</div>
	  	-->
	  		<div style="border:0px solid; overflow:hidden; margin-bottom:3px;" >
		  			<div class="col-xs-8" style="border:0px solid; ">
						
					</div>
					<div class="col-xs-4" style="border:0px solid; overflow:hidden;">
						<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 0px; background-color: #1db2a4; color: white; "><strong>Siguiente</strong></button>
						<!--<button type="button" class="btn btn-mini superradiusin" style="float:right; margin-right: 8px; color: gray; border: 2px solid #FAFAFA; border-top: none; border-left: none; background-color:white;" data-dismiss="modal"> <strong>Cancelar</strong> </button>-->
		        		
					</div>
      			</div> 

  		<!--</form>	-->

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
						<input type="text" class="form-control col-md-2" name="nombre-razon-social-inquilino" id="nombre-razon-social-inquilino" required>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">					
					<div class="col-md-4 col-md-offset-7 label-input-2">RFC*</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-3 label-input-2" style="border:0px solid;  ">Tipo de persona*</div>
					<div class="col-md-4" style="margin-left:-0px;">
						<input type="text" class="form-control col-md-2" name="input-tipo-persona-inquilino" id="input-tipo-persona-inquilino" required>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control col-md-2" name="input-rfc-inquilino" id="input-rfc-inquilino" required>
					</div>
				</div>
				
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


				<!--
				<div class="col-md-12" style="padding-top:0px;">
					<div class="col-md-3 OpenSansBold title-section-propiedad">Cargar CSD</div>
					<div class="col-md-6">
						<a href="" title="Que es esto?">&iquest;Qué es esto?</a>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-4 label-input-2">Contraseña Llave Privada:</div>
					<div class="col-md-8">
						<input type="text" name="contra-llave-privada" id="contra-llave-privada" class="form-control"/>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-3 label-input-2">Certitifcado (.cer):</div>
					<div class="col-md-9">
						<input type="file" name="documento-propiedad" id="documento-propiedad" class="form-control"/>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-3 label-input-2">Llave privada (.key):</div>
					<div class="col-md-9">
						<input type="file" name="llave-privada" id="llave-privada" class="form-control"/>
					</div>
				</div>
				-->
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


				<!--
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Nombre Completo/Razón Social*</div>
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="nombre-razon-social-inquilino" id="nombre-razon-social-inquilino" required>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Tipo de personaa*</div>
					<div class="col-md-6 label-input-2">RFC*</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-tipo-persona-inquilino" id="input-tipo-persona-inquilino" required>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-rfc-inquilino" id="input-rfc-inquilino" required>
					</div>
				</div>
				
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
				-->
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
		$('#next-step-2').click(function() {
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





<!-- modal -->
<!-- Step Process Contrato -->
<!--
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
		-->
		<!-- Step 1 -->
		<!--
		<div class="col-md-11 col-md-offset-1" style="padding:40px 20px 20px 20px;" id="step-1">
			<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Dueño</div>
			<div class="col-md-8 section-process-form" id="section-datos-propiedad" style="padding:60px 0 0 20px;">
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Nombre Completo/Razón Social*</div>
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="nombre-razon-social" id="nombre-razon-social" required>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Tipo de persona*</div>
					<div class="col-md-6 label-input-2">RFC*</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-tipo-persona" id="input-tipo-persona" required>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-rfc" id="input-rfc" required>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Calle*</div>
					<div class="col-md-3 label-input-2">Núm Ext.*</div>
					<div class="col-md-3 label-input-2">Núm Int.</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-calle" id="input-calle" required>
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control col-md-2" name="input-num-ext" id="input-num-ext" required>
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control col-md-2" name="input-num-int" id="input-num-int">
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Colonia*</div>
					<div class="col-md-6 label-input-2">C.P.*</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-colonia" id="input-colonia" required>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-cp" id="input-cp" required>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-4 label-input-2">Municipio*</div>
					<div class="col-md-4 label-input-2">Estado*</div>
					<div class="col-md-4 label-input-2">País*</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-4">
						<input type="text" class="form-control col-md-2" name="input-municipio" id="input-municipio" required>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control col-md-2" name="input-estado" id="input-estado" required>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control col-md-2" name="input-pais" id="input-pais" required>
					</div>
				</div>
				
				<div class="col-md-12 pull-right" style="padding-top:30px;">
					<h4 class="pull-right">
						<a id="next-step-2" title="Siguiente" class="btn-add-propiedad no-decoration">
							<span class="label label-warning"><img src="css/images/candado.png"/> Siguiente </span>
						</a>
					</h4>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-10 col-md-offset-2 label-input" style="padding:20px 20px 0 0;">* Campos Requeridos</div>
			</div>
		</div>
		-->
		<!-- Step 2 -->
		<!--
		<div class="col-md-11 col-md-offset-1 hide" style="padding:40px 20px 20px 20px;" id="step-2">
			<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Dueño</div>
			<div class="col-md-8 section-process-form" id="section-datos-propiedad" style="padding:60px 0 0 20px;">
				<div class="col-md-12" style="padding-top:0px;">
					<div class="col-md-3 OpenSansBold title-section-propiedad">Cargar CSD</div>
					<div class="col-md-6">
						<a href="" title="Que es esto?">&iquest;Qué es esto?</a>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-4 label-input-2">Contraseña Llave Privada:</div>
					<div class="col-md-8">
						<input type="text" name="contra-llave-privada" id="contra-llave-privada" class="form-control"/>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-3 label-input-2">Certitifcado (.cer):</div>
					<div class="col-md-9">
						<input type="file" name="documento-propiedad" id="documento-propiedad" class="form-control"/>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-3 label-input-2">Llave privada (.key):</div>
					<div class="col-md-9">
						<input type="file" name="llave-privada" id="llave-privada" class="form-control"/>
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
		-->
		<!-- Step 3 -->
		<!--
		<div class="col-md-11 col-md-offset-1 hide" style="padding:40px 20px 20px 20px;" id="step-3">
			<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Inquilino</div>
			<div class="col-md-8 section-process-form" id="section-datos-propiedad" style="padding:30px 0 0 20px;">
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Nombre Completo/Razón Social*</div>
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="nombre-razon-social-inquilino" id="nombre-razon-social-inquilino" required>
					</div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-6 label-input-2">Tipo de persona*</div>
					<div class="col-md-6 label-input-2">RFC*</div>
				</div>
				
				<div class="col-md-12" style="padding-top:5px;">
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-tipo-persona-inquilino" id="input-tipo-persona-inquilino" required>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control col-md-2" name="input-rfc-inquilino" id="input-rfc-inquilino" required>
					</div>
				</div>
				
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
-->
<!-- /Step Process Contrato -->

<script type="text/javascript">
$(function(){
	
	$('#modal-dueno-nuevo').modal({
        show: 'true'
    }); 
	 

})

$("#nidocumentofile").change(function(){
       var fileName = $(this).val();
       $("#nitexturldocument").val(fileName);
 });

</script>