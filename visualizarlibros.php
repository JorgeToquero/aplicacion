<?php
include_once 'configBD.php';
seguridad('registrado');
$conex=mysqli_connect($server,$user,$pass)or die("Error en la conexión");
mysqli_select_db($conex,$DataBase);

//ver las reservas y cancelar las reservas de ese usuario
    if($_GET!=null)
{
    $login=$_SESSION['login'];
	$isbn=$_GET['isbn'];
	$consulta="INSERT INTO reserva_libros VALUES('$login','$isbn',CURRENT_DATE())";
	mysqli_query($conex,$consulta) or die("Error al insertar usuario".mysqli_error());
	
    echo "<div class='msg'>Reserva realizada correctamente</div>";
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
<div id="info">
<h1>Libreria Universal</h1>
<h2>Listado de Libros</h2>
           <div class="table-responsive">
           <table border="1">
                <tr><th>titulo</th><th>isbn</th><th>categoria</th><th>autor</th><th>editorial</th></tr>
            <?php
                $consulta="SELECT * FROM libros;";
                $resul= mysqli_query($conex,$consulta);
               
                while($v=mysqli_fetch_row($resul)){
                    echo "<tr>";
                    
                    foreach($v as $i => $valor){
					    if($i==1)
						{
						   $isbn=$valor;
						  
						}
                        echo "<td>$valor</td>";  
                    }
				  echo "<td><a href='visualizarlibros.php?isbn=$isbn'>Reservar</a></td>";
				  echo "</tr>";
				}	
			 ?>
         </table>
         </div>
            
        </div>
        <a href='MenuRegistrados.php' class='btn btn-outline btn-small'>Volver</a>
        
    </body>   
    
</html>	