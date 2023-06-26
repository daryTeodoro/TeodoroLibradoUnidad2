<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/spacesongLogo.png" alt="favicon">
	<title>Space Songs</title>
	<!--CSS Externo-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/parallax.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!--CSS Local-->
    <style type="text/css">
    	.TotalCenter{
    		height: 100vh;
    	}#ABack{
    		display: none;
    	}
		.swiper {
			width: 600px;
			height: 300px;
		}
    </style>

	<!-- JS Externo -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>

<body class="Margen-0" onload="quitBlock()">
	<!--Llamada al navbar-->
	<?php include('navbar.php'); ?>

	<!--Presentacion del Proyecto-->
	<div class="ContenedorGrid">

		<!-- columna Izquierda (Nombre del Sitio) -->
		<div class="TotalCenter">
			<h1 class="FuentePrincipal">
				<b class="space">SPACE</b>
				<b class="songs">SONGS</b>
			</h1>
		</div>

		<!-- columna Derecha (Carrusel) -->
		<div class="TotalCenter">
			<!--Aqui va Carrusel de Imagenes con Canciones mas Escuchadas)-->
			<h3 class="FuentePrincipal">¡Top 5 México!</h3>
			<!-- Slider main container -->
			<div class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<img src="portadasMusic/Amor.jpg" alt="PortadaAmor" class="slider-img">
				</div>
				<div class="swiper-slide"><img src="portadasMusic/Bokurano.jpg" alt="PortadaAmor" class="slider-img"></div>
				<div class="swiper-slide"><img src="portadasMusic/Bunka.jpg" alt="PortadaAmor" class="slider-img"></div>
				<div class="swiper-slide"><img src="portadasMusic/Smile.jpg" alt="PortadaAmor" class="slider-img"></div>
				<div class="swiper-slide"><img src="portadasMusic/The-Gods-We-Can-Touch.jpg" alt="PortadaAmor" class="slider-img"></div>
				
			</div>
			

			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

			</div>
		</div>

	</div>

	<!--Codepen.io (ejemplo de animacion: https://codepen.io/creativeocean/pen/qBbBLyB)-->


	<!-- Canciones Jazz(Efectos de scroll) -->
	<div class="banner-jazz">
		<p class="p-parallax">Jazz</p>
	</div>
	<!-- Canciones Boleros(Efectos de scroll) -->
	<div class="banner-boleros">
		<p class="p-parallax">Boleros</p>
	</div>
	<!-- Canciones Baladas Romanticas(Efectos de scroll) -->
	<div class="banner-baladas">
		<p class="p-parallax">Baladas</p>
	</div>
	<!-- Canciones J-Rock(Efectos de scroll) -->
	<div class="banner-jrock">
		<p class="p-parallax">J-Rock</p>
	</div>
	<!-- Canciones Indie(Efectos de scroll) -->
	<div class="banner-indie">
		<p class="p-parallax">Indie</p>
	</div>

	<!-- JS Local -->
	<script src="js/slider.js" type="text/javascript"></script>
</body>
</html>