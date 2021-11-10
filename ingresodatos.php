<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM tabla";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Iron Revolution</title>
  </head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <img src="https://static.wixstatic.com/media/2ae626_4fd1d2bf1a7842b797870469b0374c36~mv2.png/v1/fill/w_376,h_96,al_c,q_85,usm_0.66_1.00_0.01/IRwordLOGOpngnew.webp" alt="ironrevbanner">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="pagina.html" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="nosotros.html" class="nav-link px-2 text-white">Nosotros</a></li>
            </ul>
            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2"><a href="login.html">Iniciar sesión</a></button>
              <button type="button" class="btn btn-warning"><a href="ingresodatos.php">Registrarse</a></button>
            </div>
          </div>
        </div>
    </header>
    <div class="container">
      <h2>Registro de usuario</h2>
    </div>
    <center><div class="container mt-5">
            <div class="row"> 
                <center><div class="col-md-3">
                    <h3>Ingrese datos</h3>
                        <form action="insertar.php" method="POST">
                          <input type="text" class="form-control mb-3" name="id" placeholder="ID">
                          <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                          <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                          <input type="text" class="form-control mb-3" name="rut" placeholder="RUT">
                          <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                          <label for="sexo">Sexo</label>
                          <select  class="form-select" id="sexo" name="sexo" placeholder="Sexo">
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Otro</option>
                          </select>
                          <label for="fechanac">Fecha de nacimiento</label>
                          <input type="date" id="fechanac" class="form-control mb-3" name="fechanac">
                          <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                          <input type="submit" class="btn btn-primary">
                        </form>
                  </div></center>
        <div class="mb-3">
            <p>¿Ya estás registrado? <a href="login.html">Login</a></p>
        </div>
        <a href="tablamod.php">Gestión de datos ingresados</a>
    </div></center>
    <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="pagina.html" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="nosotros.html" class="nav-link px-2 text-muted">Nosotros</a></li>
          </ul>
          <p class="text-center text-muted">© 2021, Iron Revolution Gym, Hernán Gómez Rivera</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>