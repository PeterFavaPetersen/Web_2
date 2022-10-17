<?php

session_start();
require_once 'app/controllers/mesa.controller.php';
require_once 'app/controllers/log.controller.php';
include_once './app/helpers/auth.helper.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list'; // acción por defecto
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
//$mesaController = new MesaController();


//Mi linda tabla de ruteo


//$logCotroller = new LogController();

switch ($params[0]) {
    case 'showRegister':
        $logCotroller = new LogController();
        $logCotroller->registerPage();
        break;

    case 'register':
        $logCotroller = new LogController();
        $logCotroller->register();
        break;
    
    case 'showLogin':
        $logCotroller = new LogController();
        $logCotroller->loggingPage();
        break;

    case 'loggearse':
        $logCotroller = new LogController();
        $logCotroller->verificarLoggin();
        break;

    case 'logout':
        $logCotroller = new LogController();
        $logCotroller->logout();
        break;

/*** **************************************************** */
    case 'list':
        $mesaController = new MesaController();
        $mesaController->showMesas();
        $mesaController->showCapeon();
        break;

    case 'addJuego':
        $mesaController = new MesaController();
        $mesaController->addMesa();
        //$mesaController->addJuego();
        break;
    
    case 'addCampeon':
        $mesaController = new MesaController();
        $mesaController->addCampeon();
        break;

    case 'deleteMesa':
        $mesaController = new MesaController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $mesaController->deleteMesa($id);
        break;

    case 'deleteCampeon':
        $mesaController = new MesaController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $mesaController->deleteCampeon($id);
        break;

    case 'showEditMesa':
        $mesaController = new MesaController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $mesaController->editMesaPage($id);
        break;

    case 'editMesa': 
        $mesaController = new MesaController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $mesaController->editMesa($id);
        break;

    case 'showEditCampeon':
        $mesaController = new MesaController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $mesaController->editCampeonPage($id);
        break;

    case 'editCampeon':   
        $mesaController = new MesaController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $mesaController->editCampeon($id);
        break;

    case 'navMesa':
        $mesaController = new MesaController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $mesaController->navMesa($id);
        break;

    default:
        echo('404 Page not found');
        break;
}




















