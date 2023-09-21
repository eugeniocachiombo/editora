<?php

class InicioController {

    function Index( $nomePasta, $nomeController, $nomeMetodo ) {
        echo '<hr> <h1> Página Inicial Encontrada</h1> <hr>';
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] = ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeController, $dados );
    }

}

?>