<?php
    session_start();

    //Si no hay una sesion activa:
    if (empty($_SESSION['Usuario'])) {
        echo "<script>
            window.location.href = 'login.php';
        </script>";
    }

    //Si se da clic en cerrar sesion:
    if (isset($_POST['Exit'])) {
    	session_destroy();
        echo "<script>
            window.location.href = 'login.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
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

    	/*Animacion en Texto*/
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

    	/*Responsive 750px*/
    	@media (max-width: 750px) {
    		.Responsive{
    			display: none;
    		}.ContenedorMusicas{
    			grid-template-columns: 10% 50% 30% 10%;
    		}

    		.Opciones{
    			grid-template-columns: 50% 50%;
    		}#PlayBarra,
    		#PauseBarra,
    		#IconMinimizar{
    			font-size: 2rem;
    		}

    		.Barra{
    			height: 8px;
    			width: 60vw;
    			margin-top: 10px;
    		}.ImgPortada{
    			margin: 10px 0px;
    		}
    	}

    	/*Responsive 480*/
    	@media (max-width: 480px) {
    		.Responsive2{
    			display: none;
    		}.ContenedorMusicas{
    			grid-template-columns: 60% 40%;
    		}

    		.ReproductorActivado{
    			grid-template-columns: 65% 35%;
    		}

    		.Barra{
    			width: 80vw;
    		}.ImgPortada{
    			height: 35vh;
    		}
    	}
    </style>
</head>
<body class="Margen-0 FondoGalactico" id="Body" style="color: #ffffff;">
	<!--Animacion de Carga establecida-->
	<div class="ContenedorFull Cambio FondoObscuro" align="center" id="Start">
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
	    <br>
	    <!--Boton para cerrar sesion-->
	    <form method="post" action="">
	    	<button type="sumbit" name="Exit" class="boton">Cerrar Sesión</button>
	    </form>

	    <!--Buscador-->
		<div class="Margen-1">
			<input type="text" id="Buscar" class="CampoFormulario" placeholder="Buscar Música" autocomplete="off">
		</div>

		<!--Listado de Musicas-->
		<div>
			<hr class="Linea" style="margin-bottom: 10px;"> <!--Linea Divisora-->
			<!--Columnas de la lista-->
			<div class="ContenedorMusicas FuenteSecundaria" style="font-size: 2rem;">
				<div class="Responsive2">N°</div>
				<div class="Responsive">Portada</div>
				<div>Nombre</div>
				<div class="Responsive2">Autor</div>
				<div class="Responsive">Album</div>
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