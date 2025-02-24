<?php
require "Model/User.php";

$config = require "config.php";

$userDB = new User($config['database']);

if(isset($_POST['claveUsuario']) && isset($_POST['password'])){
    $claveUsuario = $_POST['claveUsuario'];
    $password = $_POST['password'];
    $user = $userDB->logIn($claveUsuario, $password);
    if($user){
        $_SESSION['user'] = $user;
        $_SESSION['mensaje'] = ['text' => 'Inicio de sesión exitoso', 'type' => 'success'];
    }else{
        $_SESSION['mensaje'] = ['text' => 'Usuario no encontrado', 'type' => 'error'];
    }
}
require "Views/inicioSesion.view.php";