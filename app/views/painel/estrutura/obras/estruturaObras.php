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

                    <button id="album" onClick="Album()"
                        style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px"
                        class="btn w-50 m-3 border border-warnning p-1" type="button">
                        <i class='fas fa-folder-minus' style="font-size: 20px"></i> Álbum
                    </button>


                    <button id="obra" onClick="Obra()"
                        style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px"
                        class="btn w-50 m-3 border border-warnning p-1" type="button">
                        <i class='fas fa-music' style="font-size: 20px"></i> Obra
                    </button>


                    <button id="listaReproducao" onClick="ListaReproducao()"
                        style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px"
                        class="btn w-50 m-3 border border-warnning p-1" type="button">
                        <i class='fas fa-play' style="font-size: 20px"></i> Lista de reprodução
                    </button>


                    <button id="estilo" onClick="Estilo()"
                        style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px"
                        class="btn w-50 m-3 border border-warnning p-1" type="button">
                        <i class='fas fa-drum' style="font-size: 20px"></i> Estilos
                    </button>


                </div>

    
                <div class="col pb-4 d-flex justify-content-center" style="background: #57489b;">

                    <div class="d-table justify-content-center" style="width: 100%">

                        <?php 
                            if(!empty($uri[2]) && $pagina[0] != "pagina"){
                                if($uri[2] == "Album"){
                                    // ALBUM
                                    require "../app/views/painel/estrutura/obras/album/estruturaAlbum.php";
                                    
                                }else if($uri[2] == "Estilo"){
                                    // ESTILO-->
                                    require "../app/views/painel/estrutura/obras/estilo/estruturaEstilo.php";
                                
                                }else if($uri[2] == "ListaReproducao"){
                                    // LISTA DE REPRODUÇÃO-->
                                    require "../app/views/painel/estrutura/obras/listaReproducao/estruturaListaReproducao.php";
                                
                                }else if($uri[2] == "Obra"){
                                    // OBRA-->
                                    require "../app/views/painel/estrutura/obras/obra/estruturaObra.php";
                                }
                            }else{
                                if(!empty($uri[2])){
                                    $uri = explode("=", $uri[2]);
                                        if($uri[1] == "paginaAlbuns"){
                                            require "../app/views/painel/estrutura/obras/recentes/albunsRecentes.php";
                                        }
                                        else if($uri[1] == "paginaObras"){
                                            require "../app/views/painel/estrutura/obras/recentes/obrasRecentes.php";
                                        }
                                        else if($uri[1] == "paginaEstilos"){
                                            require "../app/views/painel/estrutura/obras/recentes/estilosRecentes.php";
                                        }
                                        else if($uri[1] == "paginaListaReproducao"){
                                            require "../app/views/painel/estrutura/obras/recentes/listaReproducaoRecentes.php";
                                        }
                                }
                                else{
                                    require "../app/views/painel/estrutura/obras/recentes/obrasRecentes.php";
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
var album = document.querySelector("#album");
var estilo = document.querySelector("#estilo");
var listaReproducao = document.querySelector("#listaReproducao");
var obra = document.querySelector("#obra");

function Album() {
    window.location = "/painel/Obras/Album";
}

function Estilo() {
    window.location = "/painel/Obras/Estilo";
}

function ListaReproducao() {
    window.location = "/painel/Obras/ListaReproducao";
}

function Obra() {
    window.location = "/painel/Obras/Obra";
}
</script>