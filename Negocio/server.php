<?php
session_start();

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="plataforma";

 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 $usuario=$_POST['usuario'];
 $correo=$_POST['correo'];
 $contraseña=$_POST['contraseña'];

 $sql="INSERT INTO usuarios VALUES('$usuario','$correo','$contraseña')";
 $ejecutar=mysqli_query($con,$sql);

 echo "<h3> Ahora inicie sesion para ingresar a la página </h3>";
 echo "<a href='Index.php'> Iniciar sesion </a>";
?>