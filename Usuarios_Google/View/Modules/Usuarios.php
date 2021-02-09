<?php $usuariosController = new UsuariosController(); ?>

<?php include("Navbar.php"); ?>

<div class="container">
	<div class="col-lg-10 mx-auto bg-white rounded shadow-lg mt-5 p-4">
		<form method="POST">
			<div class="row">
				<div class="col-lg-4">
					<div class="form-group">
						<label for="usuarios_nombres_r">Nombres</label>
						<input type="text" name="usuarios_nombres_r" class="form-control" id="usuarios_nombres_r" placeholder="Nombres" required autocomplete="off" autofocus>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="form-group">
						<label for="usuarios_apellidos_r">Apellidos</label>
						<input type="text" name="usuarios_apellidos_r" class="form-control" id="usuarios_apellidos_r" placeholder="Apellidos" required autocomplete="off">
					</div>
				</div>

				<div class="col-lg-4">
					<div class="form-group">
						<label for="usuarios_fecha_nacimiento_r">Fecha Nacimiento</label>
						<input type="date" name="usuarios_fecha_nacimiento_r" class="form-control" id="usuarios_fecha_nacimiento_r" required>
					</div>
				</div>

				<div class="text-center w-100">
					<button type="submit" class="btn btn-success">Registrar</button>
					<?php $request = $usuariosController->registrarUsuario(); ?>
					<?php if ($request) { ?>
						<script type="text/javascript">
							window.location.href = "Usuarios";
						</script>
					<?php } ?>
				</div>
			</div>
		</form>
	</div>

	<div class="col-lg-10 mx-auto bg-white rounded shadow-lg mt-5 mb-5 p-4">
		<div class="table-responsive">
			<table class="table table-hover text-center">
				<thead class="thead-dark">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">NOMBRES</th>
						<th scope="col">APELLIDOS</th>
						<th scope="col">FECHA NACIMIENTO</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php $row = $usuariosController->buscarUsuario(); $i = 1; ?>
					<?php foreach ($row as $key => $usuarios) { ?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $usuarios['usuarios_nombres']; ?></td>
							<td><?php echo $usuarios['usuarios_apellidos']; ?></td>
							<td><?php echo $usuarios['usuarios_fecha_nacimiento']; ?></td>
							<td>
								<button type="button" class="btn btn-danger btnEliminar" data-idusuarios="<?php echo $usuarios['idUsuarios']; ?>" data-toggle="modal" data-target="#modal_usuarios_eliminar"><i class="fa fa-times"></i></button>
							</td>
							<td>
								<button type="button" class="btn btn-warning btnModificar" data-idusuarios="<?php echo $usuarios['idUsuarios']; ?>" data-toggle="modal" data-target="#modal_usuarios_modificar"><i class="fa fa-pencil-alt"></i></button>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php include("Modal/UsuariosModificar.php"); ?>
<?php include("Modal/UsuariosEliminar.php"); ?>