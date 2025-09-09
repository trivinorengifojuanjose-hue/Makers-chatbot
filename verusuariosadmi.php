<?php
$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);
session_start();

$correo=$_POST['correo'];
$clave=$_POST['clave'];
$temp=0;
//visualizacion
$verusuarioadmi = "select * from usuario where correo='$correo' and clave='$clave'";
$queryresultado = mysqli_query($servidor,$verusuarioadmi);

while ($regusuario = mysqli_fetch_array($queryresultado)){ 
$temp=1;
header('Location: menuadmin.php');
    $_SESSION["correo"]=$regusuario['correo'];
    $_SESSION["id"]=$regusuario['id'];
    $_SESSION["nombre"]=$regusuario['nombre'];


}
if($temp==0){
    echo '<div style="color: red; background-color: #fdd; padding: 20px; border: 2px solid #f00; font-size: 24px;">El usuario no está registrado</div>';
    $_SESSION["correo"]=" ";
}




?>