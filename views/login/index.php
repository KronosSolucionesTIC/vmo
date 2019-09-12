<?php

include '../header.php';

include '../../models/users.php';
$user = new Users();
?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <div class="form-group text-center">
      <?php if (isset($_GET['existe'])) {?>
        <div class="alert alert-danger">
          Usuario invalido.
        </div>
      <?php }?>
    </div>

    <div class="form-group text-center">
      <?php if (isset($_GET['pass'])) {;?>
        <div class="alert alert-danger">
          Clave digitada invalida.
        </div>
      <?php }?>
    </div>

    <div class="form-group text-center">
      <?php if (isset($_GET['sesion'])) {?>
        <div class="alert alert-danger">
          Inicie sesion.
        </div>
      <?php }?>
    </div>

    <div class="form-group text-center">
      <?php if (isset($_GET['logout'])) {?>
        <div class="alert alert-success">
          Logout exitoso.
        </div>
      <?php }?>
    </div>
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../../images/fondo.jpg" class="img-fluid">
    </div>

    <!-- Login Form -->
    <form action="../../controllers/users_controller.php" method="POST">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Usuario">
      <input type="password" class="fadeIn third" id="passwd" name="passwd" autofocus placeholder="Contraseña" required>
      <input type="submit" class="fadeIn fourth" value="Ingresar"  name="Ingresar" >
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">¿Olvido su contraseña?</a>
    </div>

  </div>
</div>