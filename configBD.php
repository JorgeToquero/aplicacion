<?php

/* contiene las variables para conectar a mysql 
 */

$server="localhost";
$user="root";
$pass="";
$DataBase="libreria";

//Define la funcion seguridad para utilizarla en las paginas de la aplicacion
function seguridad($rol){
    //Inicio la sesión
session_cache_limiter('nocache,private');
session_name('admin');
session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION['rol'] != $rol) {
    //si no existe, envio a la página de autentificacion
    header("Location: index.php");
    //ademas salgo de este script
    exit();
} 



} 
?>
