<?php
require_once '../app/interface/crud.php';
require_once '../app/models/notificacaoModel.php';

class NotificacaoDao extends NotificacaoModel implements Crud {

    function Notificar( $texto, $acesso ) {
        $con = GetConexao();
        $sql = 'insert into Notificacao (textoNotificacao, idTipoAcesso) values(?,?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $texto );
        $stmt->bindValue( 2, $acesso );

        if ( $stmt->execute() ) {

            ?>
            <script>
            Swal.fire( 'Sucesso!', 'Cadastro feito com sucesso!', 'success' );
            </script>
            <?php
        } else {
            ?>
            <script>
            Swal.fire(
                'Erro!',
                'Erro de cadastro!!',
                'error'
            );
            </script>
            <?php
        }

    }

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Notificacao (textoNotificacao, idTipoAcesso) values(?,?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getTextoNotificacao() );
        $stmt->bindValue( 2, $this->getIdTipoAcesso() );

        if ( $stmt->execute() ) {

            ?>
            <script>
            Swal.fire( 'Sucesso!', 'Cadastro feito com sucesso!', 'success' );
            </script>
            <?php
        } else {
            ?>
            <script>
            Swal.fire(
                'Erro!',
                'Erro de cadastro!!',
                'error'
            );
            </script>
            <?php
        }

    }

    function Buscar() {
        $con = GetConexao();
        $sql = 'select * from Notificacao order by textoNotificacao asc';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorTipoAcesso( $idTipoAcesso ) {
        $con = GetConexao();
        $sql = "select * from Notificacao
            where idTipoAcesso = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idTipoAcesso );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from Notificacao 
            left outer join TipoAcesso 
            on TipoAcesso.idTipoAcesso = Notificacao.idTipoAcesso
            order by textoTipoAcesso asc";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTotal( $idUtilizador ) {
        $con = GetConexao();
        $sql = "select count(*) from Notificacao
            where idUtilizador = ?
            ;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idUtilizador );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarTodosDadosID( $idNotificacao ) {
        $con = GetConexao();
        $sql = "select * from Notificacao 
            left outer join TipoAcesso on TipoAcesso.idTipoAcesso = Notificacao.idTipoAcesso
            where idNotificacao = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idNotificacao );
        $stmt->execute();
        return $stmt->fetch();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = 'update Notificacao set textoNotificacao=?, idTipoAcesso=? where idNotificacao = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getTextoNotificacao() );
        $stmt->bindValue( 2, $this->getIdTipoAcesso() );
        $stmt->bindValue( 3, $this->getIdNotificacao() );

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
        $sql = 'delete from Notificacao where idNotificacao = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdNotificacao() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/notificacao/Eliminar';
            }
            , 1000 );
            </script>
            <?php
        } else {
            ?>
            <script>
            Swal.fire(
                'Erro!',
                'Erro ao eliminar!!',
                'error'
            )
            </script>
            <?php
        }
    }
}

?>