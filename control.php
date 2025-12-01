<?php
/*Conecta con la base de datos utilizando el configBD*/
include_once 'configBD.php';
$conex=  mysqli_connect($server,$user,$pass)or die("Error en la conexión");
mysqli_select_db($conex,$DataBase);
/* Si el login y password pertenece a algun usuario las filas num_rows sera mayor que 0*/
if($_POST["login"] && $_POST["password"]){
echo "SELECT * FROM usuarios WHERE login='".$_POST['login']."' AND password=".$_POST['password'].";";
  //Es la consulta que busca los datos del usuario
  $consulta="SELECT * FROM usuarios WHERE login='".$_POST['login']."' AND password='".$_POST['password']."';";
  $resul=mysqli_query($conex,$consulta);
  if(mysqli_num_rows($resul)>0){
  //Si >0 entonces guardamos en variables de sesion el login y el rol porque se necesitaran mas adelante y no se pueden volver a preguntar
  //Las variables de session son permanentes
      session_cache_limiter('nocache,private');
      session_name('admin');
      session_start();
      $v=mysqli_fetch_row($resul);
	  $rol=$v[2];
	  $login=$v[0];
	  $_SESSION['login']=$login;
	  $_SESSION['rol']=$rol;
	  
	  //Dependiendo del rol del usuario le mandamos a un menu u otro
	  if($rol=='admin')
	  {
	    header("Location:MenuAdmin.php");
	  }else{
	    header("Location:MenuRegistrados.php");
	  }
    
	  
  }else{
  //En caso de datos incorrecto de autenticacion
      header("Location: index.php?errorusuario=si"); 
  }
  
  
    
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
