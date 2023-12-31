<?php
// Receber a uri
require '../app/core/pegarURI.php';

if ( !empty( $uri[ 2 ] ) && $uri[ 2 ] != 'Chat'  ) {

    $uri = explode( '=', $uri[ 2 ] );
    if($uri[ 2 ] == 0){
        $uri[ 2 ] = 1;
        ?> <script>localStorage.setItem("detectarPagina-0", "0");</script> <?php
    }
    $itensPorPagina = 6;
    $inicio = ( $uri[ 2 ] - 1 ) * $itensPorPagina;
    $paginaActual = $uri[ 2 ];
    $avancar = $paginaActual + 1;
    $voltar  = $paginaActual - 1;

    $chat = new ChatDao();
    $totalchat = $chat->BuscarTotal( $_SESSION[ 'idUtilizador' ], $_SESSION[ 'idUtilizadorDestino' ] );
    $lista = $chat->BuscarPorLimite( $inicio, $itensPorPagina, $_SESSION[ 'idUtilizador' ], $_SESSION[ 'idUtilizadorDestino' ] );
    $totalPaginas = ceil( $totalchat[ 'count(*)' ] / $itensPorPagina );
} else {
    $itensPorPagina = 6;
    $inicio = 1;
    $paginaActual = 1;
    $avancar = $paginaActual + 1;
    $voltar  = $paginaActual - 1;

    $chat = new ChatDao();
    $totalchat = $chat->BuscarTotal( $_SESSION[ 'idUtilizador' ], $_SESSION[ 'idUtilizadorDestino' ] );
    $lista = $chat->BuscarLimitado( $_SESSION[ 'idUtilizador' ], $_SESSION[ 'idUtilizadorDestino' ] );
    $totalPaginas = ceil( $totalchat[ 'count(*)' ] / $itensPorPagina );
}
