<?php

include("conexion.php");
$con=conectar();

$sexo=$_GET['sexo'];

$sql="SELECT * FROM tabla  WHERE sexo='$sexo'";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: tablamod.php");
    
}else {
}
?>
