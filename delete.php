<?php

include("conexion.php");
$con=conectar();

$id=$_REQUEST['id'];

$sql="DELETE FROM tabla  WHERE id='$id'";
$query=mysqli_query($con,$sql);


?>
