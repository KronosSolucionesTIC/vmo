<?php

include '../header.php';

include '../../models/users.php';
$user   = new Users();
$dpto   = $user->getDpto();
$ciudad = $user->getCiudad();
$area   = $user->getArea();
?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../../images/fondo.jpg" class="img-fluid">
    </div>

    <!-- Login Form -->
    <form action="../../controllers/users_controller.php" method="POST">
      <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="Nombre">
      <input type="email" class="fadeIn third" id="email" name="email" autofocus placeholder="Email" required>
      <select name="fkID_departamento" class="fadeIn third">
        <option value="">Departamento...</option>
        <?php if (count($dpto) > 0) {
    foreach ($dpto as $column => $value) {
        ?>
          <option><?php echo $value['nombreDepartamento']; ?></option>
        <?php }}?>
      </select>
      <select name="fkID_ciudad" class="fadeIn third">
        <option value="">Ciudad...</option>
        <?php if (count($ciudad) > 0) {
    foreach ($ciudad as $column => $value) {
        ?>
          <option><?php echo $value['nombreCiudad']; ?></option>
        <?php }}?>
      </select>
      <select name="fkID_area" class="fadeIn third">
        <option value="">Area...</option>
        <?php if (count($area) > 0) {
    foreach ($area as $column => $value) {
        ?>
          <option><?php echo $value['nombreArea']; ?></option>
        <?php }}?>
      </select>
      <input type="submit" class="fadeIn fourth" value="registrar"  name="registrar" >
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Ver todos</a>
    </div>

  </div>
</div>
