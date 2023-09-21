<?php
require_once "../app/config/db.php"; 

if(!empty($_POST["palavra"])){
    $palavra = $_POST["palavra"];   
    $bandas = new BandaDao();
    $lista = $bandas->BuscarPorPalavra($palavra);
    echo json_encode($lista);
}else{
    $bandas = new BandaDao();
    $lista = $bandas->BuscarPorLimite(0, 10);
    echo json_encode($lista);
}


?>