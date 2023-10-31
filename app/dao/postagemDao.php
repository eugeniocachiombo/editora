<?php
require_once '../app/interface/crud.php';
require_once '../app/models/PostagemModel.php';

class PostagemDao extends PostagemModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Postagem (idObra, idUtilizadorPublicador, dataPostagem) values( ?, ?, ?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getidObra() );
        $stmt->bindValue( 2, $this->getIdUtilizadorPublicador() );
        $stmt->bindValue( 3, $this->getDataPostagem() );

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
        $sql = 'select * from Postagem;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from Postagem 
            left outer join Obra on Obra.idObra = Postagem.idObra
            left outer join Utilizador on Utilizador.idUtilizador = Postagem.idUtilizadorPublicador
            ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idPostagem ) {
        $con = GetConexao();
        $sql = "select * from Postagem 
            left outer join Obra on Obra.idObra = Postagem.idObra
            left outer join Utilizador on Utilizador.idUtilizador = Postagem.idUtilizadorPublicador
            where idPostagem = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idPostagem );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarPorLimite( $pagina, $itensPorPagina ) {
        $con = GetConexao();
        $sql = "select * from Postagem 
            left outer join Obra on Obra.idObra = Postagem.idObra
            left outer join Utilizador on Utilizador.idUtilizador = Postagem.idUtilizadorPublicador
            order by idPostagem desc limit $pagina, $itensPorPagina";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorPalavra( $palavra ) {
        $con = GetConexao();
        $sql = "select * from Postagem 
            left outer join Obra on Obra.idObra = Postagem.idObra
            left outer join Utilizador on Utilizador.idUtilizador = Postagem.idUtilizadorPublicador
            where nomeAlbum like '$palavra%' ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarLimitado() {
        $con = GetConexao();
        $sql = "select * from Postagem 
            left outer join Obra on Obra.idObra = Postagem.idObra
            left outer join Utilizador on Utilizador.idUtilizador = Postagem.idUtilizadorPublicador
            order by idPostagem desc limit 10";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = "update Postagem 
             set 
            `idObra` = ?,
            `idUtilizadorPublicador` = ?
            where idPostagem = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getidObra() );
        $stmt->bindValue( 2, $this->getIdUtilizadorPublicador() );
        $stmt->bindValue( 3, $this->getIdPostagem() );

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
        $sql = 'delete from Postagem where idPostagem = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdPostagem() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/Postagem/Eliminar';
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