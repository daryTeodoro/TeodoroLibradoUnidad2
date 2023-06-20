let reproductor = document.getElementById("Reproductor"); //Contenedor del Reproductor
let body = document.getElementById("Body"); //Contenedor del Reproductor
let main = document.getElementById("Main"); //Contenedor del contenido principal
let modal = document.getElementById("Modal"); //Contenedor del reproductor en modal

/*Mostrar por 3 segundos una vista principal*/
setTimeout(() => {
  $('.Cambio').animate({height: "toggle", opacity: "toggle"}, "slow");
}, 3000);


/*Evento del mouse en lista de musicas*/
function Senalar(id) {
  /*cuando se pone el mouse en un elemento*/
  let contmusic = document.getElementById(id);
  contmusic.style.border = '1px solid #ffffff';
  contmusic.style.background = '#000000';
  /*cuando se quite el mosuse del elemento*/
  contmusic.addEventListener('mouseout', function(event) {
    contmusic.style.border = 'none'; // Restablecer el estilo del fondo al valor predeterminado
    contmusic.style.background = 'transparent';
  });
}

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
  $('#Reproductor').fadeOut("slow");
  $('#Main').fadeOut("slow");
  setTimeout(() => {
    modal.style.display = 'flex';
  }, 600);
  body.style.marginBottom = '0px';
}
function minimizar(){
  modal.style.display = 'none';
  $('#Reproductor').fadeIn("slow");
  $('#Main').fadeIn("slow");
  body.style.marginBottom = '65px';
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


//Avance de la Barra de progreso de Reproductor
function ActMusic() {
  //Reproductor de Audio predeterminado
  const musica = document.getElementById("AudioBarra");
  //Barra de progreso del Reproductor de Audio
  var estado = document.getElementById('Estado');

  var progresNow = musica.currentTime / musica.duration * 100;

  if (isNaN(progresNow)) progresNow = 0;
  progresNow += '%';
  estado.style.background = 'linear-gradient(to right, #dbecff 0%,#dbecff '+progresNow+',#56006f '+progresNow+',#56006f 100%)';
}


//Cambiar minuto de la musica por medio de la barra de progreso
function Adelantar(e) {
  const musica = document.getElementById("AudioBarra");
  var estado = document.getElementById('Estado');

  var position = (e.clientX - estado.offsetLeft) / estado.clientWidth;
  console.log(position);
  musica.currentTime = musica.duration * position;
}


//Evento al dar clic en PLAY/PAUSA del Reproductor de audio
function Start() {
  //Boton PLAY de Reproductor2
  let played = document.getElementById('PlayReproductor');
  //Boton PAUSA de Reproductor2
  let paused = document.getElementById('PauseReproductor');
  //Boton PLAY de Reproductor1
  let empezar = document.getElementById('PlayBarra');
  //Boton PAUSA de Reproductor1
  let pausar = document.getElementById('PauseBarra');
  //Reproductor de Audio
  const player = document.getElementById("AudioBarra");

  if (player.paused || player.ended) {
    pausar.style.display = 'block';
    empezar.style.display = 'none';
    paused.style.display = 'block';
    played.style.display = 'none';
    player.play();
  } else {
    pausar.style.display = 'none';
    empezar.style.display = 'block';
    paused.style.display = 'none';
    played.style.display = 'block';
    player.pause();
  }
}

//Evento al terminar el audio del Reproductor
function PararMusic() {
  //Boton PLAY de Reproductor2
  let played = document.getElementById('PlayReproductor');
  //Boton PAUSA de Reproductor2
  let paused = document.getElementById('PauseReproductor');
  //Boton PLAY de Reproductor1
  let empezar = document.getElementById('PlayBarra');
  //Boton PAUSE de Reproductor1
  let pausar = document.getElementById('PauseBarra');
  
  empezar.style.display = 'block';
  pausar.style.display = 'none';
  paused.style.display = 'none';
  played.style.display = 'block';
}