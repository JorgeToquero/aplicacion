<?php
include_once 'configBD.php';
seguridad('admin');
$conex=mysqli_connect($server,$user,$pass)or die("Error en la conexión");
mysqli_select_db($conex,$DataBase);

//visualiza las reservas y cancela todas las reservas de todos los usuarios
if($_GET!=null)
{
    $login=$_GET['login'];
	$isbn=$_GET['isbn'];
	$consulta="DELETE FROM reserva_libros WHERE login='$login' AND isbn='$isbn'";
	mysqli_query($conex,$consulta) or die("Error al cancelar reserva".mysqli_error());
	
	echo "Reserva cancelada correctamente<br>";
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
<div id="info">
<h1>Libreria Universal</h1>
<h2> Cancelar Reservas</h2>
            <table border="1">
                <tr><th>login</th><th>isbn</th><th>fecha</th></tr>
            <?php
			    $consulta="SELECT * FROM reserva_libros;";
				$resul= mysqli_query($conex,$consulta);
                while($v=mysqli_fetch_row($resul)){
                    echo "<tr>";
                    
                    foreach($v as $i => $valor){
					    if($i==1)
						{
						   $isbn=$valor;
						}else if($i==0){
						   $login=$valor;
						}
                        echo "<td>$valor</td>";  
                    }
				  echo "<td><a href='visualizarreservasadmin.php?login=$login&isbn=$isbn'>Cancelar reservas</a></td>";
				  echo "</tr>";
				}	
			 ?>
         </table>
            
        </div>
        
        <a href='MenuAdmin.php'>Volver</a>
    </body>   
    
</html>	

