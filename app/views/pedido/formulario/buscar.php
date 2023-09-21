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
        <table class="table table-striped table-hover text-center col-1">
            <thead>
                <tr class="bg-dark text-white border">
                    <th> Id </th>
                    <th> Utilizador </th>
                    <th> Título </th>
                    <th> Descrição </th>
                    <th> Cargo </th>
                    <th> </th>
                    <th> </th>
            </thead>

            </tbody>
            <?php 
                $pedidos = new PedidoDao();
                $lista = $pedidos->BuscarTodosDados();
                     foreach ($lista as $pedido) { ?>
            <tr class="bg-light text-dark border">
                <td> <?php echo $pedido['idPedido']; ?> </td>
                <td> <?php echo $pedido['nomeUtilizador']." ".$pedido['sobrenomeUtilizador']; ?> </td>
                <td class="text-success"> <b> <?php echo $pedido['tituloPedido']; ?> </b> </td>
                <td> <?php echo $pedido['descricaoPedido']; ?> </td>
                <td>
                    <?php 
                      $cargos = new CargoArtistaDao(); 
                      $cargo = $cargos->BuscarTodosDadosID($pedido['cargoPedido']);
                      echo $cargo["descricaoCargoArtista"];
                      ?>
                </td>
                <td> <a href="#">Conversar</a> </td>
                <td>
                    <form action="/pedido/Eliminar" method="post">
                        <input class="d-none" type="text" name="idPedido" value="<?php echo $pedido['idPedido']; ?>">
                        <input type="submit" class="form-control" value="Eliminar">
                    </form>
                </td>
            </tr>
            <?php  } ?>
            </tbody>
        </table>
    </div>

</div>