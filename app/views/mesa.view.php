<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class MesaView {
    
    private $smarty;

    public function __construct() {

        $this->smarty = new Smarty();
        
        //Con esto verifico el estado de sesion para corroborar la aparicion de los botones de login y logout
        if (empty($_SESSION['name_usuario'])){
            $this->smarty->assign('usernameExists', true);
        } else {
            $this->smarty->assign('usernameExists', false);
        }

    }

    function showMesas($mesadejuego) {

        $this->smarty->assign('count', count($mesadejuego));
        $this->smarty->assign('mesadejuego', $mesadejuego);

        // mostrar el tpl
        $this->smarty->display('listaMesas.tpl');
    }

    function showCapeon($campeones, $mesadejuego) {

        $this->smarty->assign('session', false);
        $this->smarty->assign('count', count($campeones));
        $this->smarty->assign('campeones', $campeones);
        $this->smarty->assign('mesadejuego', $mesadejuego);

        // mostrar el tpl
        $this->smarty->display('listaCampeones.tpl');
    }
    
    public function showEditMesa($mesadejuego, $error = false) {

        $this->smarty->assign('mesadejuego', $mesadejuego);
        $this->smarty->assign("error", $error);
        $this->smarty->display('./templates/editMesa.tpl');
    }

    public function showEditCampeon($campeon,$mesadejuego, $error = false) {

        //gracias a esta linea, tambien me traigo cosas las mesas para poder recorrerlas en el foreach al editar el campeon
        $this->smarty->assign('mesadejuego', $mesadejuego);

        $this->smarty->assign('campeon', $campeon);
        $this->smarty->assign("error", $error);
        $this->smarty->display('./templates/editCampeon.tpl');
    }

    public function showNavMesa($mesadejuego, $campeonesById, $error = false) {

        $this->smarty->assign('mesadejuego', $mesadejuego);
        $this->smarty->assign('campeonesById', $campeonesById);
        $this->smarty->assign("error", $error);
        $this->smarty->display('./templates/navMesa.tpl');
    }
   


}
