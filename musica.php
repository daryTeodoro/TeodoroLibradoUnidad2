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
    	/****Borrar mas adelante****/
    	.BordeBlanco{
    		border: 2px solid #ffffff;
    		border-radius: 10px;
    	}.Margen-1{
    		margin: 40px 10px;
    	}.ContenedorMusicas{
    		display: grid;
    		align-items: center;
    		justify-content: center;
    		grid-template-columns: 10% 20% 20% 20% 20% 10%;
    	}.Play{
    		color: #caf2fd;
    		font-size: 2rem;
    		cursor: pointer;
    	}.Play:hover{
    		color: #8797ff;
    	}.CampoFormulario{
    		padding: 10px 5px;
    		border: 3px solid #caf2fd;
    		border-radius: 10px;
    	}.CampoFormulario:focus{
    		outline: none;
    		background-color: #e0ecff;
    		border-color: #8797ff;
    	}

    	.ContenedorGrid{
    		grid-template-columns: 70% 30%;
    	}
    </style>
</head>
<body class="Margen-0 FondoObscuro">
	<!--Preloader-->
	<div class="ContenedorFull" align="center">
		<div class="FuentePrincipal" style="font-size: 5rem;">
			<b class="space">Space</b>
			<b class="songs">Songs</b>
		</div>
	</div>

	<!--Principal (Contenido)-->
	<div align="center" style="padding: 40px 20px;">
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
			<input type="text" name="Buscar" class="CampoFormulario" placeholder="Buscar Música">
		</div>
		<!--Listado de Musicas-->
		<div>
			<div class="ContenedorMusicas FuenteSecundaria" style="font-size: 2rem;">
				<div>N°</div>
				<div>Portada</div>
				<div>Nombre</div>
				<div>Autor</div>
				<div>Album</div>
				<div>Play</div>
			</div><hr style="margin: 0px 0 15px;">
			<?php include('listadoMusica.php') ?>
		</div>
	</div>

	<!--Libreria de Iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>