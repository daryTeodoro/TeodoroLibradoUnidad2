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

    	.Linea{
    		border: none;
    		border-top: 3px solid white;
    		margin: 5px 0px 20px;
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

    	#Main{
    		display: none;
    	}#Modal{
    		display: none;
    	}

    	.Barra { /*Barra de Porgreso del Reproductor Inferior*/
            height: 10px;
            width: 70vw;
            margin-top: 20px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            cursor: hand;
            background: #dbecff;
        }#AudioBarra{
        	display: none;
        }

        .CampoFormulario{
        	border: 3px solid #e5d1fd;
        	padding: 10px;
        	width: 60vw;
        }.CampoFormulario:focus{
        	outline: none;
        	border-color: #a1cafb;
        	background-color: #dff2fd;
        }

        .ImgPortada{
        	height: 50vh;
        	border-radius: 50%;
        	margin: 20px 0px;
        }

        #PlayBarra{
        	font-size: 3rem;
        	color: #ffffff;
        	margin-top: 15px;
        	cursor: pointer;
        }#PauseBarra{
        	display: none;
        	font-size: 3rem;
        	color: #ffffff;
        	margin-top: 15px;
        	cursor: pointer;
        }

        #Acceso1,
        #Acceso2{
        	cursor: pointer;
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


	<script type="text/javascript">
		let reproductor = document.getElementById("Reproductor"); //Contenedor del Reproductor
		let body = document.getElementById("Body"); //Contenedor del Reproductor
		let main = document.getElementById("Main"); //Contenedor del contenido principal
		let modal = document.getElementById("Modal"); //Contenedor del reproductor en modal

		setTimeout(() => {
			$('.Cambio').animate({height: "toggle", opacity: "toggle"}, "slow");
		}, 3000);
	    
	    //Evento al dar clic en PLAY de algun audio de la lista (Reproducir Musica)
		function reproducir(Id) {
			// Remover una clase
			reproductor.classList.remove("ReproductorDesactivado");
			// Agregar una clase
			reproductor.classList.add("ReproductorActivado");
			// Agregar margin extra al body
			body.style.marginBottom = '65px';

			$.ajax({
				type: "post",
				url: "reproducirMusica.php",
				data: {
					Id: Id
				},
				success: function(respuesta){
					$("#Reproductor").html(respuesta);
				}
			});

			$.ajax({
				type: "post",
				url: "modal.php",
				data: {
					Id: Id
				},
				success: function(r){
					$("#Modal").html(r);
				}
			});
		}


		/*Cambiar entre Reproductores*/
		function maximizar(){
			$('#Reproductor').fadeOut("fast",function(){
                modal.style.display = "flex";
                main.style.display = "none";
                body.style.marginBottom = '0px';
            });
        }


		//Codigo para buscar una Musica (Filtrar)
        $(function(){
            $("#Buscar").on("keyup", function(){
                var buscar = $("#Buscar").val();

                $.ajax({
                    type: "post",
                    url: "buscar.php",
                    data: {
                        Title: buscar
                    },
                    success: function(respuesta){
                        $("#ListaMusicas").html(respuesta);
                    }
                })
            })
        });

        //Avance de la Barra de progreso de Reproductor Inferior
        function ActMusic() {
            //Reproductor de Audio Inferior
            const musica = document.getElementById("AudioBarra");
            //Barra de progreso del Reproductor de Audio Inferior
            var estado = document.getElementById('Estado');

            var progresNow = musica.currentTime / musica.duration * 100;

            if (isNaN(progresNow)) progresNow = 0;
                progresNow += '%';
                estado.style.background = 'linear-gradient(to right, #dbecff 0%,#dbecff '+progresNow+',#56006f '+progresNow+',#56006f 100%)';
        }

        //Cambiar minuto de la musica por medio de la barra de progreso Reproductor Inferior
        function Adelantar(e) {
            const musica = document.getElementById("AudioBarra");
            var estado = document.getElementById('Estado');

            var position = (e.clientX - estado.offsetLeft) / estado.clientWidth;
            console.log(position);
            musica.currentTime = musica.duration * position;
        }

        //Evento al dar clic en PLAY/PAUSA del Reproductor de audio Inferior
        function Start() {
            //Boton PLAY de Reproductor Inferior
            let empezar = document.getElementById('PlayBarra');
            //Boton PAUSA de Reproductor Inferior
            let pausar = document.getElementById('PauseBarra');
            //Reproductor de Audio Inferior
            const player = document.getElementById("AudioBarra");

            if (player.paused || player.ended) {
                pausar.style.display = 'block';
                empezar.style.display = 'none';
                player.play();
            } else {
                pausar.style.display = 'none';
                empezar.style.display = 'block';
                player.pause();
            }
        }

        //Evento al terminar el audio del Reproductor Inferior
        function PararMusic() {
            //Boton PLAY de Reproductor Inferior
            let empezar = document.getElementById('PlayBarra');
            //Boton PAUSE de Reproductor Inferior
            let pausar = document.getElementById('PauseBarra');
                empezar.style.display = 'block';
                pausar.style.display = 'none';
        }
	</script>

	<!--Libreria de Iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>