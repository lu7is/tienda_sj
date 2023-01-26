<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Decoraciones | Login</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" type="text/css" href="<?php echo SERVERURL;?>/vistas/css/login.css">
</head>
<body>


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Decoraciones En Sueño</h1>
    </div>

    <!-- Login Form  CREADO EL 25 DE ENERO DEL 2023-->
    <form action="" method = "POST" autocomplete = "off" class = "LoginForm"  >
      <input type="text" id="login" class="fadeIn second" name="UsuarioF" placeholder="Usuario">
      <input type="text" id="password" class="fadeIn third" name="ClaveF" placeholder="Contraseña" >
      <input type="submit" class="fadeIn fourth" value="Iniciar Sesión">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>