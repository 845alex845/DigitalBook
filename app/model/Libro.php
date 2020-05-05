<?php 



class Libro{
    private $db;
    public function __construct(){
        $this->db=new Base;
    }
    public function obtenerLibros(){
        $this->db->query('SELECT * FROM libros');
        $resultados=$this->db->registros();
        return $resultados;
    }
    public function agregarLibro($datos){
        $sql="INSERT INTO libros (categoria_id, titulo,autor,descripcion,precio,stock,oferta,imagen)  
        VALUES (:categoria_id,:titulo,:autor,:descripcion,:precio,:stock,:oferta,:imagen)";
        $this->db->query($sql);
        //vinculando los valores

        $this->db->bind(':categoria_id', $datos['categoria']);
        $this->db->bind(':autor', $datos['autor']);
        $this->db->bind(':titulo', $datos['titulo']);
        $this->db->bind(':descripcion', $datos['descripcion']);
        $this->db->bind(':precio', $datos['precio']);
        $this->db->bind(':stock', $datos['stock']);
        $this->db->bind(':oferta', $datos['oferta']);
        $this->db->bind(':imagen', $datos['imagen']);

        //Ejecutar
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function obtenerLibroId($id){
        $this->db->query('SELECT * FROM libros WHERE id =:id');
        $this->db->bind(':id',$id);

        $fila =$this->db->registro();
        return $fila;
     }
     public function actualizarLibro($datos){
        $sql="UPDATE libros SET categoria_id = :categoria_id, autor = :autor, titulo = :titulo, descripcion = :descripcion,precio = :precio,
        stock = :stock,oferta = :oferta,imagen = :imagen
         WHERE id = :id";
        $this->db->query($sql);
        //vincular valores
        $this->db->bind(':id',$datos['id']);
        $this->db->bind(':categoria_id',$datos['categoria']);
        $this->db->bind(':autor',$datos['autor']);
        $this->db->bind(':titulo',$datos['titulo']);
        $this->db->bind(':descripcion',$datos['descripcion']);
        $this->db->bind(':precio',$datos['precio']);
        $this->db->bind(':stock',$datos['stock']);
        $this->db->bind(':oferta',$datos['oferta']);
        $this->db->bind(':imagen',$datos['imagen']);
        //ejecutar
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
     }
}