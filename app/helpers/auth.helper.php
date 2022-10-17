<?php

class AuthHelper {
    
    public function __construct() {
        
    }
    
    //Verifica que el user este logueado y si no lo está lo redirige al login.
    public function checkLoggedIn() {
        if (!isset($_SESSION['id_usuario'])) {
            header("Location: " . BASE_URL . 'showLogin');
            die();
        }
    }

}