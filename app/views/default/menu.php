<!--Menu-->
<div class="container-fluid">
    <!--Abrir somente em telas pequenas-->
    <div class="row-1 d-block d-md-none d-lg-none d-xl-none pt-2" style="margin-bottom: -5px;">
        <div id="palavraMenu" class="menuFlex" style="display: flex; justify-content: center; align-items: center;">
            <div class="col-1 ">
                <p align="center">Menu</p>
            </div>

            <div class="col" style="text-align: right; ">
                <p style="text-align: right; cursor: pointer;">
                    <img style="background: #57489b;" id="iconeMenu" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasTop" style="border: black 6px solid;" class="img-fluid"
                        src="/assets/img/icons/menu.png" width="10%">
                </p>

                <!--OFF CANVAS-->
                <div class="offcanvas offcanvas-start text-white" style="background: #393064; width: 250px;"
                    id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasTopLabel"><b>Menu</b></h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"><b>X</b></button>
                    </div>
                    <div class="offcanvas-body text-primary">
                        <ul type="none" style="display: block; text-align: left;">
                            <li><a class="text-decoration-none text-white" href="/inicio/index"><b>Página
                                        inicial</b></a></li>
                            <li><a class="text-decoration-none text-white" href=""><b>Músicas</b></a></li>
                            <li><a class="text-decoration-none text-white" href=""><b>Eventos</b></a></li>
                        </ul>
                        <img src="/assets/img/icons/music.png" alt="Perfil" width="100%">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Abrir somente em telas maiores-->
    <div class="row-1 d-none d-md-flex pt-2" style="margin-bottom: -5px;">
        <div class="col-1 ">
            <p align="center">Menu</p>
        </div>

        <div class="col" style="text-align: right; margin-bottom: -10px;">
            <ul type="none" style="display: inline-flex;">
                <li><a class="text-decoration-none text-white" href="/inicio/index"><b>Página inicial</b></a></li>
                <li><a class="text-decoration-none text-white" href=""><b>Músicas</b></a></li>
                <li><a class="text-decoration-none text-white" href=""><b>Eventos</b></a></li>
            </ul>
        </div>
    </div>

</div>