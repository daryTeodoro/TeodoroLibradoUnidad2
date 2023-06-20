<?php
require "funciones.php";
//Obtenemos el folio a traves del metodo POST
$Id_Musica = $_POST['Id'];

$Musica = reproducirMusica($Id_Musica);

echo'<img src="'. $Musica['rutaportada'] .'" class="ImgPortada">';

echo'<div style="font-size: 1.1rem; color: #ffffff;">'. $Musica['nombre'] .' - <b style="color: #a4a4a4;">'. $Musica['autor'] .'</b></div>';

echo '<div class="Progress">
  <div id="Estado" onclick="Adelantar(event)" class="Barra"></div>
  <audio controls autoplay id="AudioBarra" onended="PararMusic()" ontimeupdate="ActMusic()">
    <source src="'.$Musica['rutaaudio']./*Ruta del archivo de audio del podcast*/'">
  </audio>
</div>';

echo '<div class="Opciones">
  <div class="Responsive" style="font-size: 1.5rem;">
    <b class="space">Space</b><b class="songs">Songs</b>
  </div>

  <div>
    <ion-icon name="play" id="PlayBarra" onclick="Start()"></ion-icon>
    <ion-icon name="pause" id="PauseBarra" onclick="Start()"></ion-icon>
  </div>

  <div>
    <ion-icon name="scan-circle-outline" id="IconMinimizar" onclick="minimizar()"></ion-icon>
  </div>
</div>';
?>