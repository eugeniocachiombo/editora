<?php
require_once '../app/interface/crud.php';
require_once '../app/models/pagamentoModel.php';

class PagamentoDao extends PagamentoModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Pagamento (idArtista, idUtilizadorGerente, descricaoPagamento, valorPagamento, dataPagamento) values (?, ?, ?, ?, ?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdArtista() );
        $stmt->bindValue( 2, $this->getIdUtilizadorGerente() );
        $stmt->bindValue( 3, $this->getDescricaoPagamento() );
        $stmt->bindValue( 4, $this->getValorPagamento() );
        $stmt->bindValue( 5, $this->getDataPagamento() );

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

    function Buscar() {
        $con = GetConexao();
        $sql = 'select * from Pagamento;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from Pagamento 
            left outer join Artista on Artista.idArtista = Pagamento.idArtista 
            left outer join Utilizador on Utilizador.idUtilizador = Pagamento.idUtilizadorGerente 
            order by idPagamento asc";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idPagamento ) {
        $con = GetConexao();
        $sql = "select * from Pagamento 
            left outer join Artista on Artista.idArtista = Pagamento.idArtista 
            left outer join Utilizador on Utilizador.idUtilizador = Pagamento.idUtilizadorGerente 
            where idPagamento = ? order by nomeArtista asc;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idPagamento );
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
        $sql = "update Pagamento set `idArtista` = ?,`idUtilizadorGerente` = ?,
            `descricaoPagamento` = ?,`valorPagamento` = ?,`dataPagamento` = ?` 
            where idPagamento = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdArtista() );
        $stmt->bindValue( 2, $this->getIdUtilizadorGerente() );
        $stmt->bindValue( 3, $this->getDescricaoPagamento() );
        $stmt->bindValue( 4, $this->getValorPagamento() );
        $stmt->bindValue( 5, $this->getDataPagamento() );
        $stmt->bindValue( 6, $this->getIdPagamento() );

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
        $sql = 'delete from Pagamento where idPagamento = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdPagamento() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/pagamento/Eliminar';
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