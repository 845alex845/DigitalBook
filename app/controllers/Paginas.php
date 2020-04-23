<?php
include_once('../app/modelos/Libro.php');


	/**
	 * 
	 */
	class Paginas extends Controlador{
		public function __construct()
		{
			// $this->libroModelo =$this->modelo('Libro');
		}
		public function index(){
			// $libros=$this->libroModelo->obtenerUsuarios();
			$datos = [
				'libros' => '',
				

			];

			$this->vista('paginas/index',$datos);

		}
		// public function libros(){
		// 	$this->vista('paginas/libros');

		// }
	}