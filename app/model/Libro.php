<?php 

class Libro{
    private $db;
    public function __construct(){
        $this->db=new Base;
    }
    public function obtenerLibros(){
        $this->db->query('SELECT * FROM libro');
        $resultados=$this->db->registros();
        return $resultados;
    }
}