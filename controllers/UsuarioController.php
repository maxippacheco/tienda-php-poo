<?php 

	require_once 'models/usuario.php';

	class usuarioController {
		
		public function index() {
			echo "Controlador Usuarios, INDEX Aa";
		}

		public function registro(){
			require_once 'views/usuario/registro.php';
		}

		public function save(){
			if( isset($_POST) ) {

				$nombre    = isset( $_POST['nombre'])    ? $_POST['nombre']    : false; 
				$apellidos = isset( $_POST['apellidos']) ? $_POST['apellidos'] : false;
				$email     = isset( $_POST['email'])     ? $_POST['email']     : false;
				$password  = isset( $_POST['password'])  ? $_POST['password']  : false;

				if($nombre && $apellidos && $password && $email ){
					$usuario = new Usuario();
					$usuario->setNombre( $nombre );
					$usuario->setApellidos($apellidos);
					$usuario->setEmail($email);
					$usuario->setPassword($password);
	
					$save = $usuario->save();
	
					if($save) {
						$_SESSION['register'] = "completed";
					}else{
						$_SESSION['register'] = "failed";
					}

				}else{
					$_SESSION['register'] = "failed";
				}
			}else{

				$_SESSION['register'] = "failed";
			}
			header("Location:".base_url.'usuario/registro');
		}

		public function login(){
			if(isset($_POST)){
				// identificar al usuario
				// consulta sql
				$usuario = new Usuario();
				$usuario->setEmail($_POST['email']);
				$usuario->setPassword($_POST['password']);

				$identity = $usuario->login();

				// crear una sesion
				if(is_object($identity) && $identity){
					$_SESSION['identity'] = $identity;


					if($identity->rol == 'admin'){
						$_SESSION['admin'] = true;
					}
				}else{
					$_SESSION['error-login'] = 'Identificacion fallida';
				}
			}

			header("Location:".base_url);
		}

		public function logout(){
			if( isset($_SESSION['identity']) ){
				unset($_SESSION['identity']);
			}

			if( isset($_SESSION['admin']) ){
				unset($_SESSION['admin']);
			}

			header("Location:".base_url);

		}
	}

?>