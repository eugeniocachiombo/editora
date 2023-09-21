<?php
require_once "../app/config/db.php"; 
$idPostagem = $_POST['idPostagem'];
$postagem = new PostagemDao();
$lista = $postagem->BuscarTodosDadosID($idPostagem);
echo json_encode($lista);
?>