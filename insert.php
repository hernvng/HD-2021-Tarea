<?php
include("conexion.php");
$con=conectar();


$nombrecompleto=$_POST['nombrecompleto'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$usuario=$_POST['usuario'];
$rut=$_POST['rut'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$fechanac=$_POST['fechanac'];
$edad=$_POST['edad'];

$sql="INSERT INTO tabla(nombrecompleto, correo, contrasena, usuario, rut, direccion, sexo, fechanac, edad) VALUES('$nombrecompleto','$correo','$contrasena','$usuario','$rut','$direccion','$sexo','$fechanac','$edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: home.html");
    
}else {
}
?>