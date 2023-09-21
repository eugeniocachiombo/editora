<?php
// Receber a uri
require '../app/core/pegarURI.php';
$pagina = isset( $_POST[ 'pagina' ] ) ? $_POST[ 'pagina' ] : 1;

if ( !empty( $uri[ 2 ] ) && $uri[ 2 ] != 'Album' ) {

    $uri = explode( '=', $uri[ 2 ] );
    $itensPorPagina = 10;
    $inicio = ( $uri[ 2 ] - 1 ) * $itensPorPagina;
    $paginaActual = $uri[ 2 ];
    $avancar = $paginaActual + 1;
    $voltar  = $paginaActual - 1;

    $albuns = new AlbumDao();
    $totalAlbuns = $albuns->BuscarTotal();
    $lista = $albuns->BuscarPorLimite( $inicio, $itensPorPagina );
    $totalPaginas = ceil( $totalAlbuns[ 'count(*)' ] / $itensPorPagina );

} else {

    $itensPorPagina = 10;
    $inicio = 1;
    $paginaActual = 1;
    $avancar = $paginaActual + 1;
    $voltar  = $paginaActual - 1;

    $albuns = new AlbumDao();
    $totalAlbuns = $albuns->BuscarTotal();
    $lista = $albuns->BuscarLimitado();
    $totalPaginas = ceil( $totalAlbuns[ 'count(*)' ] / $itensPorPagina );
}