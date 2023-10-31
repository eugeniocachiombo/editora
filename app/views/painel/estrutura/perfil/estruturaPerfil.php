<?php 
    // Receber a uri
    $uri = $_SERVER["REQUEST_URI"];
    $uri = explode("/", $uri);
    $uri = array_values(array_filter($uri));
?>

<div class="container-fluid ">
    <div class="col-12 ">
        <?php require "../app/views/painel/inclusao/menu/telaGrande/menuTelaGrande.php"; ?>
    </div>

    <div class="col d-flex">
        <div class="col-4 d-none d-lg-flex" style="width: 310px;">
            <?php require "../app/views/painel/inclusao/card/card.php"; ?>
        </div>

        <div class="col mt-2 d-flex justify-content-center"
            style="display: block; flex-wrap: wrap; background: #57489b; height: auto">

            <div class="d-table justify-content-center" style="width: 100%">
                <div class="d-none d-lg-flex" style="min-height: 17vh"></div>
                <?php 
                    if(!empty($uri[2])){
                        if($uri[2] == "MeusArquivos"){
                            // ARQUIVOS DO UTILIZADOR
                            require_once "../app/views/painel/estrutura/perfil/arquivosUtilizador.php";
                            
                        }else if($uri[2] == "MeusDados"){
                            // DADOS DO UTILIZADOR-->
                            require_once "../app/views/painel/estrutura/perfil/dadosUtilizador.php";
                        }
                    }else{
                        // DADOS DO UTILIZADOR-->
                        require_once "../app/views/painel/estrutura/perfil/dadosUtilizador.php";
                    }
                    ?>
            </div>

        </div>


        <?php require "../app/views/painel/inclusao/menu/inclusao/botaoMostrarMenu.php"; ?>
    </div>
</div>


<div class="modal fade text-dark" id="utilizadorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="utilizadorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="utilizadorModalLabel">Actualizar Dados</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php require "../app/views/utilizador/formulario/formActualizar.php"; ?>
            </div>
        </div>
    </div>
</div>