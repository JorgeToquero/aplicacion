<?php
include_once 'configBD.php';
seguridad('admin');
$conex=mysqli_connect($server,$user,$pass);
mysqli_select_db($conex,$DataBase);
if (isset($_GET['isbn']) && $_GET['isbn']!=""){
   $borrar="Delete from libros where isbn='$_GET[isbn]';";
   mysqli_query($conex,$borrar);
  }
$consulta="select * from libros;";
$result=mysqli_query ($conex,$consulta);
echo '<h3>Libro borrado correctamente</h3>';

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
<div id="info">
<head>
<h1>Libreria Universal</h1>
<h2> Borrar libros</h2>
            <table border="1">
                <tr><td>titulo</td><td>isbn</td><td>categoria</td><td>autor</td><td>editorial</td></tr>
            
               

<?php
	
			   
                while($v=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>$v[titulo]</td><td>$v[isbn]</td><td>$v[categoria]</td><td>$v[autor]</td><td>$v[editorial]</td>";
                   echo "<td> <a href='borrarlibros.php?isbn=$v[isbn]'>Eliminar </a>";
                    echo "</tr>";
               }
            ?>
			
			</table>
            
        </div>
        
        <a href='MenuAdmin.php'>Volver</a>
    </body>   
    
</html>