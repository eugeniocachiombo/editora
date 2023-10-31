<?php
require_once '../app/interface/crud.php';
require_once '../app/models/contratoModel.php';

class ContratoDao extends ContratoModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Contrato (idUtilizador, tipoContrato, descricaoContrato, dataInicialContrato, dataFinalContrato, estadoContrato) values (?, ?, ?, ?, ?, ?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdUtilizador() );
        $stmt->bindValue( 2, $this->getTipoContrato() );
        $stmt->bindValue( 3, $this->getDescricaoContrato() );
        $stmt->bindValue( 4, $this->getDataInicialContrato() );
        $stmt->bindValue( 5, $this->getDataFinalContrato() );
        $stmt->bindValue( 6, $this->getEstadoContrato() );

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
        $sql = 'select * from Contrato;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from Contrato 
            left outer join Utilizador on Utilizador.idUtilizador = Contrato.idUtilizador 
            order by nomeUtilizador asc";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idContrato ) {
        $con = GetConexao();
        $sql = "select * from Contrato 
            left outer join Utilizador on Utilizador.idUtilizador = Contrato.idUtilizador
            where idContrato = ? order by nomeUtilizador asc;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idContrato );
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
        $sql = "update Contrato set `idUtilizador` = ?,`tipoContrato` = ?,
            `descricaoContrato` = ?,`dataInicialContrato` = ?,`dataFinalContrato` = ?,`estadoContrato` = ? 
            where idContrato = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdUtilizador() );
        $stmt->bindValue( 2, $this->getTipoContrato() );
        $stmt->bindValue( 3, $this->getDescricaoContrato() );
        $stmt->bindValue( 4, $this->getDataInicialContrato() );
        $stmt->bindValue( 5, $this->getDataFinalContrato() );
        $stmt->bindValue( 6, $this->getEstadoContrato() );
        $stmt->bindValue( 7, $this->getIdContrato() );

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
        $sql = 'delete from Contrato where idContrato = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdContrato() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/contrato/Eliminar';
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