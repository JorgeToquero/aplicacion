<?php
include_once 'configBD.php';
seguridad('admin');
$conex=mysqli_connect($server,$user,$pass);
mysqli_select_db($conex,$DataBase);

//En caso de que se pulse un enlace para borrar un usuario $_GET[login] tendra la clave primaria de ese usuario
if (isset($_GET['login']) && $_GET['login']!=""){
//Consulta de borrado y la ejecuta
   $borrar="Delete from usuarios where login='$_GET[login]';";
   mysqli_query($conex,$borrar);
  }
  
//Para visulizar los usuario existente se ejecuta una consulta de seleccion con la tabla usuario  
$consulta="select * from usuarios;";
$result=mysqli_query ($conex,$consulta);
echo '<h3>usuario borrado correctamente</h3>';

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
<div id="info">
<h1>Libreria Universal</h1>
<h2>Borrar usuarios</h2>
            <table border="1">
                <tr><td>login</td><td>rol</td><td>nombre</td><td>apellidos</td></tr>
				
<?php
	    //Con este bucle las filas MySQL se transforman en filas de una tabla HTML    
     		 while($v=mysqli_fetch_array($result)){
			 //$v es un array que contiene la lista de todos los campo de la tabla
                    echo "<tr>";
                    echo "<td>$v[login]</td><td>$v[rol]</td><td>$v[nombre]</td><td>$v[apellidos]</td>";
                   //Crea por ultimo un enlace con la clave primaria para borrar el usuario
				   echo '<td> <a href="borrarusuarios.php?login='.$v['login'].'">Eliminar </a>';
                    echo "</tr>";
               }
            ?>
			
			</table>
            
        </div>
        <a href='MenuAdmin.php'>Volver</a>
        
    </body>   
    
</html>