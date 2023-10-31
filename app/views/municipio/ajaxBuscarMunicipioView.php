<?php
require_once "../app/config/db.php"; 
$idMunicipio = $_POST['idMunicipio'];
$municipios = new MunicipioDao();
$lista = $municipios->BuscarTodosDadosID($idMunicipio);
echo json_encode($lista);
?>