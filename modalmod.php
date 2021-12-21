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
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $resultado['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: crimson !important;">
      <h5 class="modal-title">Modificar datos</h5>
      <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>


      <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $resultado['id'] ?>">

            <div class="modal-body" id="cont_modal">

            <input type="hidden" name="id" value="<?php echo $resultado['id']  ?>">
                                <label for="nombrecompleto">Nombre completo</label>
                                <input type="text" class="form-control mb-3" name="nombrecompleto" placeholder="Nombre completo" value="<?php echo $resultado['nombrecompleto']  ?>">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $resultado['correo']  ?>">
                                <label for="contrasena">Contraseña</label>
                                <input type="text" class="form-control mb-3" name="contrasena" placeholder="Contraseña" minlength="8" id="password" value="<?php echo $resultado['contrasena']  ?>">
                                <label for="usuario">Nombre de usuario</label>
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="Nombre de usuario" value="<?php echo $resultado['usuario']  ?>">
                                <label for="rut">RUT (Sin puntos y con guión)</label>
                                <input type="text" class="form-control mb-3" name="rut" placeholder="RUT" maxlength="10" minlength="9" value="<?php echo $resultado['rut']  ?>">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección" value="<?php echo $resultado['direccion']  ?>">
                                <label for="sexo">Sexo</label>
                                <select  class="form-select" id="sexo" name="sexo" value="<?php echo $resultado['sexo']  ?>">
                                    <option selected="true" disabled="disabled">Confirme o modifique el sexo</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otros</option>
                                </select>
                                <label for="fechanac">Fecha de nacimiento</label>
                                <input type="date" class="form-control mb-3" id="fecha" name="fechanac" placeholder="Fecha de nacimiento" min="1910-01-01" max="2021-12-31" value="<?php echo $resultado['fechanac']  ?>">
                                <label for="edad">Edad</label>
                                <input type="number" name="edad" id="edad" class="form-control input-sm" readonly="" value="<?php echo $resultado['edad']  ?>"/>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
<script src='Js/calcular_edad.js'></script>
