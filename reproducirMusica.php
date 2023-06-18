<?php
require "funcionesphp.php";
//Obtenemos el folio a traves del metodo POST
$Id_Musica = $_POST['Id'];

$Musica = reproducirMusica($Id_Musica);

echo'<div style="font-size: 1.3rem;">
  <b class="space">Space</b>
  <b class="songs">Songs<b>
</div>';

echo'<div>'. $Musica['nombre'] .' - '. $Musica['autor'] .'</div>';

echo'<div>
  <ion-icon name="play" class="R-Icon" onclick="play()"></ion-icon>
</div>';
?>