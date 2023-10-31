<?php

class CargoArtistaController {

    function Index( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] = ucfirst( 'CargoArtista' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeController, $dados );
    }

    function Cadastrar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Cargo de Artísta' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtDescricaoCargoArtista' ] ) ) {

                $CargoArtistaDao = new CargoArtistaDao();
                $CargoArtistaDao->setDescricaoCargoArtista( $_POST[ 'txtDescricaoCargoArtista' ] );
                $CargoArtistaDao->Cadastrar();

            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

    function AjaxBuscarCargoArtista( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Cargo de Artísta' );
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
        $dados[ 'title' ] =  'Registos de Cargo de Artistas';
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Actualizar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Cargo de Artísta' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtIdCargoArtista' ] ) && !empty( $_POST[ 'txtDescricaoCargoArtista' ] ) ) {

                $CargoArtistaDao = new CargoArtistaDao();
                $CargoArtistaDao->setIdCargoArtista( $_POST[ 'txtIdCargoArtista' ] );
                $CargoArtistaDao->setDescricaoCargoArtista( $_POST[ 'txtDescricaoCargoArtista' ] );
                $CargoArtistaDao->Actualizar();
                
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
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Cargo de Artísta' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtIdCargoArtista' ] ) ) {
              
                $CargoArtistaDao = new CargoArtistaDao();
                $CargoArtistaDao->setIdCargoArtista( $_POST[ 'txtIdCargoArtista' ] );
                $CargoArtistaDao->Eliminar();

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