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
                    <th> Nome do Artísta </th>
                    <th> Nome do Gerente </th>
                    <th> Descrição do Pagamento </th>
                    <th> Valor do Pagamento </th>
                    <th> Data do Pagamento </th>
                    <th> </th>
                </tr>
            </thead>

            </tbody>
            <?php 
                $pagamentos = new PagamentoDao();
                $lista = $pagamentos->BuscarTodosDados();
                     foreach ($lista as $pagamento) { ?>
            <form action="" method="post">
                <tr class="bg-light text-dark border">
                    <td>
                        <?php echo $pagamento['idPagamento']; ?></td>

                    <td>
                        <?php 
                $artista = new ArtistaDao();
                $listaArtista = $artista->BuscarTodosDadosID($pagamento['idArtista']);
                echo $listaArtista["nomeArtisticoUtilizador"]; ?>
                    </td>

                    <td>
                        <?php
                $utilizador = new UtilizadorDao();
                $listautilizador = $utilizador->BuscarTodosDadosID($pagamento['idUtilizador']); 
                echo $pagamento["nomeUtilizador"]." ".$pagamento["sobrenomeUtilizador"]; ?>
                    </td>

                    <td> <?php echo $pagamento['descricaoPagamento']; ?> </td>
                    <?php   
                  $data = explode("-", $pagamento["dataPagamento"]);
                  $data = $data[2]."/".$data[1]."/".$data[0];
                ?>
                    <td> <?php echo $pagamento["valorPagamento"].",00 KZ"; ?> </td>
                    <td> <?php echo $data; ?> </td>
                    <td>
                        <input onClick="Clique()" class="form-control" type="button" value="Editar">
                    </td>
            </form>
            <?php  } ?>
            </tbody>
        </table>
    </div>

</div>