<?php

class AlbumController {

    function Index( $nomePasta, $nomeController, $nomeMetodo ) {
        echo 'index';
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] = ucfirst( 'Álbum' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeController, $dados );
    }

    function Cadastrar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Álbum' );

        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtNomeAlbum' ] ) ) {
                $AlbumDao = new AlbumDao();
                $AlbumDao->setNomeAlbum( $_POST[ 'txtNomeAlbum' ] );
                $AlbumDao->setIdArtista( $_POST[ 'txtIdArtista' ] );
                $AlbumDao->Cadastrar();
            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script>
                <?php
            }
        }
    }

    function AjaxBuscarAlbum( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Álbum' );
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
        $dados[ 'title' ] =  'Registos de Álbuns';
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Actualizar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Álbum' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if (
                !empty( $_POST[ 'txtIdAlbum' ] )
                && !empty( $_POST[ 'txtNomeAlbum' ] )
                && !empty( $_POST[ 'txtIdArtista' ] )
            ) {
                $AlbumDao = new AlbumDao();
                $AlbumDao->setIdAlbum( $_POST[ 'txtIdAlbum' ] );
                $AlbumDao->setNomeAlbum( $_POST[ 'txtNomeAlbum' ] );
                $AlbumDao->setIdArtista( $_POST[ 'txtIdArtista' ] );
                $AlbumDao->Actualizar();
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
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Álbum' );

        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtIdAlbum' ] ) ) {
                $AlbumDao = new AlbumDao();
                $AlbumDao->setIdAlbum( $_POST[ 'txtIdAlbum' ] );
                $AlbumDao->Eliminar();
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