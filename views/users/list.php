<?php

include '../header.php';

include '../../models/users.php';
$user   = new Users();
$dpto   = $user->getDpto();
$ciudad = $user->getCiudad();
$area   = $user->getArea();
$users  = $user->getUsers();
?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Login Form -->
    <form action="../../controllers/users_controller.php" method="POST">
<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead class="thead-dark">
				<th class="text-center">Nombre</th>
				<th class="text-center">Email</th>
				<th class="text-center">Departamento</th>
				<th class="text-center">Ciudad</th>
				<th class="text-center">Area</th>
			</thead>
			<tbody>
				<?php

if (count($users) > 0) {

    foreach ($users as $column => $value) {
        ?>
							<tr id="row<?php echo $value['idUsuario']; ?>">
								<td><?php echo $value['nombre']; ?></td>
								<td><?php echo $value['email']; ?></td>
								<td><?php echo $value['nombreDepartamento']; ?></td>
								<td><?php echo $value['nombreCiudad']; ?></td>
								<td><?php echo $value['nombreArea']; ?></td>
								<td class="text-center">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="editar" data-idUsuario="<?php echo $value['idUsuario']; ?>">
  									Guardar
								</button>
								</td>
							</tr>
				<?php
}
} else {
    ?>
					<tr>
						<td colspan="5">
							<div class="alert alert-info">
								No se encontraron usuarios.
							</div>
						</td>
					</tr>
				<?php
}
?>
			</tbody>
		</table>
	</div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>