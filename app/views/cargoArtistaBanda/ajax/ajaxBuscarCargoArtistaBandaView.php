<?php
require_once "../app/config/db.php"; 
$idCargoArtistaBanda = $_POST['idCargoArtistaBanda'];
$cargoArtistaBandas = new CargoArtistaBandaDao();
$lista = $cargoArtistaBandas->BuscarTodosDadosID($idCargoArtistaBanda);
echo json_encode($lista);
?>