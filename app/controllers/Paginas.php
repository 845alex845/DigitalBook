<?php


	/**
	 * 
	 */
	class Paginas extends Controlador{
		

		public function __construct()
		{
			
		}

		public function index(){

			


			$datos = [
				'titulo' => ''
				

			];

			$this->vista('paginas/inicio',$datos);

		}

		public function libros(){
			$this->vista('paginas/libros');

		}

	

		
	}