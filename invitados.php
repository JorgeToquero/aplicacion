<?php
include_once 'configBD.php';
$conex=mysqli_connect($server,$user,$pass)or die("Error en la conexión");
mysqli_select_db($conex,$DataBase);
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
<div id="info">
<h1>Libreria Universal</h1>
<h2>Listado de Libros</h2>
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
				  echo "</tr>";
				}	
			 ?>
         </table>
            <a href='index.php'>Volver</a>
        </div>
        
        
    </body>   
    
</html>	