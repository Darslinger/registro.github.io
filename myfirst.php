<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<form method="post">

<h2>Hola</h2>
<p>inicia tu registro</p>

<div class="input-wrapper">
  <input type="text" name="name" placeholder="Nombre">
  <img class="input-icon" src="images/name.svg" alt="">
</div>

<div class="input-wrapper">
  <input type="email" name="email" placeholder="Email">
  <img class="input-icon" src="images/email.svg" alt="">
</div>

<div class="input-wrapper">
  <input type="direccion" name="direccion" placeholder="Direccion">
  <img class="input-icon" src="images/direction.svg" alt="">
</div>

<div class="input-wrapper">
  <input type="telefono" name="phone" placeholder="Telefono">
  <img class="input-icon" src="images/phone.svg" alt="">
</div>

<div class="input-wrapper">
  <input type="password" name="password" placeholder="Contraseña">
  <img class="input-icon" src="images/password.svg" alt="">
</div>

<input class="btn" type= "submit" name="register" value="Enviar">
</form>

<?php
 include("registro.php");
?>

</form>
</body>
</html>