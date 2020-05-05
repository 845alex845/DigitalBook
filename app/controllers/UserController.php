<?php

/**
 * 
 */
//require_once 'model/User.php';
class UserController extends Controlador
{
	
	public function __construct()
	{
			$this->userModelo=$this->modelo('User');
	}


	public function index(){
			

	}

	

	public function create(){

			if($_SERVER['REQUEST_METHOD']=='POST'){
				//vinculamos los datos
				$datos = [
					'nombre' => trim($_POST['nombre']),
					'apellidos' => trim($_POST['apellidos']),
					'email' => trim($_POST['email']),
					'password' => trim($_POST['password'])
				
				];
				//Comprobar campos vacios
				//var_dump(empty($datos['nombre']));

				if(empty($datos['nombre']) or empty($datos['apellidos']) or empty($datos['email']) or empty($datos['password'])){
					die('Por favor rellenar todos los datos correctamente');
					//$_SESSION['registro'] = "fallido";
					
				}else{
					//comprobar que el usuario no exista
					$resultado = $this->userModelo->verificarUsuario($datos['email']);
					if($resultado != false){
						die('El nombre de usuario ya existe');
						//$_SESSION['registro'] = "fallido";
					}

					//Encriptar contraseña
					$datos['password'] = hash('sha512', $datos['password']);
					
				}

				
					if($this->userModelo->agregarUsuario($datos)){
						//$_SESSION['registro'] = "completado";
						//header('location: ../'); 
						redireccionar('/UserController/create');
					}
						
				
			}else{
				$datos = [
					'nombre' => '',
					'apellidos' => '',
					'email' => '',
					'password' => ''	
				];
				//$_SESSION['register'] = "fallido";
				$this->vista('usuario/create', $datos);

			}
		}



		public function login(){

			if($_SERVER['REQUEST_METHOD']=='POST'){

				
				$datos = [
					'email' => trim($_POST['email']),
					'password' => trim($_POST['password']),			
	
				];

				//encriptamos el pass
				$datos['password'] = hash('sha512', $datos['password']);

				$resultado = $this->userModelo->verificarDatos($datos['email'],$datos['password']);

				if($resultado !== false){

					redireccionar('/');

				}else{
					
					die('Datos Incorrectos');
				}

			}else{
				$datos = [
					'email' => '',
					'password' => '',
					
					
				];

				$this->vista('usuario/login', $datos);
				

			}


		}

}

