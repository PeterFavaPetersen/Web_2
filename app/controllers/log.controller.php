<?php

require_once './app/models/log.model.php';
require_once './app/views/log.view.php';
include_once './app/helpers/auth.helper.php';


class LogController {

    private $model;
    private $view;
    private $authHelper;


    public function __construct(){
        $this->model = new LogModel();
        $this->view = new LogView();
        $this->authHelper = new AuthHelper();
    }
    
    public function loggingPage() {
        $this->view->showLogin();
    }

    public function registerPage() {
        $this->view->showRegister();
    }


    public function register() {
        
        $username = $_POST['name_usuario'];
        $password = $_POST['password_usuario'];

        //Hasheo la password
        $pw_hash = password_hash($password, PASSWORD_DEFAULT);  
        //Envio el usuario y la password hasheada
        $user = $this->model->registerUser($username, $pw_hash);
        
        header("Location: " . BASE_URL); 
    }


    public function verificarLoggin() {
        $username = $_POST['name_usuario'];
        $password = $_POST['password_usuario'];

        // busco el usuario por username
        $user = $this->model->getByUsername($username);            

        // verifico que el usuario existe y que las contraseñas son iguales
        if (!empty($user) && password_verify($password, $user->password_usuario)) {

            // inicio una session para este usuario
            session_start();

            $_SESSION['id_usuario'] = $user->id_usuario;
            $_SESSION['name_usuario'] = $user->name_usuario;

            header("Location: " . BASE_URL);
        }
        else{
            $this->view->showLogin("Login incorrecto");
        }

    }

    public function logout() {
        //session_start();
        session_destroy();
        $_SESSION['id_usuario'] = null;
        $_SESSION['name_usuario'] = null;
        header("Location: " . BASE_URL);
    }

}