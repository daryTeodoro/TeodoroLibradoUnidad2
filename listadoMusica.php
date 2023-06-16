<!--Consulta a la tabla con registros de musicas para mostrarlos en una lista en orden alfabetico (de la A al Z)-->
<?php
require_once 'conexion.php';

//Consulta SQL para ver todos los registros de musicas
$conexion= new conexion();
$query=$conexion->prepare('SELECT * FROM musicas ORDER BY album ASC');
$query->execute();
$count=$query->rowCount(); 

//Ocupamos el contador para poner numero de lista
$Contador=0;
if ($count > 0) {

	while($campo=$query->fetch(PDO::FETCH_ASSOC)) {
		$Contador++;
		//Mostramos los datos de las musicas
		echo'<div class="ContenedorMusicas FuenteParrafos">
		    <div>'. $Contador .'</div>
		    <div><img src="'. $campo['rutaportada'] .'" width="100px" height="100px"></div>
		    <div><b class="songs">'. $campo['nombre'] .'</b></div>
		    <div style="color: #a4a4a4;">'. $campo['autor'] .'</div>
		    <div>'. $campo['album'] .'</div>
		    <div><ion-icon name="play" class="Play"></ion-icon></div>
		</div>';
	}

} else {
	//Si no hay registros mostramos un mensaje
	echo 'Sin Registros';
}
?>