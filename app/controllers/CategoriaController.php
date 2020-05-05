<?php
require_once '../app/model/Categoria.php';

	class CategoriaController extends Controlador{
		public function __construct()
		{
			$this->categoriaModelo =$this->modelo('Categoria');
		}
		public function index(){
            $categoria=$this->categoriaModelo->obtenerCategorias();
			$datos = [
                'categoria' => $categoria,
                
                'articulos' => 5
			];
			// return var_dump($datos);
			$this->vista('admin/categoria/index',$datos);

        }
        public function create(){
            if($_SERVER['REQUEST_METHOD'] =='POST'){
                $datos=[
                    'nombre'=>trim($_POST['nombre']),
                ];
                if(  $this->categoriaModelo->agregarCategoria($datos)){
                    header('location: ../CategoriaController'); 
                }else{
                    die('Algo salió mal');
                }
            }else{
                $datos=[
                    'nombre'=>'',
                ];
                redireccionar('/CategoriaController');	
            }
        }

	}