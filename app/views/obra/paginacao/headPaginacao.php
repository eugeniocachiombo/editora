<?php
// Receber a uri
require "../app/core/pegarURI.php";
$pagina = isset($_POST["pagina"]) ? $_POST["pagina"] : 1;


if(!empty($uri[2]) && $uri[2] != "Obra"){

    $uri = explode("=", $uri[2]);
    $itensPorPagina = 10;
    $inicio = ($uri[2] - 1) * $itensPorPagina;
    $paginaActual = $uri[2];
    $avancar = $paginaActual + 1;
    $voltar  = $paginaActual - 1;
       
    $obras = new ObraDao();
    $totalObras = $obras->BuscarTotal();
    $lista = $obras->BuscarPorLimite($inicio, $itensPorPagina);
    $totalPaginas = ceil( $totalObras["count(*)"] / $itensPorPagina ); 

}else{
    
    $itensPorPagina = 10;
    $inicio = 1;
    $paginaActual = 1;
    $avancar = $paginaActual + 1;
    $voltar  = $paginaActual - 1;

    $obras = new ObraDao();
    $totalObras = $obras->BuscarTotal();
    $lista = $obras->BuscarLimitado();
    $totalPaginas = ceil( $totalObras["count(*)"] / $itensPorPagina );
}