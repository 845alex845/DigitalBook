<?php
require_once '../app/model/Libro.php';

	class CollectionController extends Controlador{
		public function __construct()
		{
			$this->libroModelo =$this->modelo('Libro');
		}
		public function index(){
            $libros=$this->libroModelo->obtenerLibros();
			$datos = [
				'libros' => $libros
			];
			// return var_dump($datos);
			$this->vista('paginas/collection',$datos);

		}

	}