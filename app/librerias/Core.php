<?php

	/*
	Mapear la url ingresada en el navegador,
	1-controldor
	2-método
	3-parámetro
	Ejemplo: articulos/actualizar/4
	*/

	/**
	 * 
	 */
	class Core
	{
		protected $controladorActual = 'paginas';
		protected $metodoActual = 'index';
		protected $parametros = [];

		//constructor
		public function __construct(){
			//print_r($this-> getUrl());

			$url = $this->getUrl();

			//busar en controladores si el controldor existe
			if(isset($url[0])){
			if (file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
				//si existe se setea como controlador pordefecto
				$this->controladorActual = ucwords($url[0]);

				//unset indice 0
				unset($url[0]);
				
			}}

			//requerir el controlador
			require_once '../app/controllers/'.$this->controladorActual.'.php';
			$this->controladorActual = new $this->controladorActual;


			//chequear la segunda parte de la url que seria el metodo
			if (isset($url[1])) {//si se ah seteado osea local../php/atro/meto
				if (method_exists($this->controladorActual, $url[1])) {
					//si se crago verificamos el metodo
					$this->metodoActual = $url[1];
					unset($url[1]);
				

				}
			}
			//para probar traer metodo
			//echo $this->metodoActual;

			//obtener los posibles parametros
			$this->parametros =$url ? array_values($url) : [];
			//lamar callback con parametros array
			call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);

		}

		public function getUrl(){
			//echo $_GET['url'];
			if (isset($_GET['url'])) {//se verifica si esta confugurada la url
				$url = rtrim($_GET['url'],'/');//cortar los espacios delimitados por/
				$url = filter_var($url, FILTER_SANITIZE_URL);//quita caracteres +?:@&
				$url = explode('/', $url);//crea un array con los datos separados por/
				
				return $url;

			}
		}	
	}
?>