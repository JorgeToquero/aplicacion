
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
                  if(esNulo(formulario.login.value)||esNulo(formulario.password.value)){
                  alert("No puedes tener campos en blanco");
                  return false;
              }
              return true;
          }
        </script>
    </head>  
    <body>
        <div id="info">
		<h1>Libreria Universal</h1>
        <form method="post" action="./control.php" onsubmit="return validar();" id="miFormulario">
            <label> Login</label><br>
            <input type="text" name="login"> <br>
            <label> Password </label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Entrar">
            
        </form>     
        
            <?php
                 if (isset($_GET['errorusuario'])&& $_GET['errorusuario']=="si"){
                 echo "<h2> comprueba tus datos de acceso </h2>";
    
                }


				?>
				<a href=registrados.php>registrar usuarios</a><br>
				<a href=invitados.php>visualizarlibros</a> 
		</div>
</body>	
				
</html>
