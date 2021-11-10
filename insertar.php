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

$sql="INSERT INTO tabla VALUES('$id','$nombre','$apellido','$rut','$direccion','$sexo','$fechanac','$edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ingresodatos.php");
    
}else {
}
?>