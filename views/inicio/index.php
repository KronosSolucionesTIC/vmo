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
      <div id="div_departamento">
        <select name="fkID_departamento" id="fkID_departamento" class="fadeIn third">
          <option value="">Departamento...</option>
            <?php if (count($dpto) > 0) {
    foreach ($dpto as $column => $value) {
        ?>
          <option value="<?php echo $value['idDepartamento']; ?>"><?php echo $value['nombreDepartamento']; ?></option>
            <?php }}?>
        </select>
      </div>
      <div id="div_ciudad">
        <select name="fkID_ciudad" id="fkID_ciudad" class="fadeIn third">
            <option value="">Ciudad...</option>
              <?php if (count($ciudad) > 0) {
    foreach ($ciudad as $column => $value) {
        ?>
              <option value="<?php echo $value['idCiudad']; ?>"><?php echo $value['nombreCiudad']; ?></option>
              <?php }}?>
        </select>
      </div>
      <div id="div_area">
        <select name="fkID_area" id="fkID_area" class="fadeIn third">
          <option value="">Area...</option>
          <?php if (count($area) > 0) {
    foreach ($area as $column => $value) {
        ?>
            <option value="<?php echo $value['idArea']; ?>"><?php echo $value['nombreArea']; ?></option>
          <?php }}?>
        </select>
      </div>
      <input type="submit" class="fadeIn fourth" value="registrar"  name="registrar" >
    </form>
  </div>
</div>
