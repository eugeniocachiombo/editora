<?php
require_once '../app/interface/crud.php';
require_once '../app/models/cargoArtistaModel.php';

class CargoArtistaDao extends CargoArtistaModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into CargoArtista (descricaoCargoArtista) values (?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getDescricaoCargoArtista() );

        if ( $stmt->execute() ) {
            ?>
                <script>
                    Swal.fire(
                        'Sucesso!',
                        'Cadastro feito com sucesso!',
                        'success'
                    );
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
        $sql = 'select * from CargoArtista;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = 'select * from CargoArtista order by descricaoCargoArtista asc';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idCargoArtista ) {
        $con = GetConexao();
        $sql = "select * from CargoArtista where idCargoArtista = ? 
            order by descricaoCargoArtista asc ";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idCargoArtista );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarTotal() {
        $con = GetConexao();
        $sql = 'select count(*) from CargoArtista;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarPorLimite( $pagina, $itensPorPagina ) {
        $con = GetConexao();
        $sql = "select * from CargoArtista 
            order by descricaoCargoArtista asc limit $pagina, $itensPorPagina";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorPalavra( $palavra ) {
        $con = GetConexao();
        $sql = "select * from CargoArtista 
            where descricaoCargoArtista like '$palavra%' ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarLimitado() {
        $con = GetConexao();
        $sql = "select * from CargoArtista
            order by descricaoCargoArtista asc limit 10";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = "update CargoArtista 
            set descricaoCargoArtista = ? 
            where idCargoArtista = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getDescricaoCargoArtista() );
        $stmt->bindValue( 2, $this->getIdCargoArtista() );

        if ( $stmt->execute() ) {
            ?>
                <script>
                    Swal.fire(
                        'Sucesso!',
                        'Actualização feita com sucesso!',
                        'success'
                    );
                </script>
            <?php
        } else {
            ?>
                <script>
                    Swal.fire(
                        'Erro!',
                        'Erro ao actualizar!!',
                        'error'
                    );
                </script>
            <?php
        }
    }

    function Eliminar() {
        $con = GetConexao();
        $sql = 'delete from CargoArtista where idCargoArtista = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdCargoArtista() );

        if ( $stmt->execute() ) {
            ?>
                <script>
                    Swal.fire(
                        'Sucesso!',
                        'Eliminado com sucesso!',
                        'success'
                    );
                    setTimeout(() => {
                        window.location = '/CargoArtista/Eliminar';
                    }, 1000);
                </script>
            <?php
        } else {
            ?>
                <script>
                    Swal.fire(
                        'Erro!',
                        'Erro ao eliminar!!',
                        'error'
                    );
                </script>
            <?php
        }
    }
}

?>