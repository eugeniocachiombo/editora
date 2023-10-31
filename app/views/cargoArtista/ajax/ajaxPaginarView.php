<?php
require_once "../app/config/db.php"; 

if(!empty($_POST["palavra"])){
    $palavra = $_POST["palavra"];   
    $cargoArtistas = new CargoArtistaDao();
    $lista = $cargoArtistas->BuscarPorPalavra($palavra);
    echo json_encode($lista);
}else{
    $cargoArtistas = new CargoArtistaDao();
    $lista = $cargoArtistas->BuscarPorLimite(0, 10);
    echo json_encode($lista);
}


?>