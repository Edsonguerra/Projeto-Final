<?php
class Usuario{


    public function loginForm($email,$senha){
        global $pdo;

        $sql ="SELECT* FROM usuario WHERE email=:email AND senha =:senha";

        $sql= $pdo->bindvalue("email",$email);
        $sql= $pdo->bindvalue("senha",$senha);
        $sql->execute();

    }
}