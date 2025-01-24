<?php
require 'Guest.php';


class Middleware{
    public const MAP= [
        'guest'=>Guest::class
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