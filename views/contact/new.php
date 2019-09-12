<?php
include '../header.php';

include '../../models/users.php';
$user = new Users();

if ($_POST["subscriber"] != '') 
{
    $subscriber    = $_POST["subscriber"];
} else {
    header('location: ../users/new.php?page=new&error=true');
}
if ($_POST["business_name"] != '') {
  $business_name = $_POST["business_name"];
}else {
  header('location: ../users/new.php?page=new&error=true');
}
if ($_POST["department"] != '') {
  $department    = $_POST["department"];
}else {    
   header('location: ../users/new.php?page=new&error=true');
}
if ($_POST["municipality"] != '') {
    $municipality  = $_POST["municipality"];
} else {
    header('location: ../users/new.php?page=new&error=true');
}
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
        <form action="../../controllers/users_controller.php" method="POST">
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 pasos text-center">
              <label class="titulo_blanco">PASO 2 DE 2</label>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
              <input type="hidden" name="subscriber" value="<?php echo $subscriber; ?>">
              <input type="hidden" name="business_name" value="<?php echo $business_name; ?>">
              <input type="hidden" name="department" value="<?php echo $department; ?>">
              <input type="hidden" name="municipality" value="<?php echo $municipality; ?>">
            </div>
            <div class="col-lg-8 titulo_verde text-center">
              <img src="../../images/icono_contacto.svg" class="icono_lapiz" />
              <label class="titulo_verde">DATOS DEL CONTACTO</label>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4" >
              <label for="nombre" class="label_formularios">NOMBRE DEL CONTACTO</label>
              <input type="text" class="form-control" id="nomContacto" name="nomContacto" autofocus placeholder="Nombre" required>
            </div>
            <div class="col-lg-4">
              <label for="email" class="label_formularios">CARGO</label>
              <input type="text" class="form-control" id="nombre" name="nombre" autofocus placeholder="Cargo" required>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
              <label for="nombre" class="label_formularios">TELEFONO</label>
              <input type="text" pattern="[0-9]+" class="form-control" id="nombre" name="nombre" autofocus placeholder="Telefono" required>
            </div>
            <div class="col-lg-4">
              <label for="direccion" class="label_formularios">CORREO</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
              <label class="parrafo_verde">
                *En el caso que usted no sea el gerente, director o jefe de logística de la compañía, diligencie los siguientes datos:
              </label>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
              <label for="nombre" class="label_formularios">NOMBRE DEL GERENTE, DIRECTOR O JEFE DE LOGÍSTICA</label>
            </div>
            <div class="col-lg-4">
              <label for="email" class="label_formularios">CORREO</label>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Nombre" required>
            </div>
            <div class="col-lg-4">
              <input type="email" class="form-control" id="email2" name="email2" placeholder="Correo" required>
            </div>
            <div class="col-lg-2">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-3 footer_form">
              <br>
              <div class="Rectangle-66 text-center pt-2">
                <a href="../users/new.php">
                  <label class="boton">Volver</label>
                </a>
              </div>
              <br>
            </div>
            <div class="col-lg-2 footer_form">
            </div>
            <div class="col-lg-3 footer_form">
              <br>
                <div class="Rectangle-66 pt-2 text-center" >
                  <input type="submit" value="Continuar" class="boton" name="create">
                </div>
              <br>
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
            <div class="col-lg-2">
            </div>
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