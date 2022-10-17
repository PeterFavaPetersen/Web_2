<?php



class LogModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_sesion;charset=utf8', 'root', '');
    }

    function registerUser($username, $password){

        $user = $this->db->prepare('INSERT INTO usuarios (name_usuario, password_usuario) VALUES (?, ?)');
        
        $user->execute([$username, $password]);
        
        return $this->db->lastInsertId();

    }

    function getByUsername($username) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE name_usuario = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);

    }





    
}