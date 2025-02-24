<?php

class Maestro{

    public function handle(){
        if(!isset($_SESSION['user'])){
            header("Location: /inicioSesion");
            exit;
        }
        if($_SESSION['user']['Rol']!='Maestro'){
            header("Location: /");
            exit;
        }
    }
}