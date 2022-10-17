<?php

require_once './app/models/mesa.model.php';
require_once './app/views/mesa.view.php';
require_once './app/helpers/auth.helper.php';

class MesaController {
    private $model;
    private $view;
    private $authHelper;

    public function __construct(){
        $this->model = new MesaModel();
        $this->view = new MesaView();
        
        $this->authHelper = new AuthHelper();
    }

    public function showMesas() {
        
        $mesadejuego = $this->model->getALLMesas();
        $this->view->showMesas($mesadejuego);
        
    }

    public function showCapeon() {
        
        //Traigo la el contenido de cada Campeon.
        $campeones = $this->model->getALLCampeones();
        $mesadejuego = $this->model->getALLMesas();
        $this->view->showCapeon($campeones, $mesadejuego);
    }

    function addMesa() {
        
        $this->authHelper->checkLoggedIn();
        $juego = $_POST['juego'];
        $director = $_POST['director'];
        $cantidadJugadores = $_POST['cantidadJugadores'];
     
        $campeones = $this->model->getALLCampeones();
        $id_mesa = $this->model->insertMesa($juego, $director, $cantidadJugadores);

        header("Location: " . BASE_URL); 

    } 

    function addCampeon() {

        $this->authHelper->checkLoggedIn();
        $nombre = $_POST['nombre'];
        $duracion = $_POST['duracion'];
        $fecha = $_POST['fecha'];
        $id_juego = $_POST['id_juego'];

        $id_campeon = $this->model->insertCampeon($nombre, $duracion, $fecha, $id_juego);

        header("Location: " . BASE_URL); 
    }

    function deleteMesa($id) {
        
        $this->authHelper->checkLoggedIn();
        $this->model->deleteMesaId($id);
        header("Location: " . BASE_URL);
    }
    
    function deleteCampeon($id) {
        
        $this->authHelper->checkLoggedIn();
        $this->model->deleteCampeonId($id);
        header("Location: " . BASE_URL);
    }

    public function editMesaPage($id) {
        
        $this->authHelper->checkLoggedIn();
        $mesadejuego = $this->model->getMesaDeJuego($id);
        $this->view->showEditMesa($mesadejuego);
    }

    public function editCampeonPage($id) {
        
        $this->authHelper->checkLoggedIn();
        $mesadejuego = $this->model->getALLMesas();
        $campeon = $this->model->getCampeon($id);
        $this->view->showEditCampeon($campeon, $mesadejuego);
    }

    function editMesa($id) {

        $juego = $_POST['juego'];
        $director = $_POST['director'];
        $cantidadJugadores = $_POST['cantidadJugadores'];

        $this->model->editMesaId($id, $juego, $director, $cantidadJugadores);
        header("Location: " . BASE_URL);

    }

    function editCampeon($id) {

        $nombre = $_POST['nombre'];
        $duracion = $_POST['duracion'];
        $fecha = $_POST['fecha'];
        $id_juego = $_POST['id_juego'];

        $this->model->editCampeonId($nombre, $duracion, $fecha, $id_juego, $id);

        header("Location: " . BASE_URL); 
    }

    function navMesa($id) {
        $mesadejuego = $this->model->getMesaDeJuego($id);
        $campeonesById = $this->model->getALLCampeonesById($id);
        $this->view->showNavMesa($mesadejuego, $campeonesById);
    }
}

