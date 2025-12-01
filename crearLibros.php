<?php
include_once 'configBD.php';
seguridad('admin');
$conex=mysqli_connect($server,$user,$pass);
mysqli_select_db($conex,$DataBase);

/* Si me llegan datos para insertar*/

if($_POST!=null){
//    $consulta='INSERT INTO libros VALUES(.$_POST["Asignatura"].','.$_POST["Fecha"].');';
    
     $titulo=$_POST['titulo'];
	 $isbn=$_POST['isbn'];
	 $categoria=$_POST['categoria'];
	 $autor=$_POST['autor'];
	 $editorial=$_POST['editorial'];
	 
    $consulta="INSERT INTO libros VALUES('$titulo','$isbn','$categoria','$autor','$editorial');";
    mysqli_query($conex,$consulta) or die ("fallo al insertar: $consulta");
    mysqli_close($conex);
	echo '<h3>Libro creado correctamente</h3>';
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css" />
 <script type="text/javascript">
          function esNulo(dato){
              if(dato==""||dato==null){
                  return true;
              }
              return false;
          }
		  function validar(){
              var formulario=document.getElementById("miFormulario");
                  if(esNulo(formulario.titulo.value)){
                  alert("No puedes tener campos en blanco");
                  return false;
                  }
				  if(esNulo(formulario.isbn.value)||esNulo(formulario.password.value)){
                  alert("No puedes tener campos en blanco");
                  return false;
                  }
				  if(esNulo(formulario.categoria.value)||esNulo(formulario.password.value)){
                  alert("No puedes tener campos en blanco");
                  return false;
                  }
				  if(esNulo(formulario.autor.value)||esNulo(formulario.password.value)){
                  alert("No puedes tener campos en blanco");
                  return false;
                  }
				  if(esNulo(formulario.editorial.value)||esNulo(formulario.password.value)){
                  alert("No puedes tener campos en blanco");
                  return false;
                  }
              return true;
          }
		  
		  
</script>
</head>  
    <body>
	<h1> Libreria Universal</h1>
	<h2> Insertar libros</h2>
<form method="post" action="#" onsubmit="return validar();" id="miFormulario">
            <label>titulo</label><br><input type="text" name="titulo"><br>
            <label>isbn</label><br><input type="text" name="isbn"><br>
            <label>categoria</label><br><input type="text" name="categoria"><br>
            <label>autor</label><br><input type="text" name="autor"><br>
			<label>editorial</label><br><input type="text" name="editorial"><br>
			<input type="submit" name="crear" value ="crear">
 </form> 
            <a href='MenuAdmin.php'>Volver</a>
    </body>
</html>    	