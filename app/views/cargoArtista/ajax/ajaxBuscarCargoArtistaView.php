<?php
require_once "../app/config/db.php"; 
$idCargoArtista = $_POST['idCargoArtista'];
$cargoArtistas = new CargoArtistaDao();
$lista = $cargoArtistas->BuscarTodosDadosID($idCargoArtista);
echo json_encode($lista);
?>