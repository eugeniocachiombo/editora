<?php

function GetConexao() {
    try {
        $host = 'mysql:host=localhost;dbname=editora;charset=utf8mb4';
        $user = 'root';
        $pass = '';

        $pdo = new PDO( $host, $user, $pass );

        return $pdo;
    } catch ( Exception $e ) {
        echo 'Erro na base de dados: '.$e->getMessage();
    }
}

?>