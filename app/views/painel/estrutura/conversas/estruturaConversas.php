<div class="container-fluid ">
    <div class="col-12 ">
        <?php require "../app/views/painel/inclusao/menu/telaGrande/menuTelaGrande.php"; ?>
    </div>

    <div class="col d-flex">
        <div class="col-4 d-none d-lg-flex" style="width: 310px;">
            <?php require "../app/views/painel/inclusao/card/card.php"; ?>
        </div>

        <div class="col d-flex justify-content-center align-items-center" style="display: block; flex-wrap: wrap; background: #57489b; height: auto">
            <div class="" style="width: 100%;">

            <div class="d-none d-lg-flex" style="min-height: 17vh"></div>
                    <?php 
                        require "../app/views/chat/indexView.php";
                    ?>
            </div>
        </div>

         <?php require "../app/views/painel/inclusao/menu/inclusao/botaoMostrarMenu.php"; ?>
    </div>
</div>



