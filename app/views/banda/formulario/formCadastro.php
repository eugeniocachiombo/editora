<!--MAIN-->
<form action="/banda/Cadastrar" method="post" class="needs-validation" novalidate>

    <div class="container-fluid bg-white pt-5 text-dark"
        style="min-height: 62vh; border-radius: 10px;border: 5px solid #299; padding-right: 0">
        <div class="row d-block form-group" style="width: 100%;">
            <!--COLEÇÃO PRINCIPAL 1-->
            <div class="col text-center" style="height: auto">
                <!--ICONE Artista-->
                <div class="col ">
                    <center>
                        <div class="" style="text-align: center;">
                            <i class='fas fa-guitar' style="font-size: 100px"></i>
                        </div>
                    </center>
                </div>

                <!--TEXT-->
                <div class="col pb-1 ">
                    <center>
                        <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block"
                            style="text-align: center;">
                            <legend class="">Adicionar Banda</legend>
                        </div>

                        <div class="col d-md-none d-lg-none d-xl-none">
                            <h5>Adicionar Banda</h5>
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
                        <!--FORM NAME-->
                        <div class="col pt-2">
                            <center>
                                <div class="col  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="nomeBanda" style="width: 220px; text-align: left;">
                                        <p class="p"><b>Nome da banda:</b></p>
                                    </label>
                                </div>

                                <div class="col d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="nomeBanda" style="width: 220px; text-align: left;">
                                        <p class="p"><b>Nome da banda:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px; width: 220px;">
                                    <input title="Deve conter no míninimo 3 caracteres" minlength="3"
                                        pattern="^[A-Za-z¿-.ˇ]+(?: [A-Za-z¿-.ˇ]+)*$" maxlength="20" required
                                        class="form-control" type="text" name="txtNomeBanda" id="txtNomeBanda">

                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza o nome
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
                        <div class="col mb-5" style="width: 220px">
                            <input onClick="ClickLogar()" name="btnSubmit" class="btn" type="submit"
                                value="Adicionar Banda" id="btnLogar" style="width: 100%;"> <br><span id="spinner"
                                class=''></span>
                            <br>

                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

</form>

<!--VARIÁVIES Banda-->
<script src="/assets/js/banda/variaveis.js"></script>
<!--BUSCAR VALIDAÇÃO DE CAMPOS VAZIOS-->
<script src="/assets/js/validarCampo.js"></script>