<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/spacesongLogo.png" alt="favicon">
	<title>Space Songs - Bienvenido</title>
	<!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--CSS Local-->
    <style type="text/css">
    	.ContenedorGrid{
    		grid-template-columns: 70% 30%;
    	}

    	.animated-text {
    		animation: typing-animation 1s linear forwards;
    	}

    	@keyframes typing-animation {
    		0% {
    			opacity: 0;
    		}
    		100% {
    			opacity: 1;
    		}
    	}
    </style>
</head>
<body class="Margen-0 FondoObscuro" id="Body">
	<!--Preloader-->
	<div class="ContenedorFull Cambio" align="center" id="Start">
		<div class="FuentePrincipal" style="font-size: 5rem;">
			<b class="space animated-text">Space</b>
			<b class="songs animated-text">Songs</b>
		</div>
	</div>



	<!--Principal (Contenido)-->
	<div class="Cambio" align="center" style="padding: 15px 20px 5px;" id="Main">
		<div class="FuentePrincipal" style="font-size: 4rem;">
			<b class="space">Space</b>
			<b class="songs">Songs</b>
		</div>
		<!--Parrafo de presentacion-->
		<p class="FuenteParrafos" style="font-size: 1rem;">
		    Encuentra la Mejor Variedad de Música
	    </p>
	    <!--Buscador-->
		<div class="Margen-1">
			<input type="text" id="Buscar" class="CampoFormulario" placeholder="Buscar Música">
		</div>
		<!--Listado de Musicas-->
		<div>
			<!--Columnas de la lista-->
			<div class="ContenedorMusicas FuenteSecundaria" style="font-size: 2rem;">
				<div>N°</div>
				<div>Portada</div>
				<div>Nombre</div>
				<div>Autor</div>
				<div>Album</div>
				<div>Play</div>
			</div>
			<hr class="Linea"> <!--Linea Divisora-->
			
			<div id="ListaMusicas"><?php include('listadoMusica.php') ?></div> <!--Archivo con consulta de la tabla Musicas-->
		</div>
	</div>


	<!--Reproductor de Musica-->
	<div class="ReproductorDesactivado FuenteParrafos Max-Min" id="Reproductor" align="center">
		<!--Aqui van datos de la Musica-->
	</div>

	<div class="ContenedorFull FuentePrincipal" id="Modal" align="center">
		<!--Modal del Reproductor-->
	</div>

	<script src="js/script.js"></script>
	
	<!--Libreria de Iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>