<?php
include_once 'configBD.php';
seguridad('admin');
?>

<head>
<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<html>
<body>
<div class="menu">
<a href=borrarusuarios.php>eliminar usuarios</a><br><br>
<a href=crearLibros.php>insertar libros</a><br><br>
<a href=borrarlibros.php>borrar libros</a><br><br>
<a href=visualizarreservasadmin.php>cancelar reservas</a><br><br>
<a href=cerrarsesion.php>cierra sesion</a><br>
</div>
</body>
</html>
