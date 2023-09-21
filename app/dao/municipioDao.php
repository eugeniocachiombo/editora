<?php
require_once '../app/interface/crud.php';
require_once '../app/models/municipioModel.php';

class MunicipioDao extends MunicipioModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Municipio (nomeMunicipio, idProvincia) values(?,?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeMunicipio() );
        $stmt->bindValue( 2, $this->getIdProvincia() );

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
        $sql = 'select * from Municipio order by nomeMunicipio asc';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorProvincia( $idProvincia ) {
        $con = GetConexao();
        $sql = "select * from Municipio
            where idProvincia = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idProvincia );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from Municipio 
            left outer join Provincia 
            on Provincia.idProvincia = Municipio.idProvincia
            order by nomeProvincia asc
            ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idMunicipio ) {
        $con = GetConexao();
        $sql = "select * from Municipio 
            left outer join Provincia on Provincia.idProvincia = Municipio.idProvincia
            where idMunicipio = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idMunicipio );
        $stmt->execute();
        return $stmt->fetch();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = 'update Municipio set nomeMunicipio=?, idProvincia=? where idMunicipio = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeMunicipio() );
        $stmt->bindValue( 2, $this->getIdProvincia() );
        $stmt->bindValue( 3, $this->getIdMunicipio() );

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
        $sql = 'delete from Municipio where idMunicipio = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdMunicipio() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/municipio/Eliminar';
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