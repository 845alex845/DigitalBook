<?php
require_once '../app/model/Libro.php';
require_once '../app/model/Categoria.php';

	class LibroController extends Controlador{
		public function __construct()
		{
			$this->libroModelo =$this->modelo('Libro');
			$this->categoriaModelo =$this->modelo('Categoria');
		}
		public function index(){
            $libro=$this->libroModelo->obtenerLibros();
            $categoria=$this->categoriaModelo->obtenerCategorias();
			$datos = [
                'libro' => $libro,
                'categoria'=>$categoria,
			];
			// return var_dump($datos);
			$this->vista('admin/libro/index',$datos);

        }
    
		public function create(){
			if($_SERVER['REQUEST_METHOD'] =='POST'){
                $datos=[
                    'titulo'=>trim($_POST['titulo']),
                    'categoria'=>trim($_POST['categoria']),
                    'autor'=>trim($_POST['autor']),
                    'descripcion'=>trim($_POST['descripcion']),
                    'precio'=>trim($_POST['precio']),
                    'stock'=>trim($_POST['stock']),
                    'oferta'=>trim($_POST['oferta']),
                    'imagen'=>trim($_POST['imagen']),
				];
				// $this->vista('paginas/admin/libro/puebas',$datos);

                if(  $this->libroModelo->agregarLibro($datos)){
					header('location: ../LibroController'); 
					// $this->vista('paginas/admin/libro/puebas',$datos);

                }else{
                    die('Algo salió mal');
                }
            }else{
				$categoria=$this->categoriaModelo->obtenerCategorias();
                $datos=[
                    'categoria'=>$categoria,
                ];
				$this->vista('admin/libro/create',$datos);
	
            }
        }
        public function show($id){
            $datos=[
                'id'=>$id,
            ];
            $this->vista('admin/libro/show',$datos);

        }

        public function edit($id){
           
            if($_SERVER['REQUEST_METHOD'] =='POST'){
                $datos = [
                    'id'=>$id,
                    'titulo' => trim($_POST['titulo']),
                    'autor' => trim($_POST['autor']),
                    'descripcion' => trim($_POST['descripcion']),
                    'precio' => trim($_POST['precio']),
                    'stock' => trim($_POST['stock']),
                    'oferta' => trim($_POST['oferta']),
                    'imagen' => trim($_POST['imagen']),
                    'categoria' => trim($_POST['categoria']),
                ];
                // $this->vista('paginas/admin/libro/puebas',$datos);
                if($this->libroModelo->actualizarLibro($datos)){
					header('location: ../../LibroController'); 
                }else{
                    die('Algo salió mal');
                }
            }else{
                //obtener informacion del libro desde el modelo
                $libro =$this->libroModelo->obtenerLibroId($id);
                $categoria=$this->categoriaModelo->obtenerCategorias();
                $datos =[
                    'categorias'=>$categoria,
                    'id' => $id,
                    'titulo' => $libro->titulo,
                    'categoria'=>$libro->categoria_id,
                    'autor' => $libro->autor,
                    'descripcion' => $libro->descripcion,
                    'precio' => $libro->precio,
                    'stock' => $libro->stock,
                    'oferta' => $libro->oferta,
                    'imagen' => $libro->imagen,
    
                ];
                $this->vista('admin/libro/edit',$datos);
            }
    }

	}