
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
                  if(esNulo(formulario.login.value)){
                    alert("Falta el login");
				    formulario.login.focus();
				    return false;
				  }
				  
				  if(esNulo(formulario.password.value)){
                     alert("Falta el password");
				     formulario.password.focus();
				     return false;
				  }
				  
				  if(esNulo(formulario.nombre.value)){
                  alert("Falta el nombre");
				  formulario.nombre.focus();
				  return false;
				  }
				  if(esNulo(formulario.apellidos.value)){
                  alert("Falta el apellido");
				  formulario.login.focus();
				  return false;
				  }
				  
				  
                  return true;
          }
        </script>
    </head>  
    <body>
	<?php
		include_once 'configBD.php';
		$conex=  mysqli_connect($server,$user,$pass)or die("Error en la conexión");

		mysqli_select_db($conex,$DataBase);

		if($_POST!=null)
		{
			$login=$_POST['login'];
			$password=$_POST['password'];
			$nombre=$_POST['nombre'];
			$apellidos=$_POST['apellidos'];
	
			$consulta="INSERT INTO usuarios VALUES('$login','$password','registrado','$nombre','$apellidos')";
			mysqli_query($conex,$consulta) or die("Error al insertar usuario".mysqli_error());
	
			echo "Usuario insertado correctamente<br>";
		}
?>

        <h1> libreria universal</h1>
		<h2> Datos de registro de usuarios</h2>
        <form method="post" action="#" onsubmit="return validar();" id="miFormulario">
            <label> Login</label><br>
            <input type="text" name="login"><br>
            <label> Password </label><br>
            <input type="password" name="password"><br>
			<label> nombre</label><br>
			<input type="text" name="nombre"> <br>
			<label> apellidos</label><br>
			<input type="text" name="apellidos"><br>
			
            <input type="submit" value="Entrar">
        </form>     
        
        <a href='index.php'>Volver</a>
    </body>   
    
</html>