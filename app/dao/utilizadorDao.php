<?php
require_once '../app/interface/crud.php';
require_once '../app/models/utilizadorModel.php';

class UtilizadorDao extends UtilizadorModel implements Crud
 {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Utilizador (nomeUtilizador, sobrenomeUtilizador, nomeArtisticoUtilizador, NIFUtilizador, emailUtilizador, telefoneUtilizador, senhaUtilizador, idNacionalidade, dataNascimentoUtilizador, generoUtilizador, idTipoAcesso, idProvincia, idMunicipio, endereco) values ( ?, ?, ?, ?, ?, ?, md5(?), ?, ?, ?, ?, ?, ?, ?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeUtilizador() );
        $stmt->bindValue( 2, $this->getSobrenomeUtilizador() );
        $stmt->bindValue( 3, $this->getNomeArtisticoUtilizador() );
        $stmt->bindValue( 4, $this->getNIFUtilizador() );
        $stmt->bindValue( 5, $this->getEmailUtilizador() );
        $stmt->bindValue( 6, $this->getTelefoneUtilizador() );
        $stmt->bindValue( 7, $this->getSenhaUtilizador() );
        $stmt->bindValue( 8, $this->getNacionalidadeUtilizador() );
        $stmt->bindValue( 9, $this->getDataNascimentoUtilizador() );
        $stmt->bindValue( 10, $this->getGeneroUtilizador() );
        $stmt->bindValue( 11, $this->getIdTipoAcesso() );
        $stmt->bindValue( 12, $this->getIdProvincia() );
        $stmt->bindValue( 13, $this->getIdMunicipio() );
        $stmt->bindValue( 14, $this->getEndereco() );

        $texto = 'Foi realizado um cadastro no sistema, o utilizador chama-se:'.
        $this->getNomeUtilizador().' '.$this->getSobrenomeUtilizador().
        ' e o seu nome artístico é '.$this->getNomeArtisticoUtilizador();
        $notificacao = new NotificacaoDao();
        $notificacao->Notificar( $texto, 4 );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire( 'Sucesso!', 'Cadastro feito com sucesso!', 'success' );
            </script>
            <?php
        } else {

            ?>
            <script>
            Swal.fire( 'Erro!', 'Erro de cadastro!!', 'error' );
            </script>
            <?php
        }

    }

    function Buscar() {
        $con = GetConexao();
        $sql = 'select * from Utilizador;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTotalUtilizadores() {
        $con = GetConexao();
        $sql = 'select count(*) from Utilizador;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from Utilizador 
            left outer join Nacionalidade on Nacionalidade.idNacionalidade = Utilizador.idNacionalidade
            left outer join TipoAcesso on TipoAcesso.idTipoAcesso = Utilizador.idTipoAcesso
            left outer join Provincia on Provincia.idProvincia = Utilizador.idProvincia
            left outer join Municipio on Municipio.idMunicipio = Utilizador.idMunicipio";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idUtilizador ) {
        $con = GetConexao();
        $sql = "select * from Utilizador 
            left outer join TipoAcesso on TipoAcesso.idTipoAcesso = Utilizador.idTipoAcesso
            left outer join Provincia on Provincia.idProvincia = Utilizador.idProvincia
            left outer join Municipio on Municipio.idMunicipio = Utilizador.idMunicipio
            where idUtilizador = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idUtilizador );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarPorLimite( $pagina, $itensPorPagina ) {
        $con = GetConexao();
        $sql = "select * from Utilizador 
            left outer join Nacionalidade on Nacionalidade.idNacionalidade = Utilizador.idNacionalidade
            left outer join TipoAcesso on TipoAcesso.idTipoAcesso = Utilizador.idTipoAcesso
            left outer join Provincia on Provincia.idProvincia = Utilizador.idProvincia
            left outer join Municipio on Municipio.idMunicipio = Utilizador.idMunicipio
            order by idUtilizador desc limit $pagina, $itensPorPagina";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorPalavra( $palavra ) {
        $con = GetConexao();
        $sql = "select * from Utilizador 
            left outer join Nacionalidade on Nacionalidade.idNacionalidade = Utilizador.idNacionalidade
            left outer join TipoAcesso on TipoAcesso.idTipoAcesso = Utilizador.idTipoAcesso
            left outer join Provincia on Provincia.idProvincia = Utilizador.idProvincia
            left outer join Municipio on Municipio.idMunicipio = Utilizador.idMunicipio
            where nomeUtilizador like '$palavra%' ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarLimitado() {
        $con = GetConexao();
        $sql = "select * from Utilizador 
            left outer join Nacionalidade on Nacionalidade.idNacionalidade = Utilizador.idNacionalidade
            left outer join TipoAcesso on TipoAcesso.idTipoAcesso = Utilizador.idTipoAcesso
            left outer join Provincia on Provincia.idProvincia = Utilizador.idProvincia
            left outer join Municipio on Municipio.idMunicipio = Utilizador.idMunicipio
            order by idUtilizador desc limit 10";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = "update Utilizador set 
             `nomeUtilizador` = ?,`sobrenomeUtilizador` = ?,`nomeArtisticoUtilizador` = ?,
             `NIFUtilizador` = ?,`emailUtilizador` = ?,`telefoneUtilizador` = ?,
             `senhaUtilizador` = md5(?),`idNacionalidade` = ?,`dataNascimentoUtilizador` = ?,
             `generoUtilizador` = ?,`idTipoAcesso` = ?,`idProvincia` = ?,
             `idMunicipio` = ?,`endereco` = ?
              where idUtilizador = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeUtilizador() );
        $stmt->bindValue( 2, $this->getSobrenomeUtilizador() );
        $stmt->bindValue( 3, $this->getNomeArtisticoUtilizador() );
        $stmt->bindValue( 4, $this->getNIFUtilizador() );
        $stmt->bindValue( 5, $this->getEmailUtilizador() );
        $stmt->bindValue( 6, $this->getTelefoneUtilizador() );
        $stmt->bindValue( 7, $this->getSenhaUtilizador() );
        $stmt->bindValue( 8, $this->getNacionalidadeUtilizador() );
        $stmt->bindValue( 9, $this->getDataNascimentoUtilizador() );
        $stmt->bindValue( 10, $this->getGeneroUtilizador() );
        $stmt->bindValue( 11, $this->getIdTipoAcesso() );
        $stmt->bindValue( 12, $this->getIdProvincia() );
        $stmt->bindValue( 13, $this->getIdMunicipio() );
        $stmt->bindValue( 14, $this->getEndereco() );
        $stmt->bindValue( 15, $this->getIdUtilizador() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire( 'Sucesso!', 'Actualização feita com sucesso!', 'success' );
            </script>
            <?php
        } else {
            ?>
            <script>
            Swal.fire( 'Erro!', 'Erro ao actualizar!!', 'error' );
            </script>
            <?php
        }
    }

    function Eliminar() {
        $con = GetConexao();
        $sql = 'delete from Utilizador where idUtilizador = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdUtilizador() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire( 'Sucesso!', 'Eliminado com sucesso!', 'success' );
            setTimeout( () => {
                window.location = '/utilizador/Eliminar';
            }
            , 1000 );
            </script>
            <?php
        } else {
            ?>
            <script>
            Swal.fire( 'Erro!', 'Erro ao eliminar!!', 'error' );
            </script>
            <?php
        }
    }

    function LogarEmailSenha( $email, $passe ) {
        $con = GetConexao();
        $sql = "select * from Utilizador
            where emailUtilizador = ? and senhaUtilizador = md5(?);";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $email );
        $stmt->bindValue( 2, $passe );
        $stmt->execute();
        $resultado = $stmt->fetch();

        if ( !empty( $resultado ) ) {
            $this->DadosUtilizador( $resultado );
            $_SESSION[ 'processando' ] = '/painel/Index';
            ?>
            <script>
            window.location = '/painel/Carregando';
            </script>
            <?php
        } else {

            ?>
            <script>
            Swal.fire( 'Utilizador Não Encontrado!', 'Erro ao Logar!!', 'error' );
            </script>
            <?php
        }
    }

    function LogarTelefoneSenha( $telefone, $passe ) {
        $con = GetConexao();
        $sql = "select * from Utilizador
            where telefoneUtilizador = ? and senhaUtilizador = md5(?);";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $telefone );
        $stmt->bindValue( 2, $passe );
        $stmt->execute();
        $resultado = $stmt->fetch();

        if ( !empty( $resultado ) ) {

            $this->DadosUtilizador( $resultado );

            $_SESSION[ 'processando' ] = '/painel/Index';
            ?>
            <script>
            window.location = '/painel/Carregando';
            </script>
            <?php
        } else {

            ?>
            <script>
            Swal.fire( 'Utilizador Não Encontrado!', 'Erro ao Logar!!', 'error' );
            </script>
            <?php
        }

    }

    function DadosUtilizador( $resultado ) {
        session_start();
        $_SESSION[ 'idUtilizador' ] = $resultado[ 'idUtilizador' ];
        $_SESSION[ 'nomeUtilizador' ] = $resultado[ 'nomeUtilizador' ];
        $_SESSION[ 'sobrenomeUtilizador' ] = $resultado[ 'sobrenomeUtilizador' ];
        $_SESSION[ 'nomeArtisticoUtilizador' ] = $resultado[ 'nomeArtisticoUtilizador' ];
        $_SESSION[ 'NIFUtilizador' ] = $resultado[ 'NIFUtilizador' ];
        $_SESSION[ 'emailUtilizador' ] = $resultado[ 'emailUtilizador' ];
        $_SESSION[ 'telefoneUtilizador' ] = $resultado[ 'telefoneUtilizador' ];
        $_SESSION[ 'senhaUtilizador' ] = $resultado[ 'senhaUtilizador' ];
        $_SESSION[ 'nacionalidadeUtilizador' ] = $resultado[ 'nacionalidadeUtilizador' ];
        $_SESSION[ 'dataNascimentoUtilizador' ] = $resultado[ 'dataNascimentoUtilizador' ];
        $_SESSION[ 'generoUtilizador' ] = $resultado[ 'generoUtilizador' ];
        $_SESSION[ 'idTipoAcesso' ] = $resultado[ 'idTipoAcesso' ];
        $_SESSION[ 'descricaoTipoAcesso' ] = $resultado[ 'descricaoTipoAcesso' ];
        $_SESSION[ 'idProvincia' ] = $resultado[ 'idProvincia' ];
        $_SESSION[ 'nomeProvincia' ] = $resultado[ 'nomeProvincia' ];
        $_SESSION[ 'idMunicipio' ] = $resultado[ 'idMunicipio' ];
        $_SESSION[ 'nomeMunicipio' ] = $resultado[ 'nomeMunicipio' ];
        $_SESSION[ 'endereco' ] = $resultado[ 'endereco' ];
    }

}

?>