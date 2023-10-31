<?php if($totalPaginas > 1){ ?>

<!--PAGINAÇÃO PARA TELAS GRANDES -->
<div class="row d-none d-md-block">
    <div class="col d-flex justify-content-center">
        <nav aria-label="Page navigation example ">
            <ul class="pagination  pt-5">

                <!--Voltar -->
                <?php if($totalPaginas > 1 && $paginaActual > 1){ ?>
                <li class="page-item"><a class="page-link"
                        href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".$voltar; ?>">Voltar</a></li>
                <?php } ?>

                <!-- Paginamento -->
                <?php if($paginaActual > 1 && $totalPaginas > 1){ ?>
                <a onClick="Hover()" class="link page-link"
                    href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".($paginaActual-1); ?>">
                    <li><?php echo ($paginaActual-1); ?></li>
                </a>
                <?php } ?>

                <a onClick="Hover()" class="link page-link"
                    href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".$paginaActual; ?>"
                    <?php if($paginaActual) echo "style='background: #299; color: white'"?>>
                    <li><?php echo $paginaActual; ?></li>
                </a>

                <?php if($totalPaginas > 1 && $paginaActual < $totalPaginas){ ?>
                <a onClick="Hover()" class="link page-link"
                    href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".($paginaActual+1); ?>">
                    <li><?php echo ($paginaActual+1); ?></li>
                </a>
                <?php } ?>

                <?php if($paginaActual - 1 == 0 && $totalPaginas > 2){ ?>
                <a onClick="Hover()" class="link page-link"
                    href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".($paginaActual+2); ?>">
                    <li><?php echo ($paginaActual+2); ?></li>
                </a>
                <?php } ?>

                <!--Avançar -->
                <?php if($totalPaginas > $paginaActual){ ?>
                <li class="page-item"><a class="page-link"
                        href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".$avancar; ?>">Avançar</a></li>
                <?php } ?>

            </ul>
        </nav>
    </div>
</div>

<!--PAGINAÇÃO PARA TELAS PEQUENAS -->
<div class="row d-block d-md-none">
    <div class="col d-flex justify-content-center">
        <nav aria-label="Page navigation example ">
            <ul class="pagination pagination-sm pt-5">
                <!--Voltar -->
                <?php if($totalPaginas > 1 && $paginaActual > 1){ ?>
                <li class="page-item"><a class="page-link"
                        href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".$voltar; ?>">Voltar</a></li>
                <?php } ?>

                <!-- Paginamento -->
                <?php if($paginaActual > 1 && $totalPaginas > 1){ ?>
                <a onClick="Hover()" class="link page-link"
                    href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".($paginaActual-1); ?>">
                    <li><?php echo ($paginaActual-1); ?></li>
                </a>
                <?php } ?>

                <a onClick="Hover()" class="link page-link"
                    href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".$paginaActual; ?>"
                    <?php if($paginaActual) echo "style='background: #299; color: white'"?>>
                    <li><?php echo $paginaActual; ?></li>
                </a>

                <?php if($totalPaginas > 1 && $paginaActual < $totalPaginas){ ?>
                <a onClick="Hover()" class="link page-link"
                    href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".($paginaActual+1); ?>">
                    <li><?php echo ($paginaActual+1); ?></li>
                </a>
                <?php } ?>

                <?php if($paginaActual - 1 == 0 && $totalPaginas > 2){ ?>
                <a onClick="Hover()" class="link page-link"
                    href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".($paginaActual+2); ?>">
                    <li><?php echo ($paginaActual+2); ?></li>
                </a>
                <?php } ?>

                <!--Avançar -->
                <?php if($totalPaginas > $paginaActual){ ?>
                <li class="page-item"><a class="page-link"
                        href="<?php echo "/painel/Artistas/pagina=paginaCargoArtista=".$avancar; ?>">Avançar</a></li>
                <?php } ?>

            </ul>
        </nav>
    </div>
</div>
<?php } ?>