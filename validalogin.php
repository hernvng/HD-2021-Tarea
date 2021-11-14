<?php
include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];

session_start();
$_SESSION['correo']=$correo;




$consulta="SELECT*FROM tabla where correo='$correo' and contrasena='$contrasena'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.html");

}else{
    ?>
    <?php
    include("index-login.html");
    echo'<script type="text/javascript">
    alert("Datos erróneos ó no registrados! \nRegresando al login...");
    window.location.href="index-login.html";
    </script>';

  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($con);
?>