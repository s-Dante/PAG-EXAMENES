<?php
require 'Conexion.php';

class User{

    private $con;

    public function __construct($config){
        $this->con = new Conexion($config);
    }

    public function getUser($claveUsuario){
        $sql = "SELECT * FROM Usuario WHERE ClaveUsuario = :ClaveUsuario";
        $stmt = $this->con->getCon()->prepare($sql);
        $stmt->bindParam(':ClaveUsuario', $claveUsuario);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function logIn($claveUsuario, $password){
        $sql = "SELECT * FROM Usuario WHERE ClaveUsuario = :ClaveUsuario AND Password = :Password";
        $stmt = $this->con->getCon()->prepare($sql);
        $stmt->bindParam(':ClaveUsuario', $claveUsuario);
        $stmt->bindParam(':Password', $password);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>