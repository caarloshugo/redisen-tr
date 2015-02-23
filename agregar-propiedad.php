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
			<div class="col-md-12 black-bold">Agrega tu Propiedad</div>
			<div class="col-md-12 padding-top-15">
				<img style="margin-left:-20px;" src="css/images/steps-contratos-setp-1.png" alt="Paso 1 - Agregar propiedad"/>
			</div>
		</div>
		
		<div class="col-md-4 step-inactive" id="section-step-2">
			<div class="col-md-12">
				<div class="circle-blue">2</div>
			</div>
			<div class="col-md-12 black-bold">Agrega tu Inquilino</div>
			<div class="col-md-12 padding-top-15">
				<img style="margin-left:-20px;" src="css/images/steps-contratos-setp-2.png" alt="Paso 2 - Agregar un Inquilino"/>
			</div>
		</div>
		
		<div class="col-md-4 step-inactive" id="section-step-3">
			<div class="col-md-12">
				<div class="circle-blue">3</div>
			</div>
			<div class="col-md-12 black-bold">Crea un Contrato</div>
			<div class="col-md-12 padding-top-15">
				<img style="margin-left:-20px;" src="css/images/steps-contratos-setp-3.png" alt="Paso 3 - Agregar un Contrato"/>
			</div>
		</div>
	</div>
	
	<form name="step-process-contrato" id="step-process-contrato">
		<!-- Step 1 -->
		<div class="col-md-11 col-md-offset-1" style="padding:40px 20px 20px 20px;" id="step-1">
			<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Propiedad</div>
			<div class="col-md-8 section-process-form" id="section-datos-propiedad" style="padding:60px 0 0 20px;">
				<div class="col-md-2 label-input">Nombre*</div>
				<div class="col-md-10"><input type="text" class="form-control col-md-2" name="nombre-propiedad" id="nombre-propiedad" required></div>
				<div class="col-md-12 pull-right" style="padding-top:30px;">
					<h4 class="pull-right">
						<a id="next-step-2" title="Siguiente" class="btn-add-propiedad no-decoration">
							<span class="label label-warning">Siguiente ></span>
						</a>
					</h4>
					
					<h4 class="pull-right" style="margin-right:20px;">
						<a id="btn-finish" title="Finalizar" class="btn-finish no-decoration">
							<span class="label label-finish"> Finalizar</span>
						</a>
					</h4>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-10 col-md-offset-2 label-input" style="padding:20px 20px 0 0;">* Campos Requeridos</div>
			</div>
		</div>
		
		<!-- Step 2 -->
		<div class="col-md-11 col-md-offset-1 hide" style="padding:40px 20px 20px 20px;" id="step-2">
			<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Inquilino</div>
			<div class="col-md-8 section-process-form" id="section-datos-propiedad" style="padding:60px 0 0 20px;">
				<div class="col-md-2 label-input">Nombre*</div>
				<div class="col-md-10"><input type="text" class="form-control col-md-2" name="nombre-inquilino" id="nombre-inquilino" required></div>
				<div class="col-md-12 pull-right" style="padding-top:30px;">
					<h4 class="pull-right">
						<a id="next-step-3" title="Siguiente" class="btn-add-propiedad no-decoration">
							<span class="label label-warning">Siguiente ></span>
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
		<div class="col-md-11 col-md-offset-1 hide" style="padding:40px 20px 20px 20px;" id="step-3">
			<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Contrato</div>
			<div class="col-md-8 section-process-form" id="section-datos-propiedad" style="padding:30px 0 0 20px;">
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-3 label-input">Fecha de Inicio*</div>
					<div class="col-md-3"><input type="text" class="form-control col-md-2" name="input-fecha-inicio" id="input-fecha-inicio" required></div>
					
					<div class="col-md-3 label-input">Fecha de Fin*</div>
					<div class="col-md-3"><input type="text" class="form-control col-md-2" name="input-fecha-fin" id="input-fecha-fin" required></div>
				</div>
				
				<div class="col-md-12" style="padding-top:20px;">
					<div class="col-md-3 label-input">
						<img src="css/images/dashboard-info-tooltip-small.png" class="info-icon" alt="Información" data-toggle="tooltip" data-placement="bottom" title="Si quieres facturar, indica el total después de IVA y Retenciones."/> 
						 Monto Total*
					</div>
					<div class="col-md-3"><input type="text" class="form-control col-md-2" name="input-monto" id="input-monto" required></div>
					
					<div class="col-md-3 label-input">Periodicidad*</div>
					<div class="col-md-3">
						<select name="input-periodicidad" id="input-periodicidad" class="form-control box-shadow">
							<option>Cada 6 meses</option>
							<option selected="selected">Cada año</option>
							<option>Cada 2 años</option>
						</select>
					</div>
				</div>
				
				<div class="col-md-12 pull-right" style="padding-top:30px;">
					<h4 class="pull-right">
						<a id="save-and-exit" title="Siguiente" class="btn-add-propiedad no-decoration">
							<span class="label label-warning">Guardar</span>
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

<div class="col-md-3 pull-right hide" id="section-btn-save-and-return">
	<h4 class="pull-right">
		<a id="save-and-return" title="Siguiente" class="btn-add-propiedad no-decoration">
			<span class="label label-warning">Guardar y Agregar Otra</span>
		</a>
	</h4>
</div>
<!-- /Step Process Contrato -->

<?php include 'footer.php';?>

<script>
	$(document).ready(function() {
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});
		
		$("#nombre-propiedad, #nombre-inquilino, #input-fecha-inicio, #input-fecha-fin, #input-monto").blur( function() { $(this).removeClass("highlight"); });
		$("#nombre-propiedad").focus();
		
		/*Next Step*/
		$('#next-step-2').click(function() {
			if(!$("#nombre-propiedad").val()) {
				$("#nombre-propiedad").focus();
				$("#nombre-propiedad").addClass("highlight");
			} else {
				$("#step-1").addClass("hide");
				$("#step-2").removeClass("hide");
				$("#step-3").addClass("hide");
				$("#nombre-inquilino").focus();
				
				$("#section-step-1").removeClass("step-active").addClass("step-inactive");
				$("#section-step-2").removeClass("step-inactive").addClass("step-active");
				$("#section-step-3").removeClass("step-active").addClass("step-inactive");
			}
		});
		
		$('#next-step-3').click(function() {
			if(!$("#nombre-inquilino").val()) {
				$("#nombre-inquilino").focus();
				$("#nombre-inquilino").addClass("highlight");
			} else {
				$("#step-1").addClass("hide");
				$("#step-2").addClass("hide");
				$("#step-3").removeClass("hide");
				$("#section-btn-save-and-return").removeClass("hide");
				$("#input-fecha-inicio").focus();
				
				$("#section-step-1").removeClass("step-active").addClass("step-inactive");
				$("#section-step-2").removeClass("step-active").addClass("step-inactive");
				$("#section-step-3").removeClass("step-inactive").addClass("step-active");
			}
		});
		
		
		/* Back Step*/
		$('#back-step-2').click(function() {
			$("#step-1").addClass("hide");
			$("#step-2").removeClass("hide");
			$("#step-3").addClass("hide");
			$("#nombre-inquilino").focus();
			$("#section-btn-save-and-return").addClass("hide");
			
			$("#section-step-1").removeClass("step-active").addClass("step-inactive");
			$("#section-step-2").removeClass("step-inactive").addClass("step-active");
			$("#section-step-3").removeClass("step-active").addClass("step-inactive");
		});
		
		$('#back-step-1').click(function() {
			$("#step-1").removeClass("hide");
			$("#step-2").addClass("hide");
			$("#step-3").addClass("hide");
			$("#nombre-propiedad").focus();
			
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
