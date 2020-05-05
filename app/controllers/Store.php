<?php



	/**
	 * 
	 */
	class Store extends Controlador{
		
		public function index(){
			
			$datos = [
				'libros' => '',
				

			];

			$this->vista('tienda/index',$datos);

		}
		
		public function admin(){
			$datos = [
				'libros' => '',
				

			];

			$this->vista('admin/index',$datos);

		}

	}