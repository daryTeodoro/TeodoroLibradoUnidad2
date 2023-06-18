<?php
require_once 'conexion.php';

/*Funcion para consultar datos de musica en la tabla Musicas*/
function reproducirMusica($Id) {

    $conexion= new conexion();
    $query=$conexion->prepare('SELECT * FROM musicas WHERE id = :id');
    $query->bindParam(':id',$Id);
    $query->execute();
    $count=$query->rowCount(); //Cuenta si existe el registro

    if ($count == 1) {
        // Si se encontró un registro, devuelve los datos del usuario como un array asociativo
        return $query->fetch(PDO::FETCH_ASSOC);
    } else {
        // Si no se encontró ningún registro, devuelve false
        return false;
    }
}



/*Funcion para consultar a partir del CORREO*/
function consultarUsuario($Correo) {

    $conexion= new conexion();
    $query=$conexion->prepare('SELECT * FROM usuarios WHERE correo = :correo');
    $query->bindParam(':correo',$Correo);
    $query->execute();
    $count=$query->rowCount(); //Cuenta si existe el registro

    if ($count == 1) {
        // Si se encontró un registro, devuelve los datos del usuario como un array asociativo
        return $query->fetch(PDO::FETCH_ASSOC);
    } else {
        // Si no se encontró ningún registro, devuelve false
        return false;
    }
}



/*Funcion para hacer el registro de usuario*/
function registrarUsuario($Nombre,$Correo,$Contrasena) {
    $conexion = new conexion();
    $Insert = $conexion->prepare('INSERT INTO usuarios(nombre, correo, contrasena) VALUES (:nombre, :correo, :contrasena)');
    $Insert->bindParam(':nombre',$Nombre);
    $Insert->bindParam(':correo',$Correo);
    $Insert->bindParam(':contrasena',$Contrasena);
    $Insert->execute();

    if ($Insert) {
        return 1;
    } else {
        return false;
    }
}
?>