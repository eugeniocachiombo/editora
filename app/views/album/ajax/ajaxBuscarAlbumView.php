<?php
require_once "../app/config/db.php"; 
$idAlbum = $_POST['idAlbum'];
$albums = new AlbumDao();
$lista = $albums->BuscarTodosDadosID($idAlbum);
echo json_encode($lista);
?>