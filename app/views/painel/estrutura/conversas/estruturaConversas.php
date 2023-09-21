
<div class="container-fluid " style="">
    <!--BARRA DE MENU-->
    <?php require "../app/views/painel/inclusao/menu/telaGrande/menuTelaGrande.php"; ?>

    <!--PAINEL-->
    <div class="row " style="">
        <!--Card-->
        <?php require "../app/views/painel/inclusao/card/card.php"; ?>

        <!--Tela de exibição-->
        <div class="col bg-white d-flex justify-content-center align-items-center" style="display: block; flex-wrap: wrap; background: #57489b; height: auto">
            
            <div class="" style="width: 100%;">
                    <?php 
                       require "../app/views/chat/formulario/formConversa.php";
                    ?>
            </div>
            
        </div>

         <!--Mostrar e Ocultar menu-->
         <?php require "../app/views/painel/inclusao/menu/inclusao/botaoMostrarMenu.php"; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade text-dark" id="utilizadorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="utilizadorModalLabel" aria-hidden="true">
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


