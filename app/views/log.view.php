<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
include_once './app/helpers/auth.helper.php';

class LogView {
    
    private $smarty;

    public function __construct() {

        $this->smarty = new Smarty(); // inicializo Smarty
        
        //Con esto verifico el estado de sesion para corroborar la aparicion de los botones de login y logout
        if (empty($_SESSION['name_usuario'])){
            $this->smarty->assign('usernameExists', true);
        } else {
            $this->smarty->assign('usernameExists', false);
        }  
    }

    function showLogin($error = false) {
        
        $this->smarty->assign("error", $error);
        $this->smarty->display('./templates/login.tpl');
    }
    
    public function showRegister($error = false) {

        $this->smarty->assign("error", $error);
        $this->smarty->display('./templates/register.tpl');
    }
}