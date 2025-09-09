<?php
$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$clave= $_POST['clave'];
$celular=$_POST['celular'];
$nacimiento=$_POST['nacimiento']; 
$genero=$_POST['genero'];
$cedula=$_POST['cedula'];



$sql="INSERT INTO usuario VALUE ('0', '$nombre', '$correo', '$clave', '$celular', '$nacimiento', '$genero','$cedula')";
$resultado=mysqli_query($servidor,$sql) or die ("Error en consulta <br>MySQL dice: ".mysqli_error());



header("Location:Membresias.html");
die();