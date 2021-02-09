<?php
require_once("Model/Modules/UsuariosModel.php");

class UsuariosController {

	private $usuariosModel;
	
	public function __construct() {
		$this->usuariosModel = new UsuariosModel();
	}

	public function registrarUsuario() {
		if (isset($_POST['usuarios_nombres_r']) && isset($_POST['usuarios_apellidos_r']) && isset($_POST['usuarios_fecha_nacimiento_r'])) {
			
			$lista = array('nombres' => $_POST['usuarios_nombres_r'], 'apellidos' => $_POST['usuarios_apellidos_r'], 'fecha_nacimiento' => $_POST['usuarios_fecha_nacimiento_r']);

			$request = $this->usuariosModel->registrarUsuarioDB($lista, "usuarios_google.usuarios");
			if($request) { return $request; } else { ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Error, no se Registró el Usuario</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php }
		}
	}

	public function buscarUsuario() {
		return $this->usuariosModel->buscarUsuarioDB("usuarios_google.usuarios");
	}

	public function eliminarUsuario() {
		if(isset($_POST['idUsuarios_e'])) {
			$lista = array('idUsuarios' => $_POST['idUsuarios_e']);

			$request = $this->usuariosModel->eliminarUsuarioDB($lista, "usuarios_google.usuarios");
			if($request) { return $request; } else { ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Error, no se Registró el Usuario</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php }
		}
	}

	public function modificarUsuario() {
		if(isset($_POST['idUsuarios_m']) && isset($_POST['usuarios_nombres_m']) && isset($_POST['usuarios_apellidos_m']) && isset($_POST['usuarios_fecha_nacimiento_m'])) {
			$lista = array('idUsuarios' => $_POST['idUsuarios_m'], 'nombres' => $_POST['usuarios_nombres_m'], 'apellidos' => $_POST['usuarios_apellidos_m'], 'fecha_nacimiento' => $_POST['usuarios_fecha_nacimiento_m']);

			$request = $this->usuariosModel->modificarUsuarioDB($lista, "usuarios_google.usuarios");
			if($request) { return $request; } else { ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Error, no se Registró el Usuario</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php }
		}
	}

}