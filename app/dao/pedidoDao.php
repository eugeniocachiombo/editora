<?php
require_once '../app/interface/crud.php';
require_once '../app/models/pedidoModel.php';

class PedidoDao extends PedidoModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Pedido (tituloPedido, descricaoPedido, cargoPedido, idUtilizador) values( ?, ?, ?, ?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->gettituloPedido() );
        $stmt->bindValue( 2, $this->getdescricaoPedido() );
        $stmt->bindValue( 3, $this->getcargoPedido() );
        $stmt->bindValue( 4, $this->getIdUtilizador() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Cadastro feito com sucesso!',
                'success'
            )
            </script>
            <?php
        } else {
            ?>
            <script>
            Swal.fire(
                'Erro!',
                'Erro de cadastro!!',
                'error'
            )
            </script>
            <?php
        }

    }

    function BuscarTotal() {
        $con = GetConexao();
        $sql = 'select count(*) from Pedido;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetch();
    }

    function Buscar() {
        $con = GetConexao();
        $sql = 'select * from Pedido;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from Pedido 
            left outer join Utilizador on Utilizador.idUtilizador = Pedido.idUtilizador
            ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idPedido ) {
        $con = GetConexao();
        $sql = "select * from Pedido 
            left outer join Utilizador on Utilizador.idUtilizador = Pedido.idUtilizador
            where idPedido = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idPedido );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarPorLimite() {
    }

    function BuscarPorPalavra() {
    }

    function BuscarLimitado() {
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = "update Pedido 
             set 
            `tituloPedido` = ?,
            `descricaoPedido` = ?,
            `cargoPedido` = ?,
            `idUtilizador` = ?
            where idPedido = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->gettituloPedido() );
        $stmt->bindValue( 2, $this->getdescricaoPedido() );
        $stmt->bindValue( 3, $this->getcargoPedido() );
        $stmt->bindValue( 4, $this->getIdUtilizador() );
        $stmt->bindValue( 5, $this->getIdPedido() );

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
        $sql = 'delete from Pedido where idPedido = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdPedido() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/pedido/Buscar';
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