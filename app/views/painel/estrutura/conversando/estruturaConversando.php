<div class="container-fluid " style="">
    <!--BARRA DE MENU-->
    <?php require "../app/views/painel/inclusao/menu/telaGrande/menuTelaGrande.php"; ?>

    <!--PAINEL-->
    <div class="row " style="">
        <!--Card-->
        <?php require "../app/views/painel/inclusao/card/card.php"; ?>

        <!--Tela de exibição-->
        <div class="col d-flex justify-content-center align-items-center" style="display: block; flex-wrap: wrap; background: #57489b; height: auto">
            
            <div class="" style="width: 100%;">
                    <?php 

                        require "../app/views/chat/conversandoView.php";
                       
                    ?>
            </div>
            
        </div>

         <!--Mostrar e Ocultar menu-->
         <?php require "../app/views/painel/inclusao/menu/inclusao/botaoMostrarMenu.php"; ?>
    </div>
</div>



