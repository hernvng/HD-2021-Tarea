<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM tabla WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Modificar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="Js/jquery-3.4.1.min.Js"></script>
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                <label for="nombrecompleto">Nombre completo</label>
                                <input type="text" class="form-control mb-3" name="nombrecompleto" placeholder="Nombre completo" value="<?php echo $row['nombrecompleto']  ?>">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['correo']  ?>">
                                <label for="contrasena">Contraseña</label>
                                <input type="text" class="form-control mb-3" name="contrasena" placeholder="Contraseña" minlength="8" id="password" value="<?php echo $row['contrasena']  ?>">
                                <button class="btn btn-warning" type="button" onclick="mostrarContrasena()">Mostrar/Ocultar contraseña</button>
                                <br>
                                <label for="usuario">Nombre de usuario</label>
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="Nombre de usuario" value="<?php echo $row['usuario']  ?>">
                                <label for="rut">RUT (Sin puntos y con guión)</label>
                                <input type="text" class="form-control mb-3" name="rut" placeholder="RUT" maxlength="10" minlength="9" value="<?php echo $row['rut']  ?>">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección" value="<?php echo $row['direccion']  ?>">
                                <label for="sexo">Sexo</label>
                                <select  class="form-select" id="sexo" name="sexo" value="<?php echo $row['sexo']  ?>">
                                    <option selected="true" disabled="disabled">Confirme o modifique el sexo</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otros</option>
                                </select>
                                <label for="fechanac">Fecha de nacimiento</label>
                                <input type="date" class="form-control mb-3" id="fecha" name="fechanac" placeholder="Fecha de nacimiento" min="1910-01-01" max="2021-12-31" value="<?php echo $row['fechanac']  ?>">
                                <label for="edad">Edad</label>
                                <input type="number" name="edad" id="edad" class="form-control input-sm" readonly="" value="<?php echo $row['edad']  ?>"/>
                                <input type="submit" class="btn btn-primary btn-block" value="Modificar con estos datos">
                                <a href="gestiondatos.php"  name="cancel" class="btn btn-secondary"r">Cancelar (Regresar)</a>
                    </form>
                    
                </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src='Js/calcular_edad.js'></script>
    <script>
      function mostrarContrasena(){
        var tipo = document.getElementById("password");
        if(tipo.type == "password"){
          tipo.type = "text";
        }
        else{
          tipo.type = "password";
        }
      }
    </script>
    </body>
</html>