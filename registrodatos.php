<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="Js/jquery-3.4.1.min.Js"></script>
    <title>Iron Revolution</title>
    <style>
      body {
        background-image: url('https://static.wixstatic.com/media/157ae2_a2423e72444d488db171862d8da6c2d1.jpg/v1/fit/w_2500,h_1330,al_c/157ae2_a2423e72444d488db171862d8da6c2d1.jpg');
      }
      </style>
  </head>
<body>
    <div class="container">
      <center><h2 style="color: whitesmoke;">Registro de usuario</h2></center>
    </div>
    <center><div class="container mt-5">
            <div class="row"> 
                <center><div class="col-md-3">
                    <h3 style="color: whitesmoke;">Ingrese datos</h3>
                        <form action="insert.php" method="POST">
                          <input type="text" class="form-control mb-3" name="nombrecompleto" placeholder="Nombre completo" required>
                          <input type="email" class="form-control mb-3" name="correo" placeholder="Correo electronico" required>
                          <input type="password" class="form-control mb-3" name="contrasena" placeholder="Contraseña" minlength="8" id="password" required> 
                          <button class="btn btn-warning" type="button" onclick="mostrarContrasena()">Mostrar/Ocultar contraseña</button>
                          <br>
                          <br>
                          <input type="text" class="form-control mb-3" name="usuario" placeholder="Nombre de usuario" required>
                          <input type="text" class="form-control mb-3" name="rut" placeholder="RUT (Sin puntos y con guión)" maxlength="10" minlength="9" required>
                          <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección" required>
                          <select  class="form-select" id="sexo" name="sexo" required>
                            <option selected="true" disabled="disabled">Seleccione el sexo</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Otros</option>
                          </select>
                          <label for="fecha" style="color: whitesmoke;">Fecha de nacimiento</label>
                          <input type="date" id="fecha" class="form-control mb-3" name="fechanac" min="1910-01-01" max="2021-12-31" required>
                          <label for="edad" style="color: whitesmoke;">Edad</label>
                          <input type="number" name="edad" id="edad" class="form-control input-sm" readonly=""/>
                          <br>
                          <input type="submit" class="btn btn-primary">
                        </form>
                  </div></center>
                  
        <div class="mb-3">
            <br><p style="color: whitesmoke;">¿Ya estás registrado? <br> <a href="index-login.html" class="btn btn-dark">Iniciar sesión</a></p>
        </div>
        
    </div></center>
    <div class="container">
        <footer class="py-3 my-4">
          <p class="text-center" style="color: whitesmoke;">© 2021, Iron Revolution Gym, Hernán Gómez Rivera</p>
        </footer>
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