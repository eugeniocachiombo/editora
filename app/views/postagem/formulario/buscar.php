<!--MAIN-->
<div class="container-fluild pt-5 pb-5">
    <!--TEXT-->
    <div class="col pb-1 ">
        <center>
            <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block" style="text-align: center;">
                <legend class=""><?php echo $title ?></legend>
            </div>

            <div class="col d-md-none d-lg-none d-xl-none">
                <h5><?php echo $title ?></h5>
            </div>
        </center>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover col-1">
            <thead>
                <tr class="bg-dark text-white border">
                    <th> Id </th>
                    <th> Título da Obra </th>
                    <th> Nome do publicador </th>
                    <th> Data da publicação </th>
            </thead>

            </tbody>
            <?php 
                $postagens = new PostagemDao();
                $lista = $postagens->BuscarTodosDados();
                     foreach ($lista as $postagem) { ?>
            <tr class="bg-light text-dark border">
                <td> <?php echo $postagem['idPostagem']; ?> </td>
                <td> <?php echo $postagem['tituloObra']; ?> </td>
                <td> <?php echo $postagem['nomeArtisticoUtilizador']; ?> </td>
                <?php   
                  $dataPostagem = explode("-", $postagem["dataPostagem"]);
                  $dataPostagem = $dataPostagem[2]."/".$dataPostagem[1]."/".$dataPostagem[0];
                ?>
                <td> <?php echo $dataPostagem; ?> </td>
            </tr>
            <?php  } ?>
            </tbody>
        </table>
    </div>

</div>