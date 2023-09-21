<div class="container-fluid " style="">
    <!--BARRA DE MENU-->
    <?php require "../app/views/painel/inclusao/menu/telaGrande/menuTelaGrande.php"; ?>

    <!--PAINEL-->
    <div class="row " style="">
        <!--Card-->
        <?php require "../app/views/painel/inclusao/card/card.php"; ?>
        
        <!--Tela de exibição-->
        <div class="col bg-white text-dark pb-4" style="display: block; flex-wrap: wrap;background: #57489b;height: auto">
            <center>
                <!--Linha de classificação-->
                <div class="row d-table d-md-flex m-2">

                        <div class="col border m-1" style="height: 5vh;">
                            <b>Total de Obras</b> <span class="badge text-dark">56</span>
                        </div>

                        <div class="col border m-1" style="height: 5vh;">
                            <b>Total de cantores</b> <span>56</span>
                        </div class="col">


                        <div class="col border m-1" style="height: 5vh;">
                            <b>Total de álbuns</b> <span>56</span>
                        </div>

                        <div class="col border m-1" style="height: 5vh;">
                            <b>Total de Playlist</b> <span>56</span>
                        </div>

                </div>

                <!--Linha de cantores com mais músicas-->
                <div class="row d-table d-md-flex pt-2 ">
                    <div class="col border m-1" style="height: 30vh">
                        <b>Artísta com mais Obras</b> <br>
                        foto <br>
                        nome <br>
                        musica <br>

                    </div>

                    <div class="col border m-1" style="height: 30vh">
                        <b>Obras mais reproduzidas do Artísta</b> 
                    </div>

                </div>

                <!--Linha de músicas novas-->
                <div class="row d-table d-md-flex pt-2">
                    <div class="col border" style="height: 30vh">
                        <b>Músicas novas</b> 
                        <p>Detalhes sobre a músicas e os cantores</p>
                    </div>
                </div>

                <!--Eventos da empresa-->
                <div class="row d-table d-md-flex pt-2">
                    <div class="col border m-1" style="height: 30vh">
                        <b>Eventos da empresa</b> 
                    </div>

                    <div class="col border m-1" style="height: 30vh">
                        <b>Eventos do cantor</b> 
                    </div>
                </div>
            </center>
        </div>

        <!--Mostrar e Ocultar menu-->
        <?php require "../app/views/painel/inclusao/menu/inclusao/botaoMostrarMenu.php"; ?>
    </div>

    
</div>


