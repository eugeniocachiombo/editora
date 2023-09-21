<?php

class CargoArtistaBandaController {

    function Index( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] = ucfirst( 'Cargos de Artístas na Banda' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeController, $dados );
    }

    function Cadastrar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Cargos de Artístas na Banda' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtDescricaoCargoArtistaBanda' ] ) && !empty( $_POST[ 'txtIdBanda' ] ) ) {
                
                $CargoArtistaBandaDao = new CargoArtistaBandaDao();
                $CargoArtistaBandaDao->setDescricaoCargoArtistaBanda( $_POST[ 'txtDescricaoCargoArtistaBanda' ] );
                $CargoArtistaBandaDao->setIdBanda( $_POST[ 'txtIdBanda' ] );
                $CargoArtistaBandaDao->Cadastrar();

            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

    function AjaxBuscarCargoArtistaBanda( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Cargos de Artístas na Banda' );
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
        $dados[ 'title' ] =  'Registos de Cargos de Artístas nas Bandas';
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Actualizar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Cargos de Artístas na Banda' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if (
                !empty( $_POST[ 'txtIdCargoArtistaBanda' ] ) &&
                !empty( $_POST[ 'txtDescricaoCargoArtistaBanda' ] ) &&
                !empty( $_POST[ 'txtIdBanda' ] )
            ) {

                $CargoArtistaBandaDao = new CargoArtistaBandaDao();
                $CargoArtistaBandaDao->setIdCargoArtistaBanda( $_POST[ 'txtIdCargoArtistaBanda' ] );
                $CargoArtistaBandaDao->setDescricaoCargoArtistaBanda( $_POST[ 'txtDescricaoCargoArtistaBanda' ] );
                $CargoArtistaBandaDao->setIdBanda( $_POST[ 'txtIdBanda' ] );
                $CargoArtistaBandaDao->Actualizar();

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
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Cargos de Artístas na Banda' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtIdCargoArtistaBanda' ] ) ) {

                $CargoArtistaBandaDao = new CargoArtistaBandaDao();
                $CargoArtistaBandaDao->setIdCargoArtistaBanda( $_POST[ 'txtIdCargoArtistaBanda' ] );
                $CargoArtistaBandaDao->Eliminar();

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