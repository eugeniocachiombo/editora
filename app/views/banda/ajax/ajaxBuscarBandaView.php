<?php
require_once "../app/config/db.php"; 
$idBanda = $_POST['idBanda'];
$bandas = new BandaDao();
$lista = $bandas->BuscarTodosDadosID($idBanda);
echo json_encode($lista);
?>