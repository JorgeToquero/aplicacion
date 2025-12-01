<?php
include_once 'configBD.php';
$conex=  mysqli_connect($server,$user,$pass)or die("Error en la conexión");
$consulta="CREATE DATABASE IF NOT EXISTS $DataBase;";

mysqli_query($conex,$consulta) or die("Error al crear la base de datos");
mysqli_select_db($conex,$DataBase);

// CREACIÓN DE TABLA DE USUARIOS
$consulta=<<<EOF
CREATE TABLE IF NOT EXISTS `usuarios` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(50) ,
  `nombre` varchar(50) ,
  `apellidos` varchar(50) ,
  PRIMARY KEY (`login`)
);
EOF;
mysqli_query($conex,$consulta)or die("Fallo al crear tabla usuarios");

$consulta=<<<EOF
CREATE TABLE IF NOT EXISTS `libros` (
   titulo varchar(50),
   isbn varchar(50),
   categoria varchar(50),
   autor varchar(50),
   editorial varchar(50),
   PRIMARY KEY (isbn)
);
EOF;
mysqli_query($conex,$consulta)or die("Fallo al crear tabla libros");

// CREACIÓN DE RESERVA DE LIBROS
$consulta=<<<EOF
CREATE TABLE IF NOT EXISTS `reserva_libros` (
  `login` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  PRIMARY KEY (`login`,`isbn`,`fecha`),
  FOREIGN KEY(login) REFERENCES usuarios(login),
  FOREIGN KEY(isbn) REFERENCES libros(isbn)
  );
EOF;

mysqli_query($conex,$consulta)or die("Fallo al crear tabla reservas");


$consulta=<<<EOF
INSERT INTO `usuarios` (
`login` ,
`password`,
`rol`,
`nombre`,
`apellidos` 
)
VALUES (
'admin','1234','admin','admin','admin'
);
EOF;
mysqli_query($conex,$consulta) or die("No he podido insertar admin");

echo("La infraestructura de BD y tablas ha sido creada. destruye este fichero.<br>
     con admin 1234")

?>
