<?php

class ArtistaController {

    function Index( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] = ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeController, $dados );
    }

    function Cadastrar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if (
                !empty( $_POST[ 'txtIdUtilizador' ] ) &&
                !empty( $_POST[ 'txtIdCargoArtista' ] ) &&
                !empty( $_POST[ 'txtIdBanda' ] ) &&
                !empty( $_POST[ 'txtIdCargoArtistaBanda' ] )
            ) {

                $ArtistaDao = new ArtistaDao();
                $ArtistaDao->setIdUtilizador( $_POST[ 'txtIdUtilizador' ] );
                $ArtistaDao->setIdCargoArtista( $_POST[ 'txtIdCargoArtista' ] );
                $ArtistaDao->setIdBanda( $_POST[ 'txtIdBanda' ] );
                $ArtistaDao->setIdCargoArtistaBanda( $_POST[ 'txtIdCargoArtistaBanda' ] );
                $ArtistaDao->Cadastrar();

            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

    function AjaxBuscarArtista( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function AjaxPaginar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Álbum' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Buscar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  'Registos de Artístas';
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Actualizar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if (
                !empty( $_POST[ 'txtIdArtista' ] ) &&
                !empty( $_POST[ 'txtIdUtilizador' ] ) &&
                !empty( $_POST[ 'txtIdCargoArtista' ] ) &&
                !empty( $_POST[ 'txtIdBanda' ] ) &&
                !empty( $_POST[ 'txtIdCargoArtistaBanda' ] )
            ) {

                $ArtistaDao = new ArtistaDao();
                $ArtistaDao->setIdArtista( $_POST[ 'txtIdArtista' ] );
                $ArtistaDao->setIdUtilizador( $_POST[ 'txtIdUtilizador' ] );
                $ArtistaDao->setIdCargoArtista( $_POST[ 'txtIdCargoArtista' ] );
                $ArtistaDao->setIdBanda( $_POST[ 'txtIdBanda' ] );
                $ArtistaDao->setIdCargoArtistaBanda( $_POST[ 'txtIdCargoArtistaBanda' ] );
                $ArtistaDao->Actualizar();

            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

    function Eliminar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtIdArtista' ] ) ) {
                $ArtistaDao = new ArtistaDao();
                $ArtistaDao->setIdArtista( $_POST[ 'txtIdArtista' ] );
                $ArtistaDao->Eliminar();
            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

}

?>