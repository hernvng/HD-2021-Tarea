<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$rut=$_POST['rut'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$fechanac=$_POST['fechanac'];
$edad=$_POST['edad'];

$sql="UPDATE tabla SET nombre='$nombre',apellido='$apellido',rut='$rut',direccion='$direccion',sexo='$sexo',fechanac='$fechanac', edad='$edad'  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tablamod.php");
    }
?>