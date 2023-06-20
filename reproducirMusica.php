<?php
require "funciones.php";
//Obtenemos el folio a traves del metodo POST
$Id_Musica = $_POST['Id'];

$Musica = reproducirMusica($Id_Musica);

echo'<div class="TotalCenter FuentePrincipal" id="Acceso1" style="font-size: 1.5rem;flex-direction:row;" onclick="maximizar()">
  <b class="space">Space</b>
  <b class="songs">Songs</b>
</div>';

echo'<div class="TotalCenter" style="color: #000000;" id="Acceso2" onclick="maximizar()">'. $Musica['nombre'] .' - '. $Musica['autor'] .'</div>';

echo'<div>
  <ion-icon name="play" class="R-Icon" id="PlayReproductor" onclick="Start()"></ion-icon>
  <ion-icon name="pause" class="R-Icon" id="PauseReproductor" onclick="Start()"></ion-icon>
</div>';
?>