<?php

class MunicipioController {

    function Index( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] = ucfirst( 'Município' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeController, $dados );
    }

    function Cadastrar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Município' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtNomeMunicipio' ] ) && !empty( $_POST[ 'txtIdProvincia' ] ) ) {
                $MunicipioDao = new MunicipioDao();
                $MunicipioDao->setNomeMunicipio( $_POST[ 'txtNomeMunicipio' ] );
                $MunicipioDao->setIdProvincia( $_POST[ 'txtIdProvincia' ] );
                $MunicipioDao->Cadastrar();
            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

    function AjaxBuscarMunicipio( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Município' );
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
        $dados[ 'title' ] =  'Registos de Municípios';
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Actualizar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Município' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if (
                !empty( $_POST[ 'txtIdMunicipio' ] ) &&
                !empty( $_POST[ 'txtNomeMunicipio' ] ) &&
                !empty( $_POST[ 'txtIdProvincia' ] )
            ) {
                $MunicipioDao = new MunicipioDao();
                $MunicipioDao->setIdMunicipio( $_POST[ 'txtIdMunicipio' ] );
                $MunicipioDao->setNomeMunicipio( $_POST[ 'txtNomeMunicipio' ] );
                $MunicipioDao->setIdProvincia( $_POST[ 'txtIdProvincia' ] );
                $MunicipioDao->Actualizar();
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
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Município' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtIdMunicipio' ] ) ) {
                $MunicipioDao = new MunicipioDao();
                $MunicipioDao->setIdMunicipio( $_POST[ 'txtIdMunicipio' ] );
                $MunicipioDao->Eliminar();
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