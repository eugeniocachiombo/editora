<?php

class BandaController {

    function Index( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] = ucfirst( 'Banda' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeController, $dados );
    }

    function Cadastrar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Banda' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtNomeBanda' ] ) ) {

                $BandaDao = new BandaDao();
                $BandaDao->setNomeBanda( $_POST[ 'txtNomeBanda' ] );
                $BandaDao->Cadastrar();
                
            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

    function AjaxBuscarBanda( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Banda' );
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
        $dados[ 'title' ] =  'Registos de Bandas';
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Actualizar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Banda' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtIdBanda' ] ) && !empty( $_POST[ 'txtNomeBanda' ] ) ) {

                $BandaDao = new BandaDao();
                $BandaDao->setIdBanda( $_POST[ 'txtIdBanda' ] );
                $BandaDao->setNomeBanda( $_POST[ 'txtNomeBanda' ] );
                $BandaDao->Actualizar();

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
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Banda' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtIdBanda' ] ) ) {
                $BandaDao = new BandaDao();
                $BandaDao->setIdBanda( $_POST[ 'txtIdBanda' ] );
                $BandaDao->Eliminar();
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