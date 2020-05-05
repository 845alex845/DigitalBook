<?php 

class Categoria{
    private $db;
    public function __construct(){
        $this->db=new Base;
    }
    public function obtenerCategorias(){
        $this->db->query('SELECT * FROM categorias');
        $resultados=$this->db->registros();
        return $resultados;
    }
    public function agregarCategoria($datos){
        $sql='INSERT  INTO categorias (nombre) VALUES(:nombre)';
        $this->db->query($sql);
        $this->db->bind(':nombre',$datos['nombre']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}