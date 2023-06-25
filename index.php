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
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!--CSS Local-->
    <style type="text/css">
    	.TotalCenter{
    		height: 100vh;
    	}#ABack{
    		display: none;
    	}
    </style>
</head>

<body class="Margen-0">
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
</body>
</html>