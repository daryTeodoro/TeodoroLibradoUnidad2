<?php
require "funciones.php";
//Obtenemos el folio a traves del metodo POST
$Id_Musica = $_POST['Id'];

$Musica = reproducirMusica($Id_Musica);

echo'<div id="Acceso1" style="font-size: 1.3rem;" onclick="maximizar()">
  <b class="space">Space</b>
  <b class="songs">Songs<b>
</div>';

echo'<div id="Acceso2" onclick="maximizar()">'. $Musica['nombre'] .' - '. $Musica['autor'] .'</div>';

echo'<div>
  <ion-icon name="play" class="R-Icon" onclick="Start()"></ion-icon>
</div>';
?>