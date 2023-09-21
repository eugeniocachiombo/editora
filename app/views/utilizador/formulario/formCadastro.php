<!--MAIN-->
<form action="/utilizador/Cadastrar" method="post" class="needs-validation" novalidate>

    <div class="container-fluid d-table d-md-flex justify-content-center align-items-center pt-5"
        style="min-height: 315px;">
        <div class="row d-block form-group" style="width: 100%; ">

            <!--COLEÇÃO PRINCIPAL 1-->
            <div class="col text-center" style="height: auto">
                <!--ICONE UTILIZADOR-->
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
                        <!--FORM NAME-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="nomeUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Nome:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="nomeUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Nome:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <input title="Deve conter no míninimo 3 caracteres" minlength="3"
                                        pattern="^[A-Za-z¿-ˇ]+(?: [A-Za-z¿-ˇ]+)*$" maxlength="20" required
                                        class="form-control" type="text" name="txtNomeUtilizador"
                                        id="txtNomeUtilizador">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza o nome
                                    </div>
                                </div>
                            </center>
                        </div>

                        <!--FORM SOBRENOME-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="sobrenomeUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Sobrenome:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="sobrenomeUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Sobrenome:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <input title="Deve conter no míninimo 3 caracteres" minlength="3"
                                        pattern="^[A-Za-z¿-ˇ]+(?: [A-Za-z¿-ˇ]+)*$" maxlength="20" required
                                        class="form-control" type="text" name="txtSobreNomeUtilizador"
                                        id="txtSobreNomeUtilizador">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza o sobrenome
                                    </div>
                                </div>
                            </center>
                        </div>

                    </div>

                    <!--CAMPOS 2-->
                    <div class="col text-center">
                        <!--FORM NOME ARTISTICO-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="nomeArtisticoUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Nome Artistico:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="nomeArtisticoUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Nome Artistico:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <input title="Deve conter no míninimo 3 caracteres" minlength="3"
                                        pattern="^[A-Za-z¿-ˇ]+(?: [A-Za-z¿-ˇ ]+)*$" maxlength="20" required
                                        class="form-control" type="text" name="txtNomeArtisticoUtilizador"
                                        id="txtNomeArtisticoUtilizador">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza o nome artístico
                                    </div>
                                </div>
                            </center>
                        </div>

                        <!--FORM NIF-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="NIFUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>NIF ou Bilhete de Identidade:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="NIFUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>NIF ou Bilhete de Identidade:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <input title="Deve conter no míninimo 5 caracteres" minlength="5"
                                        pattern="[0-9]{9}[A-Z]{2}[0-9]{3}" maxlength="20" required class="form-control"
                                        type="text" name="txtNIFUtilizador" id="txtNIFUtilizador">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza o nif ou número do bi
                                    </div>
                                </div>
                            </center>
                        </div>

                        <!--FORM GÊNERO-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8 d-none d-md-block d-lg-block d-xl-block">
                                    <label for="generoUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Gênero:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="generoUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Gênero:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 align-items-center" style="margin-top: -15px" required>
                                    <select name="txtGeneroUtilizador" id="txtGeneroUtilizador"
                                        class="form-control custom-select" required>
                                        <option selected value="">Selecione...</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Selecione o gênero
                                    </div>
                                </div>
                            </center>
                        </div>

                    </div>

                    <!--CAMPOS 3-->
                    <div class="col text-center">

                        <!--FORM NACIONALIDADE-->
                        <div class="col pt-2 d-none">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="nacionalidadeUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Nacionalidade:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="nacionalidadeUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Nacionalidade:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <select name="txtNacionalidadeUtilizador" id="txtNacionalidadeUtilizador"
                                        class="form-control custom-select" required>
                                        <option selected value="1">Angolano(a)</option>
                                        <?php 
                                        $nacionalidades = new NacionalidadeDao();
                                        $lista = $nacionalidades->Buscar();
                                        foreach ($lista as $nacionalidade) { ?>
                                        <option value="<?php echo $nacionalidade["idNacionalidade"];?>">
                                            <?php echo $nacionalidade["valorNacionalidade"];?>
                                        </option>
                                        <?php  }
                                        ?>
                                    </select>

                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Selecione a nacionalidade
                                    </div>
                                </div>
                            </center>
                        </div>

                        <!--FORM EMAIL-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="emailUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Email:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="emailUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Email:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <input maxlength="45" required class="form-control" type="email"
                                        name="txtEmailUtilizador" id="txtEmailUtilizador">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza o email
                                    </div>
                                </div>
                            </center>
                        </div>

                        <!--FORM TELEFONE-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="telefoneUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Telefone:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="telefoneUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Telefone:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <input title="Deve conter no míninimo 9 caracteres" minlength="9" maxlength="9"
                                        pattern="[0-9]{9}" required class="form-control" type="text"
                                        name="txtTelefoneUtilizador" id="txtTelefoneUtilizador">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza o número de telefone
                                    </div>
                                </div>
                            </center>
                        </div>

                    </div>

                    <!--CAMPOS 4-->
                    <div class="col text-center">

                        <!--FORM PALAVRA PASSE-->
                        <div class="col  pt-2">
                            <div class="row">
                                <center>
                                    <div class="col-8 d-none d-md-block d-lg-block d-xl-block">
                                        <label for="passeUtilizador" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Palavra-Passe:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="passeUtilizador" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Palavra-Passe:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">
                                        <input title="Deve conter no míninimo 6 caracteres" minlength="6" maxlength="20"
                                            required class="form-control" type="password" name="txtPasseUtilizador"
                                            id="txtPasseUtilizador">
                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Introduza a palavra-passe
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>

                        <!--FORM DATA DE NASCIMENTO-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="dataNascimentoUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Data de Nascimento:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="dataNascimentoUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Data de Nascimento:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <input title="Formato de data errado: xx/xx/xxxx"
                                        pattern="[0-9][0-9]-[0-9][0-9]-[0-9][0-9][0-9][0-9]" maxlength="10" required
                                        class="form-control" type="text" name="txtdataNascimentoUtilizador"
                                        id="txtdataNascimentoUtilizador">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza a data de nascimento
                                    </div>
                                </div>
                            </center>
                        </div>

                        <!--FORM PROVINCIA-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8 d-none d-md-block d-lg-block d-xl-block">
                                    <label for="ProvinciaUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Província:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="ProvinciaUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Província:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 align-items-center" style="margin-top: -15px" required>
                                    <select name="txtProvinciaUtilizador" id="txtProvinciaUtilizador"
                                        class="form-control custom-select" required>
                                        <option selected value="">Selecione...</option>
                                        <?php 
                                        $provincias = new ProvinciaDao();
                                        $lista = $provincias->Buscar();
                                        foreach ($lista as $provincia) { ?>
                                        <option value="<?php echo $provincia["idProvincia"];?>">
                                            <?php echo $provincia["nomeProvincia"];?>
                                        </option>
                                        <?php  }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Selecione a província
                                    </div>

                                </div>
                            </center>
                        </div>

                    </div>

                    <!--CAMPOS 5-->
                    <div class="col text-center">
                        <!--FORM MUNICIPIO-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8 d-none d-md-block d-lg-block d-xl-block">
                                    <label for="MunicipioUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Município:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="MunicipioUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Município:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 align-items-center" style="margin-top: -15px" required>
                                    <select name="txtMunicipioUtilizador" id="txtMunicipioUtilizador"
                                        class="form-control custom-select" required>
                                        <option selected value="">Selecione...</option>
                                        <?php 
                                            $municipios = new MunicipioDao();
                                            $lista = $municipios->Buscar();
                                            foreach ($lista as $municipio) { ?>
                                        <option value="<?php echo $municipio["idMunicipio"];?>">
                                            <?php echo $municipio["nomeMunicipio"];?>
                                        </option>
                                        <?php  }
                                            ?>
                                    </select>
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Selecione o município
                                    </div>
                                </div>
                            </center>
                        </div>

                        <!--FORM ENDEREÇO-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8 d-none d-md-block d-lg-block d-xl-block">
                                    <label for="EnderecoUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Endereço de morada:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="EnderecoUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Endereço de morada:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 align-items-center" style="margin-top: -15px" required>
                                    <input maxlength="45" required class="form-control" type="text"
                                        name="txtEnderecoUtilizador" id="txtEnderecoUtilizador">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza o endereço
                                    </div>
                                </div>
                            </center>
                        </div>

                        <!--FORM TIPO ACESSO-->
                        <div class="col pt-2 d-none">
                            <center>
                                <div class="col-8 d-none d-md-block d-lg-block d-xl-block">
                                    <label for="TipoAcessoUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Tipo de Acesso:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="TipoAcessoUtilizador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Tipo de Acesso:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 align-items-center" style="margin-top: -15px" required>
                                    <select name="txtTipoAcessoUtilizador" id="txtTipoAcessoUtilizador"
                                        class="form-control custom-select" required>
                                        <option selected value="1">Independente</option>
                                    </select>
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Selecione o tipo de acesso
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

<!--VARIÁVIES UTILIZADOR-->
<script src="/assets/js/utilizador/variaveis.js"></script>
<!--AJAX PARA BUSCAR UTILIZADORES-->
<script src="/assets/js/utilizador/ajaxBuscarUtilizadores.js"></script>
<!--AJAX REQUISITAR MUNICIPIOS AO SERVIDOR-->
<script src="/assets/js/utilizador/ajaxMunicipiosUtilizadores.js"></script>
<!--BUSCAR VALIDAÇÃO DA DATA-->
<script src="/assets/js/datePicker.js"></script>
<!--BUSCAR VALIDAÇÃO DE CAMPOS VAZIOS-->
<script src="/assets/js/validarCampo.js"></script>