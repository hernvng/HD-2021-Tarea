<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombrecompleto=$_POST['nombrecompleto'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$usuario=$_POST['usuario'];
$rut=$_POST['rut'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$fechanac=$_POST['fechanac'];
$edad=$_POST['edad'];

$sql="UPDATE tabla SET nombrecompleto='$nombrecompleto',correo='$correo',contrasena='$contrasena',usuario='$usuario',rut='$rut',direccion='$direccion',sexo='$sexo',fechanac='$fechanac', edad='$edad'  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: gestiondatos.php");
    }
?>