<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function obtenerUsuarios(){
            $this->db->query('SELECT * FROM usuarios');
            $resultados= $this->db->registros();

            return $resultados;
        }

        public function agregarUsuario($datos){


            $this->db->query('INSERT INTO usuarios(id,nombre,apellidos,email,password,rol,imagen) VALUES (null,:nombre,:apellidos,:email,:password,"user",null)');
            
            //vincular valores
            $this->db->bind(':nombre',$datos['nombre']);
            $this->db->bind(':apellidos',$datos['apellidos']);
            $this->db->bind(':email',$datos['email']);
            $this->db->bind(':password',$datos['password']);
            
            //ejecutar
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function verificarUsuario($email){
            $this->db->query('SELECT * FROM usuarios WHERE email = :email');
            $this->db->bind(':email', $email);
            $resul = $this->db->registro();
            return $resul;
        }

        
        public function verificarDatos($email,$pass){
            $this->db->query('SELECT *FROM usuarios WHERE email = :email AND password = :password');
            //vinculamos los valores
            $this->db->bind(':email', $email);
            $this->db->bind(':password', $pass);
            $resul = $this->db->registro();
            return $resul;
        }

    }