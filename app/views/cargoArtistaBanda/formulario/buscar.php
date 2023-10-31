<!--CABEÇALHO DA PAGINAÇÃO-->
<?php require "../app/views/cargoArtistaBanda/paginacao/headPaginacao.php"; ?>

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
                <legend class="">Lista de Cargos na Banda</legend>
            </div>

            <div class="col d-md-none d-lg-none d-xl-none">
                <h5>Lista de Cargos na Banda</h5>
            </div>
        </center>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover col-1">
            <thead>
                <tr class="bg-dark text-white border">
                    <th> Id </th>
                    <th> Descrição do Cargo na Banda </th>
                    <th> Banda </th>
                </tr>
            </thead>

            </tbody>
            <?php 
                        $cont = 0;
                        foreach ($lista as $cargoArtistaBanda) { ?>
            <tr class="bg-light text-dark border">
                <td> <?php echo $cargoArtistaBanda['idCargoArtistaBanda']; ?> </td>
                <td> <?php echo $cargoArtistaBanda['descricaoCargoArtistaBanda']; ?> </td>
                <td> <?php echo $cargoArtistaBanda['nomeBanda']; ?> </td>
            </tr>
            <?php $cont++; ?>
            <?php  } ?>
            </tbody>
        </table>
        <?php   
                    if($cont == 0){
                        echo "<h1>Nenhuma informação de momento</h1>";
                    }
                ?>
    </div>

</div>

<!--RODAPÉ DA PAGINAÇÃO-->
<?php require "../app/views/cargoArtistaBanda/paginacao/footerPaginacao.php"; ?>

<!--AJAX PARA BUSCAR AlbunS -->
<script src="/assets/js/cargoArtistaBanda/ajaxPaginacao.js"></script>