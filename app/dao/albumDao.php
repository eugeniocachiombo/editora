<?php
require_once '../app/interface/crud.php';
require_once '../app/models/albumModel.php';

class AlbumDao extends AlbumModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();

        if(empty($this->getIdArtista())){
            $sql = 'insert into Album (nomeAlbum) values(?);';
            $stmt = $con->prepare( $sql );
            $stmt->bindValue( 1, $this->getNomeAlbum() );
        }else{
            $sql = 'insert into Album (nomeAlbum, idArtista) values(?,?);';
            $stmt = $con->prepare( $sql );
            $stmt->bindValue( 1, $this->getNomeAlbum() );
            $stmt->bindValue( 2, $this->getIdArtista() );
        }

        if ( $stmt->execute() ) {
            ?>
<script>
Swal.fire('Sucesso!', 'Cadastro feito com sucesso!', 'success');
</script>
<?php
        } else {
            ?>
<script>
Swal.fire('Erro!', 'Erro de cadastro!!', 'error');
</script>
<?php
        }

    }

    function Buscar() {
        $con = GetConexao();
        $sql = 'select * from Album order by nomeAlbum asc';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorArtista( $idArtista ) {
        $con = GetConexao();
        $sql = "select * from Album
            where idArtista = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idArtista );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from Album 
            left outer join Artista on Artista.idArtista = Album.idArtista
            left outer join Utilizador on Utilizador.idUtilizador = Artista.idUtilizador
            order by nomeAlbum asc
            ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idAlbum ) {
        $con = GetConexao();
        $sql = "select * from Album 
            left outer join Artista on Artista.idArtista = Album.idArtista
            left outer join Utilizador on Utilizador.idUtilizador = Artista.idUtilizador
            where idAlbum = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idAlbum );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarTotal() {
        $con = GetConexao();
        $sql = 'select count(*) from Album;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarPorLimite( $pagina, $itensPorPagina ) {
        $con = GetConexao();
        $sql = "select * from Album 
            left outer join Artista on Artista.idArtista = Album.idArtista
            left outer join Utilizador on Utilizador.idUtilizador = Artista.idUtilizador 
            order by idAlbum desc limit $pagina, $itensPorPagina";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorPalavra( $palavra ) {
        $con = GetConexao();
        $sql = "select * from Album 
            left outer join Artista on Artista.idArtista = Album.idArtista
            left outer join Utilizador on Utilizador.idUtilizador = Artista.idUtilizador 
            where nomeAlbum like '$palavra%' ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarLimitado() {
        $con = GetConexao();
        $sql = "select * from Album 
            left outer join Artista on Artista.idArtista = Album.idArtista
            left outer join Utilizador on Utilizador.idUtilizador = Artista.idUtilizador 
            order by idAlbum desc limit 10";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = 'update Album set nomeAlbum=?, idArtista=? where idAlbum = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeAlbum() );
        $stmt->bindValue( 2, $this->getIdArtista() );
        $stmt->bindValue( 3, $this->getIdAlbum() );

        if ( $stmt->execute() ) {
            ?>
<script>
Swal.fire('Sucesso!', 'Actualização feita com sucesso!', 'success');
</script>
<?php
        } else {
            ?>
<script>
Swal.fire('Erro!', 'Erro ao actualizar!!', 'error');
</script>
<?php
        }
    }

    function Eliminar() {
        $con = GetConexao();
        $sql = 'delete from Album where idAlbum = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdAlbum() );

        if ( $stmt->execute() ) {
            ?>
<script>
Swal.fire('Sucesso!', 'Eliminado com sucesso!', 'success');
setTimeout(() => {
    window.location = '/album/Eliminar';
}, 1000);
</script>
<?php
        } else {
            ?>
<script>
Swal.fire('Erro!', 'Erro ao eliminar!!', 'error');
</script>
<?php
        }
    }
}

?>