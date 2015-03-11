<?php include 'header.php';?>

<div class="col-md-12 pull-right">
	<div class="col-md-6">
		<ol class="breadcrumb">
			<li><a href="">Inicio</a></li>
			<li><a href="#">Propiedades</a></li>
			<li class="active"><a href="#">Propiedad 1</a></li>
		</ol>
	</div>
	
	<div class="col-md-6">
		<h3 class="pull-right">
			<a href="/propiedades/agregar" title="Agregar propiedad" class="btn-add-propiedad no-decoration">
				<span class="label label-warning">Agregar Propiedad</span>
			</a>
		</h3>
	</div>
</div>

<!-- Nombre, Editar y eliminar -->
<div class="col-md-12">
	<div class="col-md-1"><div class="propiedad-libre"></div></div>
	
	<div class="col-md-2" style="margin-left: -50px;">
		<a href="" title="Propiedad">
			<img src="css/images/img-propiedad.png" alt="Propiedad" class="img-propiedad"/>
		</a>
	</div>
	
	<div class="col-md-3 link-propiedad" style="margin-left: -50px;">
		<a href="" class="nombre-propiedad-2 OpenSansBold">
			Casa de Monterrey en Satélite Número 1-A
		</a>
	</div>
	
	<div class="col-md-2 pull-right">
		<a href="" class="a-trash left-10px pull-right">
			<img src="css/images/trash.png" alt="Borrar Propiedad"/>
		</a>
		
		<a href="" class="a-edit-propiedad pull-right">
			<img src="css/images/editar.png" alt="Editar Propiedad"/>
		</a>
	</div>
</div>
<!-- /Nombre, Editar y eliminar -->

<!-- Datos -->
<div class="col-md-12" style="padding:20px;">
	<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-datos-propiedad">Datos</div>
	<div class="col-md-8" id="section-datos-propiedad">
		<div class="col-md-12 block-datos-propiedad">
			<div class="col-md-2 title-datos text-gray-pad">Calle</div>
			<div class="col-md-4 data-datos">Paseo del Acueducto</div>
			
			<div class="col-md-1 title-datos text-gray-pad">#Ext.</div>
			<div class="col-md-2 data-datos">6519</div>
			
			<div class="col-md-1 title-datos text-gray-pad">#Int.</div>
			<div class="col-md-2 data-datos">10</div>
		</div>
		
		<div class="col-md-12 block-datos-propiedad">
			<div class="col-md-2 title-datos text-gray-pad">Colonia</div>
			<div class="col-md-10 data-datos">Ciudad Satelite</div>
		</div>
		
		<div class="col-md-12 block-datos-propiedad">
			<div class="col-md-2 title-datos text-gray-pad">Municipio</div>
			<div class="col-md-4 data-datos">Monterrey</div>
			
			<div class="col-md-1 title-datos text-gray-pad">Estado</div>
			<div class="col-md-2 data-datos">Nuevo León</div>
				 
			<div class="col-md-1 title-datos text-gray-pad">C.P</div>
			<div class="col-md-2 data-datos">64960</div>
		</div>
		
		<div class="col-md-12 block-datos-propiedad">
			<div class="col-md-2 title-datos text-gray">Due&ntilde;o</div>
			<div class="col-md-10 data-datos"><a href="">Nombre del dueño</a></div>
		</div>
				
		<div class="col-md-12 block-datos-propiedad collapse" id="collapse-datos-1">
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-2 title-datos text-gray-pad">Cta. Predial</div>
				<div class="col-md-4 data-datos">000001578</div>
				<div class="col-md-2 title-datos text-gray-pad">Costo Predial</div>
				<div class="col-md-4 data-datos">$1,000.0</div>
			</div>
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-4 title-datos text-gray-pad">Metros Cuadrados (m2)</div>
				<div class="col-md-2 data-datos">1,256</div>
				<div class="col-md-4 title-datos text-gray-pad">Número de Cuartos</div>
				<div class="col-md-2 data-datos">4</div>
			</div>
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-4 title-datos text-gray-pad">Metros Cuadrados (m2) Constr.</div>
				<div class="col-md-2 data-datos">1,256</div>
				<div class="col-md-4 title-datos text-gray-pad">Número de Baños</div>
				<div class="col-md-2 data-datos">2</div>
			</div>
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-4 title-datos text-gray-pad">Mantenimento Mensual</div>
				<div class="col-md-5 data-datos">$1,500.00</div>
			</div>
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-4 title-datos text-gray-pad">Comentarios</div>
				<div class="col-md-8 data-datos">Comentarios, comentarios varias lineas</div>
			</div>
			<div class="col-md-12 block-datos-propiedad">
				<div class="col-md-4 title-datos text-gray-pad">Documentos</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-4 title-datos text-gray-pad"></div>
				<div class="col-md-4 title-datos">
					<a href="" title="Documento">Escrituras_casa_monterrey.pdf</a>
				</div>
				<div class="col-md-3">
					<a href=""><img src="css/images/vista-previa.png" alt="Vista previa"/></a>
					<a href="" style="margin-left:15px;"><img src="css/images/descargar.png" alt="Descargar"/></a>
					<a href="" style="margin-left:15px;"><img src="css/images/eliminar.png" alt="Eliminar"/></a>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-4 title-datos text-gray-pad"></div>
				<div class="col-md-4 title-datos">
					<a href="" title="Documento">Escrituras_casa_monterrey.pdf</a>
				</div>
				<div class="col-md-3">
					<a href=""><img src="css/images/vista-previa.png" alt="Vista previa"/></a>
					<a href="" style="margin-left:15px;"><img src="css/images/descargar.png" alt="Descargar"/></a>
					<a href="" style="margin-left:15px;"><img src="css/images/eliminar.png" alt="Eliminar"/></a>
				</div>
			</div>
		</div>
		
		<div class="col-md-6 ver-mas">
			<a class="pull-right" data-toggle="collapse" href="#collapse-datos-1" aria-expanded="true" aria-controls="collapse-datos-1">
				<span class="caret"></span> Vér mas
			</a>
		</div>
	</div>
</div>
<!-- /Datos -->

<!-- Contrato -->
<div class="col-md-12 section-propiedad" style="padding:20px;">
	<div class="col-md-2 pull-right" style="margin-top: -15px;">
		<a href="" class="a-trash left-10px pull-right">
			<img src="css/images/trash.png" alt="Borrar Contrato"/>
		</a>
		
		<a href="" class="a-edit-propiedad pull-right">
			<img src="css/images/editar.png" alt="Editar Contrato"/>
		</a>
	</div>
	
	<div class="col-md-2 text-center OpenSansBold title-section-propiedad" id="title-contrato-propiedad">Contrato</div>
	<div class="col-md-10" id="section-contrato-propiedad">
		<div class="col-md-12" style="padding-top:25px;">
			<div class="col-md-2 text-gray">Fecha de Inicio</div>
			<div class="col-md-4">01/07/2013</div>
			
			<div class="col-md-3 text-gray">Subtotal</div>
			<div class="col-md-3"><span class="pull-right">$8,400.00</span></div>
		</div>
		
		<div class="col-md-12" style="padding-top:25px;">
			<div class="col-md-6" style="padding:initial;">
				<div class="col-md-4 text-gray">Fecha de Fin</div>
				<div class="col-md-8">01/07/2014</div>
				
				<div class="col-md-4 text-gray" style="padding-top:25px;">Inquilino</div>
				<div class="col-md-8" style="padding-top:25px;"><a href="" title="" class="color-link underline">Nombre completo del inquilino</a></div>
			</div>
			
			<div class="col-md-6">
				<img src="css/images/dashboard-info-tooltip-small.png" class="info-icon" alt="Información" data-toggle="tooltip" data-placement="bottom" title="Visualiza tus adeudos por inquilino. Expande para ver el detalle."/>
				 IVA <span class="pull-right">$1,600.00</span><br/>
				<img src="css/images/dashboard-info-tooltip-small.png" class="info-icon" alt="Información" data-toggle="tooltip" data-placement="bottom" title="Visualiza tus adeudos por inquilino. Expande para ver el detalle."/> 
				 Reteneción IVA <span class="pull-right">$0.00</span><br/>
				<img src="css/images/dashboard-info-tooltip-small.png" class="info-icon" alt="Información" data-toggle="tooltip" data-placement="bottom" title="Visualiza tus adeudos por inquilino. Expande para ver el detalle."/> 
				 Retención ISR <span class="pull-right">$0.00</span><br/>
				<img src="css/images/dashboard-info-tooltip-small.png" class="info-icon" alt="Información" data-toggle="tooltip" data-placement="bottom" title="Visualiza tus adeudos por inquilino. Expande para ver el detalle."/> 
				 Retención ISR <span class="pull-right">$0.00</span><br/>
			</div>
		</div>
		
		<div class="col-md-12" style="padding-top:25px;">
			<div class="col-md-2 text-gray">Periodicidad</div>
			<div class="col-md-4">Mensual</div>
			
			<div class="col-md-3 text-gray">Total</div>
			<div class="col-md-3"><span class="pull-right">$10,000.00</span></div>
		</div>
		
		<div class="col-md-12 collapse" id="collapse-contrato-1" style="margin-top:40px; border-top:1px solid #b3b3b3;">
			<div class="col-md-12" style="padding:20px 0 0 0;">
				<div class="col-md-3 text-gray">Multa moratoria</div>
				<div class="col-md-3">$1,000.00</div>
				
				<div class="col-md-3 text-gray">Días para aplicar multa</div>
				<div class="col-md-3">3</div>
			</div>
			
			<div class="col-md-12" style="padding:20px 0 0 0;">
				<div class="col-md-3 text-gray">Tasa de interés moratoria</div>
				<div class="col-md-3">5 %</div>
				
				<div class="col-md-3 text-gray">Periodicidad de tasa</div>
				<div class="col-md-3">Mensual</div>
			</div>
			
			<div class="col-md-12" style="padding:20px 0 0 0;">
				<div class="col-md-3 text-gray">Días para aplicar interés</div>
				<div class="col-md-3">3</div>
			</div>
			
			<div class="col-md-12" style="padding:20px 0 0 0;">
				<div class="col-md-3 text-gray">Adeudo anterior</div>
				<div class="col-md-3">$1,000.00</div>
				
				<div class="col-md-3 text-gray">Fiador</div>
				<div class="col-md-3">Nombre completo del fiador</div>
			</div>
			
			<div class="col-md-12" style="padding:20px 0 0 0;">
				<div class="col-md-3 text-gray">Comentarios</div>
				<div class="col-md-9">Comentarios varios comentarios varios comentarios varios comentarios varios</div>
			</div>
		</div>
		
		<div class="col-md-6 ver-mas">
			<a class="pull-right" data-toggle="collapse" href="#collapse-contrato-1" aria-expanded="true" aria-controls="collapse-contrato-1">
				<span class="caret"></span> Vér mas
			</a>
		</div>
	</div>
	
</div>
<!-- /Contrato -->

<!-- Recibos y pagos -->
<div class="col-md-12" id="section-contrato-propiedad" style="padding:20px; margin-top:10px;">
	<div class="col-md-12 OpenSansBold title-section-propiedad" id="title-recibos-propiedad">
		<div class="arrow-down-blue"></div> Recibos y pagos
	</div>
	<div class="col-md-12"></div>
</div>
<!-- /Recibos y pagos -->

<!-- Estado de cuenta -->
<div class="col-md-12" id="section-contrato-propiedad" style="padding:20px; margin-top:10px;">
	<div class="col-md-12 OpenSansBold title-section-propiedad" id="title-recibos-propiedad">
		<div class="arrow-down-blue"></div> Estado de cuenta
	</div>
	<div class="col-md-12"></div>
</div>
<!-- /Estado de cuenta -->

<!-- Historial -->
<div class="col-md-12" id="section-contrato-propiedad" style="padding:20px; margin-top:10px;">
	<div class="col-md-12 OpenSansBold title-section-propiedad" id="title-recibos-propiedad">
		<div class="arrow-down-blue"></div> Historial
	</div>
	<div class="col-md-12"></div>
</div>
<!-- /Historial -->

<?php include 'footer.php';?>
