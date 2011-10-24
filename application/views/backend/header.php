<!DOCTYPE HTML>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>GetIt - Admin Panel</title>
	
	<!-- Imports General CSS and jQuery CSS -->
	<link href="<?php echo base_url(); ?>css/backend/screen.css" rel="stylesheet" media="screen" type="text/css" />
	
	<!-- CSS for Fluid and Fixed Widths - Double to prevent flickering on change -->
	<link href="<?php echo base_url(); ?>css/backend/fixed.css" rel="stylesheet" media="screen" type="text/css" />
	<link href="<?php echo base_url(); ?>css/backend/fixed.css" rel="stylesheet" media="screen" type="text/css" class="width" />
	
	<!-- CSS for Theme Styles - Double to prevent flickering on change -->
	<link href="<?php echo base_url(); ?>css/backend/theme/blue.css" rel="stylesheet" media="screen" type="text/css" />
	<link href="<?php echo base_url(); ?>css/backend/theme/blue.css" rel="stylesheet" media="screen" type="text/css" class="theme" />
	<!-- jQuery thats loaded before document ready to prevent flickering - Rest are found at the bottom -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.styleswitcher.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/backend/jquery.visualize.js"></script>
</head>

<body>
<!-- Start: Cart -->
<!-- Cart: End -->
<!-- Start: Page Wrap -->
<div id="wrap" class="container_24">
	<!-- Header Grid Container: Start -->
<div id="cart" class="cart">
	<?php if($this->cart->total() > 0){ ?>
	<div id="addnews" class="padding">
		<p class="note">
			<span class="icon info"></span> 
				<a href="<?php echo base_url('backend/ventas');?>">Carrito con <? echo $this->cart->total_items();  ?> items.</a>
		</p>
	</div>
	<?}?>
</div>
	<div class="grid_24">	
		<!-- User Panel: Start -->
		<div id="userpanel">
			<!-- User: Start -->
			<ul id="user" class="dropdown">
				<li class="topnav">
					<!-- User Name -->
					<a href="#" class="top icon user">Administrator</a>					
					<!-- User Dropdown Content: Start -->
					<ul class="subnav">  
			            <li><a href="#" class="icon settings">Settings</a></li>  
			            <li><a href="#messages" class="icon chatbubbles popup">Messages</a></li> 
			            <li><a href="../login/close" class="icon lock">Log out</a></li>  
			        </ul>  
			        <!-- User Dropdown Content: End -->
				</li>
			</ul>
			<!-- User: End -->
			
			<!-- Messages: Start -->
			<ul class="messages">
				<!-- Messages amount with Popup and Tip -->
				<li><a href="#messages" class="newmsg tip popup" title="16 Messages"> <span>16</span></a></li>
			</ul>
			<!-- Messages: End -->
			
			<!-- Messages Popup Content: Start -->
			<div class="box_content padding hide" id="messages">
				div de mensajes
			</div>
			<!-- Messages Popup Content: End -->
			
			<!--
			<ul id="style" class="dropdown right">
				<li class="topnav">
					<a href="#" class="top icon brush">Style</a>
					<ul class="subnav">  
			            <li><a href="#blue" class="icon circle">Blue</a></li>  
			            <li><a href="#red" class="icon circle">Red</a></li> 
			            <li><a href="#dark" class="icon circle">Dark</a></li> 
			            <li><a href="#green" class="icon circle">Green</a></li> 
			            <li><a href="#purple" class="icon circle">Purple</a></li> 
			            <li><a href="#brown" class="icon circle">Brown</a></li> 
			        </ul>  
				</li>
			</ul>
			-->
			<!-- Width Switcher: Start -->
			<!--
			<ul id="width" class="dropdown right">
				<li class="topnav">
					<a href="#" class="top icon coverflow">Width</a>
					<ul class="subnav">  
			            <li><a href="#fluid" class="icon coverflow">Fluid</a></li>  
			            <li><a href="#fixed" class="icon coverflow">Fixed</a></li> 
			        </ul>  
				</li>
			</ul>
			-->
			<!-- Width Switcher: End -->
			
		</div>
		<!-- User Panel: End -->
		
		<!-- Header: Start -->
		<div id="header">
				
			<!-- Logo: Start -->
			<a href="<?php echo base_url(); ?>backend/site"id="logo">Simplpan - Admin Panel</a>
			<!-- Logo: End -->
			
			<!-- Navigation: Start -->
			<ul id="navigation" class="dropdown">
				<li><a class="dashboard active" href="<?php echo base_url(); ?>backend/site">Maquinaria</a></li>
				
				<!-- Navigation Dropdown Menu Item: Start -->
				<li class="topnav">
					<a class="frames" href="#">Catalogos</a>
					
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
						<li><a href="<?php echo base_url(); ?>backend/clientes" class="icon blocks">Clientes</a></li> 
			            <li><a href="<?php echo base_url(); ?>backend/marcas" class="icon blocks">Marcas</a></li>  
			            <li><a href="<?php echo base_url(); ?>backend/tipos" class="icon blocks">Tipos</a></li> 
			        </ul> 
			        <!-- Navigation Dropdown Menu Item Content: End --> 
				</li>
				<!-- Navigation Dropdown Menu Item: End -->
				
				<!-- Navigation Dropdown Menu Item: Start -->
				<li class="topnav">
					<a class="pages" href="#">Modulos</a>
					
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
						<li><a href="<?php echo base_url(); ?>backend/Contenido" class="icon pages">Contenido</a></li>  	
						<li><a href="<?php echo base_url(); ?>backend/ventas" class="icon pages">Ventas</a></li>  
			            <li><a href="<?php echo base_url(); ?>backend/promociones" class="icon pages">Promociones</a></li>  
			            <li><a href="<?php echo base_url(); ?>backend/Actividad" class="icon pages">Actividad</a></li> 
			        </ul>  
			        <!-- Navigation Dropdown Menu Item Content: End --> 
				</li>
				<!-- Navigation Dropdown Menu Item: End -->
				
				<!-- Navigation Menu Item: Start -->
				<li class="topnav">
					<a class="pages" href="#">Reportes</a>
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
						<li><a href="<?php echo base_url(); ?>backend/individual" class="icon list">Individual</a></li>  
			            <li><a href="<?php echo base_url(); ?>backend/multiple" class="icon pages">Multiple</a></li>  
			        </ul>  
			        <!-- Navigation Dropdown Menu Item Content: End --> 
				</li>
				<!-- Navigation Menu Item: End -->
			</ul>
			<!-- Navigation: End -->	
		</div>
		<!-- Header: End -->
		<!-- Breadcrumb Bar: Start -->
		<div id="breadcrumb">
			<!-- Breadcrumb: Start -->
			<ul class="left">
				welcome <?php echo $this->session->userdata('username'); ?>
			</ul>
			<!-- Breadcrumb: End -->			
		</div>
		<!-- Breadcrumb Bar: End -->
	</div>
	<!-- Header Grid Container: End -->


<!-- 100% Box Grid Container: Start -->
<div class="grid_24">
	<!-- 
	<div class="notice info">
		<p>Welcome to Simplpan Admin Template! We hope you enjoy your stay and be sure to check out the other pages</p>
	</div>
	 -->
</div>