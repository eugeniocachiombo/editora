<?php
require_once "../app/config/db.php"; 

if(!empty($_POST["palavra"])){
    $palavra = $_POST["palavra"];   
    $cargoArtistaBandas = new CargoArtistaBandaDao();
    $lista = $cargoArtistaBandas->BuscarPorPalavra($palavra);
    echo json_encode($lista);
}else{
    $cargoArtistaBandas = new CargoArtistaBandaDao();
    $lista = $cargoArtistaBandas->BuscarPorLimite(0, 10);
    echo json_encode($lista);
}


?>