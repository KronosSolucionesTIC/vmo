<?php
include '../header.php';

include '../../models/users.php';
$user = new Users();

$CIUU   = $user->getCIIU();
$sector = $user->getSector();
$tamano = $user->getTamano();
$dpto   = $user->getDpto();
$muni   = $user->getMuni();
?>
<div class="container-fluid" id="principal">
  <div class="row">
    <div class="col-lg-6">
      <div class="caja3">
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12 col-xs-12">
      <div class="caja3">
        <form action="../contact/new.php" method="POST">
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 pasos text-center">
              <label class="titulo_blanco">PASO 1 DE 2</label>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 titulo_verde text-center">
              <img src="../../images/datos_empresa.svg" class="icono_lapiz" />
              <label class="titulo_verde">DATOS DE LA EMPRESA</label>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4" >
              <label for="nombre" class="label_formularios">NIT</label>
              <input type="text" pattern="[0-9]+" class="form-control" name="subscriber" autofocus placeholder="NIT" required>
            </div>
            <div class="col-lg-4">
              <label for="email" class="label_formularios">CIUU</label>
              <select class="form-control" required>
                <option value="">Seleccione...</option>
                <?php
if (count($CIUU) > 0) {
    foreach ($CIUU as $column => $value) {
        ?>
                      <option><?php echo $value['ciiudesc']; ?></option>
                <?php
}
}
?>
              </select>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
              <label for="nombre" class="label_formularios">COMPAÑIA</label>
              <input type="text" class="form-control" id="business_name" name="business_name" autofocus placeholder="Compañia" required>
            </div>
            <div class="col-lg-4">
              <label for="direccion" class="label_formularios">DIRECCION</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
              <label for="nombre" class="label_formularios">SECTOR</label>
              <select class="form-control" required>
                <option value="">Seleccione...</option>
                <?php
if (count($sector) > 0) {
    foreach ($sector as $column => $value) {
        ?>
                      <option><?php echo $value['sector']; ?></option>
                <?php
}
}
?>
              </select>
            </div>
            <div class="col-lg-4">
              <label for="email" class="label_formularios">TAMAÑO</label>
                <select class="form-control" required>
                  <option value="">Seleccione...</option>
                  <?php
if (count($tamano) > 0) {
    foreach ($tamano as $column => $value) {
        ?>
                        <option><?php echo $value['typecomp']; ?></option>
                  <?php
}
}
?>
                </select>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
              <label for="nombre" class="label_formularios">DEPARTAMENTO</label>
              <select name="department" class="form-control" required>
                <option value="">Seleccione...</option>
                <?php
if (count($dpto) > 0) {
    foreach ($dpto as $column => $value) {
        ?>
                      <option><?php echo $value['department']; ?></option>
                <?php
}
}
?>
              </select>
            </div>
            <div class="col-lg-4">
              <label for="email" class="label_formularios">MUNICIPIO</label>
              <select name="municipality" class="form-control" required>
                <option value="">Seleccione...</option>
                <?php
if (count($muni) > 0) {
    foreach ($muni as $column => $value) {
        ?>
                      <option><?php echo $value['municipality']; ?></option>
                <?php
}
}
?>
              </select>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-5 footer_form">
            </div>
            <div class="col-lg-3 footer_form">
              <br>
                <div class="Rectangle-66 pt-2 text-center" >
                  <input type="submit" value="Continuar" class="boton" name="continuar" id="continuar">
                </div>
              <br>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
  <div class="form-group text-center">
    <?php
if (isset($_GET['success'])) {
    ?>
      <div class="alert alert-success">
        El usuario ha sido creado.
      </div>
  <?php
} else if (isset($_GET['error'])) {
    ?>
      <div class="alert alert-danger">
        Ha ocurrido un error al crear el usario, por favor intente de nuevo.
      </div>
  <?php
}
?>
  </div>
            <div class="form-group text-center">
    <?php
if (isset($_GET['existe'])) {
    ?>
      <div class="alert alert-danger">
        Ya existe el NIT.
      </div>
  <?php
}?>
  </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="caja3">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-xs-12">
    </div>
  </div>
</div>
<?php
include '../footer.php';
?>