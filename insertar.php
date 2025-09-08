<?php
$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula= $_POST['cedula'];
$nombredeusuario=$_POST['nombredeusuario'];
$correo=$_POST['correo']; 
$clave=$_POST['clave'];





$sql="INSERT INTO registro VALUE ('0', '$nombre', '$apellido', '$cedula', '$nombredeusuario', '$correo', '$clave')";
$resultado=mysqli_query($servidor,$sql) or die ("Error en consulta <br>MySQL dice: ".mysqli_error());



header("Location: iniciodesesion.php");
die();