<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lOGIN || RENTA INMOVILIARIA</title>
</head>
<body>
  <!-- LOGIN CREADO EL 4 DE FEBRERO DEL 2023 -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Renta   <br />
            <span class="text-primary">Para los eventos </span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? Dicta facilis sint aliquid ipsum atque?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form method= "POST" class = "frmLogin" action = "">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" name="UsuarioF" class="form-control" />
                  <label class="form-label"  for="form3Example3">USUARIO</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" name="ClaveF" class="form-control" />
                  <label class="form-label" for="form3Example4">CONTRASEÑA</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <label class="form-check-label" for="form2Example33">
                    Ven haz parte de esta familia
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Iniciar Sesión
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>Encuentranos tambien en:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<?php

  if(isset($_POST['UsuarioF']) && isset($_POST['ClaveF'])){
    require_once "././controladores/loginController.php";
    $login = new  loginController();
    echo $login->IniciarSesion_controlador();
  }
?>