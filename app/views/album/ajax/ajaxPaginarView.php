<?php
require_once "../app/config/db.php"; 

if(!empty($_POST["palavra"])){
    $palavra = $_POST["palavra"];   
    $albuns = new AlbumDao();
    $lista = $albuns->BuscarPorPalavra($palavra);
    echo json_encode($lista);
}else{
    $albuns = new AlbumDao();
    $lista = $albuns->BuscarPorLimite(0, 10);
    echo json_encode($lista);
}


?>