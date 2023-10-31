<?php
require_once "../app/config/db.php"; 

if(!empty($_POST["palavra"])){
    $palavra = $_POST["palavra"];   
    $artistas = new ArtistaDao();
    $lista = $artistas->BuscarPorPalavra($palavra);
    echo json_encode($lista);
}else{
    $artistas = new ArtistaDao();
    $lista = $artistas->BuscarPorLimite(0, 10);
    echo json_encode($lista);
}


?>