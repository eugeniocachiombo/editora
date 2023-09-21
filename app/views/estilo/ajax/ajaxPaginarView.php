<?php
require_once "../app/config/db.php"; 

if(!empty($_POST["palavra"])){
    $palavra = $_POST["palavra"];   
    $estilos = new EstiloDao();
    $lista = $estilos->BuscarPorPalavra($palavra);
    echo json_encode($lista);
}else{
    $estilos = new EstiloDao();
    $lista = $estilos->BuscarPorLimite(0, 10);
    echo json_encode($lista);
}


?>