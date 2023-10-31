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

                    <button id="artista" onClick="Artista()"
                        style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px"
                        class="btn w-50 m-3 border border-warnning p-1" type="button">
                        <i class='fas fa-users' style="font-size: 20px"></i> Artísta
                    </button>


                    <button id="cargoArtista" onClick="CargoArtista()"
                        style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px"
                        class="btn w-50 m-3 border border-warnning p-1" type="button">
                        <i class='fas fa-star' style="font-size: 20px"></i> Cargo de Artista
                    </button>


                </div>


                <div class="col pb-4 d-flex justify-content-center" style="background: #57489b;">

                    <div class="d-table justify-content-center" style="width: 100%">

                        <?php 
                            if(!empty($uri[2]) && $pagina[0] != "pagina"){
                                if($uri[2] == "Artista"){
                                    // Artista
                                    require "../app/views/painel/estrutura/artistas/artista/estruturaArtista.php";
                                    
                                }else if($uri[2] == "CargoArtista"){
                                    // CargoArtista-->
                                    require "../app/views/painel/estrutura/artistas/cargoArtista/estruturaCargoArtista.php";
                                
                                }
                            }else{
                                if(!empty($uri[2])){
                                    $uri = explode("=", $uri[2]);
                                        if($uri[1] == "paginaArtistas"){
                                            require "../app/views/painel/estrutura/artistas/recentes/artistasRecentes.php";
                                        }
                                        else if($uri[1] == "paginaCargoArtista"){
                                            require "../app/views/painel/estrutura/artistas/recentes/cargoArtistaRecentes.php";
                                        }
                                }
                                else{
                                    require "../app/views/painel/estrutura/artistas/recentes/artistasRecentes.php";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <?php require "../app/views/painel/inclusao/menu/inclusao/botaoMostrarMenu.php"; ?>
    </div>
</div>

<script>
var artista = document.querySelector("#artista");
var cargoArtista = document.querySelector("#cargoArtista");

function Artista() {
    window.location = "/painel/Artistas/Artista";
}

function CargoArtista() {
    window.location = "/painel/Artistas/CargoArtista";
}
</script>