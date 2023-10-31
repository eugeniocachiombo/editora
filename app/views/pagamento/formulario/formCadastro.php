<!--MAIN-->
<form action="/pagamento/Cadastrar" method="post" class="needs-validation" novalidate>

    <div class="container-fluid d-table d-md-flex justify-content-center align-items-center pt-5"
        style="min-height: 315px;">
        <div class="row d-block form-group" style="width: 100%; ">

            <!--COLEÇÃO PRINCIPAL 1-->
            <div class="col text-center" style="height: auto">
                <!--ICONE Pagamento-->
                <div class="col">
                    <center>
                        <div class="col-8 pb-1" style="text-align: center;">
                            <img class="img-fluid" src="/assets/img/icons/user33.png" alt="Perfil" width="17%">
                        </div>
                    </center>
                </div>

                <!--TEXT-->
                <div class="col pb-1 ">
                    <center>
                        <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block"
                            style="text-align: center;">
                            <legend class=""><?php echo $title ?></legend>
                        </div>

                        <div class="col d-md-none d-lg-none d-xl-none">
                            <h5><?php echo $title ?></h5>
                        </div>
                    </center>
                </div>
            </div>

            <!--COLEÇÃO PRINCIPAL 2-->
            <div class="col text-center" style="height: auto">

                <!--COLEÇÃO CAMPOS DO FORMULARIO-->
                <div class="row d-block d-sm-block d-lg-flex d-xl-flex text-center">
                    <!--CAMPOS 1-->
                    <div class="col text-center">
                        <!--FORM IdArtista-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="idArtista" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Artísta:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="idArtista" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Artísta:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">

                                    <select name="txtIdArtista" id="txtIdArtista" class="form-control custom-select"
                                        required>
                                        <option value="">Selecione</option>
                                        <?php 
                                        $artistas = new ArtistaDao();
                                        $lista = $artistas->BuscarTodosDados();
                                            foreach ($lista as $artista) { ?>
                                        <option value="<?php echo $artista["idArtista"];?>">
                                            <?php echo $artista["nomeArtisticoUtilizador"]; ?>
                                        </option>
                                        <?php  } ?>

                                    </select>

                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Selecione o artísta
                                    </div>
                                </div>

                            </center>
                        </div>

                        <!--FORM Gerente-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="IdGerente" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Gerente:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="IdGerente" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Gerente:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">

                                    <select name="txtIdUtilizadorGerente" id="txtIdUtilizadorGerente"
                                        class="form-control custom-select" required>
                                        <option value="">Selecione</option>
                                        <?php 
                                        $utilizadores = new UtilizadorDao();
                                        $lista = $utilizadores->BuscarTodosDados();
                                            foreach ($lista as $utilizador) { ?>
                                        <option value="<?php echo $utilizador["idUtilizador"];?>">
                                            <?php echo $utilizador["nomeUtilizador"]." ".$utilizador["sobrenomeUtilizador"]; ?>
                                        </option>
                                        <?php  } ?>
                                    </select>

                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Selecione o utilizador
                                    </div>
                                </div>

                            </center>
                        </div>
                    </div>

                    <!--CAMPOS 2-->
                    <div class="col text-center">
                        <!--FORM DESCRIÇÃO-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="descricaoPagamento" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Descrição do Pagamento:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="descricaoPagamento" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Descrição do Pagamento:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <textarea title="Deve conter no míninimo 3 caracteres" minlength="3"
                                        pattern="^[A-Za-z¿-ˇ]+(?: [A-Za-z¿-ˇ ]+)*$" maxlength="20" required
                                        class="form-control" type="text" name="txtDescricaoPagamento"
                                        id="txtDescricaoPagamento" cols="30" rows="5"></textarea>
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza a descrição
                                    </div>
                                </div>
                            </center>
                        </div>

                    </div>

                    <!--CAMPOS 3-->
                    <div class="col text-center">

                        <!--FORM valor do pagamento-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="ValorPagamento" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Valor do Pagamento:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="ValorPagamento" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Valor do Pagamento:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <input title="Formato de data errado: xx/xx/xxxx" pattern="[0-9.]*" maxlength="10"
                                        required class="form-control" type="text" name="txtValorPagamento"
                                        id="txtValorPagamento">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza a valor do pagamento
                                    </div>
                                </div>
                            </center>
                        </div>

                        <!--FORM DATA FInal-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="dataPagamento" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Data do Pagamento:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="dataPagamento" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Data do Pagamento:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <input title="Formato de data errado: xx/xx/xxxx"
                                        pattern="[0-9][0-9]-[0-9][0-9]-[0-9][0-9][0-9][0-9]" maxlength="10" required
                                        class="form-control" type="text" name="txtDataPagamento" id="txtDataPagamento">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza a data do pagamento
                                    </div>
                                </div>
                            </center>
                        </div>

                    </div>

                </div>

            </div>

            <!--COLEÇÃO BOTÃO-->
            <div class="col text-center" style="height: auto">
                <!--FORM BOTAO-->
                <div class="col d-flex justify-content-center pt-4">
                    <center>
                        <div class="col mb-5">
                            <input onClick="ClickLogar()" name="btnSubmit" class="btn" type="submit" value="Cadastrar"
                                name="btnSubmit" id="btnSubmit" style="width: 100%;"> <br><span id="spinner"
                                class=''></span>
                            <br>
                        </div>
                    </center>
                </div>
            </div>
        </div>

    </div>
    </div>

</form>

<!--VARIÁVIES Pagamento-->
<script src="/assets/js/pagamento/variaveis.js"></script>
<!--BUSCAR VALIDAÇÃO DA DATA-->
<script src="/assets/js/pagamento/datePicker.js"></script>
<!--BUSCAR VALIDAÇÃO DE CAMPOS VAZIOS-->
<script src="/assets/js/validarCampo.js"></script>