<?php
require "funciones.php";
//Obtenemos el folio a traves del metodo POST
$Id_Musica = $_POST['Id'];

$Musica = reproducirMusica($Id_Musica);

echo'<div style="font-size: 3rem;">
  <b class="space">Space</b>
  <b class="songs">Songs<b>
</div>';

echo'<img src="'. $Musica['rutaportada'] .'" style="height: 300px; width: 300px; border-radius: 50%; margin: 20px 0px;">';

echo'<div>'. $Musica['nombre'] .' - '. $Musica['autor'] .'</div>';

echo '<div class="col-6 Progress">
          <div id="Estado" onclick="Adelantar(event)" class="Barra"></div>
          <audio controls autoplay id="AudioBarra" onended="PararMusic()" ontimeupdate="ActMusic()"">
            <source src="'.$Musica['rutaaudio']./*Ruta del archivo de audio del podcast*/'">
          </audio>
      </div>';

?>