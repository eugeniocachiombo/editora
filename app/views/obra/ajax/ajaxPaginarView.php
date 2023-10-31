<?php
require_once "../app/config/db.php"; 

if(!empty($_POST["palavra"])){
    $palavra = $_POST["palavra"];   
    $obras = new ObraDao();
    $lista = $obras->BuscarPorPalavra($palavra);
    echo json_encode($lista);
}else{
    $obras = new ObraDao();
    $lista = $obras->BuscarPorLimite(0, 10);
    echo json_encode($lista);
}

?>