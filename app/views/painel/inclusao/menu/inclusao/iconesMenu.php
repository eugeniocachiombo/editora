<div class="col text-center d-flex justify-content-center align-items-center">

    <?php if($_SESSION["idTipoAcesso"] == 4){ ?>
        <!--ICONE DE PEDIDOS-->
            <div class="col" id="nota">
                <a href="">
                <i class='fas fa-envelope' style='font-size:40px;color:white'></i>
                        <?php    
                        $totalPedidos = new PedidoDao();
                        $total = $totalPedidos->BuscarTotal(); 
                        ?>
                        <?php if(!empty($total["count(*)"])){ ?>
                            <span class="badge text-dark" style="background: white">
                                    <?php echo $total["count(*)"]; ?>
                            </span>
                        <?php  } ?>
                </a>
            </div> <hr class="d-md-none">
    <?php } ?>


        
        <!--ICONE DE BALÃO DE CHAT-->
            <div class="col" id="balaochat">
            <a href="">
            <i class='fas fa-comment-dots fa-beat' style='font-size:40px;color:white'></i>
                        <?php    
                        $totalChat = new ChatDao();
                        $total = $totalChat->BuscarTotal($_SESSION["idTipoAcesso"], $_SESSION["idTipoAcesso"]); 
                        ?>
                        <?php if(!empty($total["count(*)"])){ ?>
                            <span class="badge text-dark" style="background: white">
                                    <?php echo $total["count(*)"]; ?>
                            </span>
                        <?php  } ?>
            </a>
            </div> <hr class="d-md-none">



        <!--ICONE DE NOTIFICAÇÃO-->
            <div class="col " id="notificacao">
            <a href="">
            <i class='fas fa-bell' style='font-size:40px;color:white'></i>
                        <?php    
                        $totalNotificacao = new NotificacaoDao();
                        $total = $totalNotificacao->BuscarTotal($_SESSION["idTipoAcesso"]); 
                        ?>
                        <?php  if(!empty($total["count(*)"])){ ?>
                            <span class="badge text-dark" style="background: white">
                                    <?php echo $total["count(*)"]; ?>
                            </span>
                        <?php  } ?>
            </a>
            </div> <hr class="d-md-none">
        
</div>