<?php


class MesaModel {


    // 1. abro conexión a la DB
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_sesion;charset=utf8', 'root', '');
    }

    public function getALLMesas() {
        $query = $this->db->prepare('SELECT * FROM `mesadejuego`');
        $query->execute();

        $mesadejuego = $query->fetchAll(PDO::FETCH_OBJ); 

        return $mesadejuego;
    }

    public function getMesaDeJuego($id_mesadejuego) {
        
        $query = $this->db->prepare('SELECT * FROM `mesadejuego` WHERE `id_mesadejuego` = ?');
        $query->execute([$id_mesadejuego]);

        $mesadejuego = $query->fetch(PDO::FETCH_OBJ); 

        return $mesadejuego;
    }

    public function getALLCampeones() {

        $query = $this->db->prepare('SELECT * FROM `campeones`');
        $query->execute();

        $campeones = $query->fetchAll(PDO::FETCH_OBJ); 

        return $campeones;
    }

    public function getCampeon($id_campeones) {

        $query = $this->db->prepare('SELECT * FROM `campeones` WHERE `id_campeones` = ?');
        $query->execute([$id_campeones]);

        $campeon = $query->fetch(PDO::FETCH_OBJ); 

        return $campeon;
    }

    public function getALLCampeonesById($id_juego) {

        $query = $this->db->prepare('SELECT * FROM `campeones` WHERE `id_juego` = ?');
        $query->execute([$id_juego]);

        $campeon = $query->fetchALL(PDO::FETCH_OBJ); 

        return $campeon;
    }


    public function insertMesa($juego, $director, $cantidadJugadores) {

        $mesadejuego = $this->db->prepare('INSERT INTO mesadejuego (juego, director, cantidadJugadores) VALUES (?, ?, ?)');

        $mesadejuego->execute([$juego, $director, $cantidadJugadores]);

        return $this->db->lastInsertId();
    }

    public function insertCampeon($nombre, $duracion, $fecha, $id_juego) {

        $campeones = $this->db->prepare('INSERT INTO campeones (nombre, duracion, fecha, id_juego) VALUES (?, ?, ?, ?)');

        $campeones->execute([$nombre, $duracion, $fecha, $id_juego]);

        return $this->db->lastInsertId();
    }

    function deleteMesaId($id) {

        $mesadejuego = $this->db->prepare('DELETE FROM `mesadejuego` WHERE `id_mesadejuego` = ?');
        $mesadejuego->execute([$id]);
    }
    
    function deleteCampeonId($id) {

        $campeones = $this->db->prepare('DELETE FROM `campeones` WHERE `id_campeones` = ?');
        $campeones->execute([$id]);
    }

    function editMesaId($id, $juego, $director, $cantidadJugadores) {
        
        $mesadejuego = $this->db->prepare('UPDATE `mesadejuego` SET `juego` = ?, `director` = ?, `cantidadJugadores` = ? WHERE `id_mesadejuego` = ?');
        $mesadejuego->execute([$juego, $director, $cantidadJugadores, $id]);

    }

    function editCampeonId($nombre, $duracion, $fecha, $id_juego, $id) {
        
        $campeon = $this->db->prepare('UPDATE `campeones` SET `nombre` = ?, `duracion` = ?, `fecha` = ? ,`id_juego`= ? WHERE `id_campeones` = ?');
        $campeon->execute([$nombre, $duracion, $fecha, $id_juego, $id]);

    }

    
}
