<?php
$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);
session_start();

$usuario=$_POST['nombredeusuario'];
$clave=$_POST['clave'];
$temp=0;
//visualizacion
$verusuario = "select * from registro where nombredeusuario='$usuario' and clave='$clave'";
$queryresultado = mysqli_query($servidor,$verusuario);

while ($regusuario = mysqli_fetch_array($queryresultado)){ 
$temp=1;

    echo $regusuario['nombre']."<br>";
    $_SESSION["nombredeusuario"]=$usuario;
    $_SESSION["correo"]=$regusuario['correo'];

    header('Location: menu.php');
}
if($temp==0){
    echo '<div style="color: red; background-color: #fdd; padding: 20px; border: 2px solid #f00; font-size: 24px;">El usuario no está registrado</div>';
    $_SESSION["nombredeusuario"]=" ";
}




?>