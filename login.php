<!DOCTYPE html>
<html lang="es">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
 <link rel="stylesheet" href="css/style.css">
</head>

<body>
 <header>
 </header>

 <div class="container">
  <form method="post">
   <h1>Bienvenido!</h1>
   <!-- llamado php -->
   <?php
   include "conexionbd.php";
   include "controlador.php";
   ?>

   <input type="text" id="usuario" class="input" name="usuario" placeholder="Usuario">
   <input type="password" id="password" class="input" name="password" placeholder="Contraseña">
   <input type="submit" class="btn" value="INICIAR SESIÓN" name="btningresar">

   <div class="advice" name="advice">
    <span>App desarrollada por Sergio Parrado Rojas</span>
    <span>Ingresar Admin como usuario y 0909 como contraseña</span>
   </div>

  </form>
 </div>
 <script src="style.css"></script>
</body>

</html>