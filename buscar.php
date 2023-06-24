<?php 
require_once "conexion.php";
//Datos ingresados en el buscador
$Busqueda = $_POST["Title"];
//Busqueda de similitudes
$conexion= new conexion();
$query = $conexion->prepare("SELECT * FROM musicas WHERE nombre LIKE '%$Busqueda%' OR autor LIKE '%$Busqueda%' ORDER BY album ASC");
$query->execute();
$count=$query->rowCount();

$Salida = "";

$Contador=0;

if ($count > 0) {
while ($campo=$query->fetch(PDO::FETCH_ASSOC)) {
	$Contador++;
	
	//Mostramos los datos de las musicas
	$Salida.= '<div class="ContenedorMusicas FuenteParrafos" id="'.$campo['id'].'" style="margin-bottom: 15px;padding-top: 4px;transition: background-color 0.4s ease;" onmouseover="Senalar('.$campo['id'].')">
		<div class="Responsive2">'. $Contador .'</div>
		<div class="Responsive"><img src="'. $campo['rutaportada'] .'" width="100px" height="100px"></div>
		<div><b class="songs">'. $campo['nombre'] .'</b></div>
		<div class="Responsive2" style="color: #a4a4a4;">'. $campo['autor'] .'</div>
		<div class="Responsive">'. $campo['album'] .'</div>
		<div><ion-icon name="play" class="Play" onclick="reproducir('.$campo['id']./*Id de la Musica*/')"></ion-icon></div>
	</div>';
}
}else{ //Si no hay coincidencias mostramos un mensaje
	$Salida='<div style="margin-top: 30px;">
	    <i>No hay resultados para <b class="songs">"'.$Busqueda.'"</b></i>
	</div>
	<ion-icon name="search-outline" style="font-size: #fff; margin: 20px 10px 20px;font-size: 6rem;"></ion-icon>';
}
//Imprime los datos de los podcasts resultantes
echo $Salida;
?>