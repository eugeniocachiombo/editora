<?php
require_once '../app/interface/crud.php';
require_once '../app/models/chatModel.php';

class ChatDao extends ChatModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Chat (idUtilizadorEmissor, idUtilizadorReceptor, textoChat, arquivoChat) values( ?, ?, ?, ?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getidUtilizadorEmissor() );
        $stmt->bindValue( 2, $this->getidUtilizadorReceptor() );
        $stmt->bindValue( 3, openssl_encrypt( $this->gettextoChat(), 'aes-256-cbc', '1', 0 ) );
        $stmt->bindValue( 4, $this->getarquivoChat() );

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
        $sql = 'select * from Chat;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarConversaUtilizador( $idUtilizador ) {
        $con = GetConexao();
        $sql = "select * from Chat
            where idUtilizadorEmissor = ? or  idUtilizadorReceptor = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idUtilizador );
        $stmt->bindValue( 2, $idUtilizador );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarUltimaMensagem( $idUtilizadorEmissor, $idUtilizadorReceptor ) {
        $con = GetConexao();
        $sql = "select * from Chat
            where idUtilizadorEmissor = ? and  idUtilizadorReceptor = ?
            or idUtilizadorEmissor = ? and  idUtilizadorReceptor = ?
            order by idChat desc";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idUtilizadorEmissor );
        $stmt->bindValue( 2, $idUtilizadorReceptor );
        $stmt->bindValue( 3, $idUtilizadorReceptor );
        $stmt->bindValue( 4, $idUtilizadorEmissor );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarTotal( $idUtilizadorEmissor, $idUtilizadorReceptor ) {
        $con = GetConexao();
        $sql = "select count(*) from Chat
            where idUtilizadorEmissor = ? and  idUtilizadorReceptor = ?
            or idUtilizadorEmissor = ? and  idUtilizadorReceptor = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idUtilizadorEmissor );
        $stmt->bindValue( 2, $idUtilizadorReceptor );
        $stmt->bindValue( 3, $idUtilizadorReceptor );
        $stmt->bindValue( 4, $idUtilizadorEmissor );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarPorUtilizadores( $idUtilizadorEmissor, $idUtilizadorReceptor ) {
        $con = GetConexao();
        $sql = "select * from Chat 
            where idUtilizadorEmissor = ? and  idUtilizadorReceptor = ?
            or idUtilizadorEmissor = ? and  idUtilizadorReceptor = ?
            order by idChat desc";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idUtilizadorEmissor );
        $stmt->bindValue( 2, $idUtilizadorReceptor );
        $stmt->bindValue( 3, $idUtilizadorReceptor );
        $stmt->bindValue( 4, $idUtilizadorEmissor );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorLimite( $pagina, $itensPorPagina, $idUtilizadorEmissor, $idUtilizadorReceptor ) {
        $con = GetConexao();
        $sql = "select * from chat 
            where idUtilizadorEmissor = ? and  idUtilizadorReceptor = ?
            or idUtilizadorEmissor = ? and  idUtilizadorReceptor = ? 
            limit $pagina, $itensPorPagina";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idUtilizadorEmissor );
        $stmt->bindValue( 2, $idUtilizadorReceptor );
        $stmt->bindValue( 3, $idUtilizadorReceptor );
        $stmt->bindValue( 4, $idUtilizadorEmissor );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarLimitado( $idUtilizadorEmissor, $idUtilizadorReceptor ) {
        $con = GetConexao();
        $sql = "select * from Chat 
            where idUtilizadorEmissor = ? and  idUtilizadorReceptor = ?
            or idUtilizadorEmissor = ? and  idUtilizadorReceptor = ?
            limit 6";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idUtilizadorEmissor );
        $stmt->bindValue( 2, $idUtilizadorReceptor );
        $stmt->bindValue( 3, $idUtilizadorReceptor );
        $stmt->bindValue( 4, $idUtilizadorEmissor );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = "update Chat 
             set 
            `idUtilizadorEmissor` = ?,
            `idUtilizadorReceptor` = ?,
            `textoChat` = ?,
            `arquivoChat` = ?
            where idChat = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getidUtilizadorEmissor() );
        $stmt->bindValue( 2, $this->getidUtilizadorReceptor() );
        $stmt->bindValue( 3, $this->gettextoChat() );
        $stmt->bindValue( 4, $this->getarquivoChat() );
        $stmt->bindValue( 5, $this->getIdChat() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Actualização feita com sucesso!',
                'success'
            )
            </script>
            <?php
        } else {
            ?>
            <script>
            Swal.fire(
                'Erro!',
                'Erro ao actualizar!!',
                'error'
            )
            </script>
            <?php
        }
    }

    function Eliminar() {
        $con = GetConexao();
        $sql = 'delete from Chat where idChat = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdChat() );

        echo $this->getIdChat();

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire( 'Sucesso!', 'Eliminado com sucesso!', 'success' );
            setTimeout( () => {
                window.location = '/chat/Eliminar';
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
}

?>