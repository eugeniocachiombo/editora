<!--CABEÇALHO DA PAGINAÇÃO-->
<?php require "../app/views/cargoArtista/paginacao/headPaginacao.php"; ?>

<!--CAMPO DE PESQUISA-->
<?php require "../app/views/default/campoPesquisaPaginacao.php"; ?>

<!------------------------------------------------------------------->

<!--MAIN-->
<div class="container-fluild pt-5 pb-5">
    <!--TEXT-->
    <div class="col pb-1 ">
        <center>
            <div>
                <i class='fas fa-star' style="font-size: 100px"></i>
            </div>

            <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block" style="text-align: center;">
                <legend class="">Cargo de Artístas</legend>
            </div>

            <div class="col d-md-none d-lg-none d-xl-none">
                <h5>Cargo de Artístas</h5>
            </div>
        </center>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover col-1">
            <thead>
                <tr class="bg-dark text-white border">
                    <th> Id </th>
                    <th> Cargo </th>
                </tr>
            </thead>

            </tbody>
            <?php 
                    $cont = 0;
                        foreach ($lista as $artista) { ?>
            <tr class="bg-light text-dark border">
                <td> <?php echo $artista['idCargoArtista']; ?> </td>
                <td> <?php echo $artista['descricaoCargoArtista']; ?> </td>
            </tr>
            <?php       $cont++; 
                        } ?>
            </tbody>
            <?php   
                        if($cont == 0){
                            echo "<h1>Nenhuma informação de momento</h1>";
                        }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!------------------------------------------------------------------->

<!--RODAPÉ DA PAGINAÇÃO-->
<?php require "../app/views/cargoArtista/paginacao/footerPaginacao.php"; ?>

<!--AJAX PARA BUSCAR AlbunS -->
<script src="/assets/js/cargoArtista/ajaxPaginacao.js"></script>