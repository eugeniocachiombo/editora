<?php 
    // Receber a uri
    require "../app/core/pegarURI.php";
    if(!empty($uri[2])) $pagina = explode("=", $uri[2]);
?>

<div class="container-fluid ">
    <div class="col-12 ">
        <?php require "../app/views/painel/inclusao/menu/telaGrande/menuTelaGrande.php"; ?>
    </div>

    <div class="col d-flex">
        <div class="col-4 d-none d-lg-flex" style="width: 310px;">
            <?php require "../app/views/painel/inclusao/card/card.php"; ?>
        </div>

        <div class="col mt-2 pb-4 d-flex justify-content-center"
            style="display: block; flex-wrap: wrap; background: #57489b;">
            <div class="d-table justify-content-center" style="width: 100%">
                <div class="d-none d-lg-flex" style="min-height: 15vh"></div>

                <div class="col text-center d-table d-md-flex bg-white text-dark"
                    style="border: 5px solid #299;border-radius: 10px; margin-top: 10px; width: 100%">

                    <button id="banda" onClick="Banda()"
                        style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px"
                        class="btn w-50 m-3 border border-warnning p-1" type="button">
                        <i class='fas fa-guitar' style="font-size: 20px"></i> Bandas
                    </button>


                    <button id="cargoArtistaBanda" onClick="CargoArtistaBanda()"
                        style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px"
                        class="btn w-50 m-3 border border-warnning p-1" type="button">
                        <i class='fas fa-star' style="font-size: 20px"></i> Cargo de Artístas na Banda
                    </button>


                </div>

                <!--PARAMETROS DOS BOTÕES-->
                <div class="col pb-4 d-flex justify-content-center" style="background: #57489b;">

                    <div class="d-table justify-content-center" style="width: 100%">

                        <?php 
                            if(!empty($uri[2]) && $pagina[0] != "pagina"){
                                if($uri[2] == "Banda"){
                                    // Banda
                                    require "../app/views/painel/estrutura/bandas/banda/estruturaBanda.php";
                                    
                                }else if($uri[2] == "CargoArtistaBanda"){
                                    // CargoArtistaBanda-->
                                    require "../app/views/painel/estrutura/bandas/cargoArtistaBanda/estruturaCargoArtistaBanda.php";
                                
                                }
                            }else{
                                if(!empty($uri[2])){
                                    $uri = explode("=", $uri[2]);
                                        if($uri[1] == "paginaBandas"){
                                            require "../app/views/painel/estrutura/bandas/recentes/bandasRecentes.php";
                                        }
                                        else if($uri[1] == "paginaCargoArtistaBanda"){
                                            require "../app/views/painel/estrutura/bandas/recentes/cargoArtistaBandaRecentes.php";
                                        }
                                }
                                else{
                                    require "../app/views/painel/estrutura/bandas/recentes/bandasRecentes.php";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--Mostrar e Ocultar menu-->
        <?php require "../app/views/painel/inclusao/menu/inclusao/botaoMostrarMenu.php"; ?>
    </div>
</div>

<script>
var banda = document.querySelector("#banda");
var cargoArtistaBanda = document.querySelector("#cargoArtistaBanda");

function Banda() {
    window.location = "/painel/Bandas/Banda";
}

function CargoArtistaBanda() {
    window.location = "/painel/Bandas/CargoArtistaBanda";
}
</script>