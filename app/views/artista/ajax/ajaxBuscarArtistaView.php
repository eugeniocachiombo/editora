<?php
require_once "../app/config/db.php"; 
$idArtista = $_POST['idArtista'];
$artista = new ArtistaDao();
$lista = $artista->BuscarTodosDadosID($idArtista);
echo json_encode($lista);
?>