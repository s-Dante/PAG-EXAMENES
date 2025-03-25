<?php
require 'Guest.php';
require 'Maestro.php';
require 'Admin.php';

class Middleware{
    public const MAP= [
        'guest'=>Guest::class,
        'maestro'=>Maestro::class,
        'admin'=>Admin::class
    ];

    public static function resolve($role){

        if(!$role){ 
            $role = 'guest';
        }
        $middleware = static::MAP[$role] ?? null;

        if(!$middleware){
            return;
        }
        (new $middleware())->handle();
    }
}