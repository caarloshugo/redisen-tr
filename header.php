<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>Dashboard - TengoRentas.com</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/dashboard.css" rel="stylesheet">

		<link href="css/inquilinosmodal.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body role="document" class="OpenSans">
		<!-- header -->
		<div class="container">
			<div class="col-md-6">
				<div class="navbar-header">
					<a class="" href="/">
						<img src="css/images/menu-logo.png" title="TengoRentas.com" alt="TengoRentas.com" />
					</a>
				</div>
			</div>
			<div class="col-md-6" id="notification-bar">
				<ul class="ul-nav">
					<li class="dropdown">
						<a href="">
							<img src="css/images/menu-notification.png" class="menu-notification-tip"/>
							<span class="badge-2">3</span> carlos.hugo.gonzalez.castell@gmail.com
						</a>
						<ul class="dropdown-menu" role="menu" id="notifications-list">	
							<li class="read-notif"><a href="#" class="small-notif">Marcar todo como leído</a></li>
							<li>El contrato de la propiedad "<a href="" title="">Propiedad 1</a>" con el Inquilino "Inquilino" está por vencer</li>
							<li>Tu prueba gratis del sistema vencerá en 1 semana. <a href="" class="blue">Actualízala aquí</a>.</li>
							<li>El contrato de la propiedad "<a href="" title="">Propiedad 1</a>" con el inquilino "Nombre del inquilino" está por vencer</li>
							<li class="read-notif">El contrato de la propiedad "<a href="" title="">Propiedad 1</a>" con el inquilino "Nombre del inquilino" está por vencer</li>
						</ul>
					</li>
					
					<li class="dropdown pointer">
						<img src="css/images/menu-conf.png"/>
						<ul class="dropdown-menu" role="menu">	
							<li><a href="#">Mi Cuenta</a></li>
							<li><a href="#">Suscripción</a></li>
						</ul>
					</li>
					
					<li class="dropdown pointer">
						<img src="css/images/menu-help.png"/> Ayuda
						<ul class="dropdown-menu" role="menu">	
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Contacto</a></li>
						</ul>
					</li>
					
					<li class="left-10">
						<a href="">
							<img src="css/images/menu-logout.png"/> Salir
						</a>
					</li>
				</ul>
			</div>
		</div>
		
		
		<!-- Fixed navbar -->
		<nav class="nav nav-header">
			<div class="container">		
				<div id="navbar">
					<ul id="ul-nav-header">
						<li class="active">
							<a href="#">Inicio</a>
						</li>
						<li>
							<a href="#propiedades">Propiedades</a>
						</li>
						<li>
							<a href="#inquilinos">Inquilinos</a>
						</li>
						<li>
							<a href="#duenos">Due&ntilde;os</a>
						</li>
						<li class="dropdown">
							<a href="#recibos" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								Recibos <span class="caret"></span>
							</a>
							
							<ul class="dropdown-menu" role="menu">	
								<li><a href="#">Recibos</a></li>
								<li><a href="#">Facturas</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#reportes" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								Reportes <span class="caret"></span>
							</a>
							
							<ul class="dropdown-menu" role="menu">	
								<li><a href="#">Edo. de Cuenta</a></li>
								<li><a href="#">Ingresos</a></li>
								<li><a href="#">Adeudos</a></li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		<!-- /header -->
		
		<div class="clearfix"></div>
		
		 <!-- container -->
		<div class="container OpenSans" role="main">
