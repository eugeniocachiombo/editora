<!--MAIN-->
<form action="/login/Index" method="post" class="needs-validation" novalidate>

    <div class="container-fluid d-table d-md-flex justify-content-center align-items-center" style="min-height: 315px;">
        <div class="row-1 d-flex form-group" style="width: 100%; ">

            <!--COLEÇÃO 1-->
            <div class="col  text-center" style="height: auto">
                <div class="row-4 d-block mt-5">

                    <!--ICONE LOGIN-->
                    <div class="col">
                        <center>
                            <div class="col-8 pb-1" style="text-align: center;">
                                <img src="/assets/img/icons/user33.png" alt="Perfil" width="30%">
                            </div>
                        </center>
                    </div>

                    <!--TEXTO LOGIN-->
                    <div class="col pb-1 ">
                        <center>
                            <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block"
                                style="text-align: center;">
                                <legend class="h1 ">Login</legend>
                            </div>

                            <div class="col-8 pb-5 mb-3 d-sm-block d-md-none d-lg-none d-xl-none">
                                <legend class="h1 ">Login</legend>
                            </div>
                        </center>
                    </div>

                    <!--FORM NOME-->
                    <div class="col">
                        <center>
                            <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                <label for="NomeEmail" style="width: 100%; text-align: left;">
                                    <p class="p"><b>Email ou Telefone:</b></p>
                                </label>
                            </div>

                            <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                <label for="NomeEmail" style="width: 100%;">
                                    <p class="p"><b>Email ou Telefone:</b></p>
                                </label>
                            </div>

                            <div class="col-8" style="margin-top: -15px">
                                <input maxlength="45" required class="form-control" type="text" name="txtEmailTel"
                                    id="txtEmailTel">
                                <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                    Introduza o seu email ou número de telefone
                                </div>
                            </div>
                        </center>
                    </div>

                    <!--FORM PALAVRA PASSE-->
                    <div class="col  pt-2">
                        <div class="row">
                            <center>
                                <div class="col-8 d-none d-md-block d-lg-block d-xl-block">
                                    <label for="senha" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Palavra-Passe:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="senha" style="width: 100%;">
                                        <p class="p"><b>Palavra-Passe:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">
                                    <input maxlength="20" required class="form-control" type="password" name="txtPasse"
                                        id="txtPasse">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza a palavra-passe
                                    </div>
                                </div>

                            </center>
                        </div>
                    </div>

                    <!--FORM BOTAO-->
                    <div class="col  pt-4">
                        <center>
                            <div class="col-8 mb-5">
                                <input onClick="ClickLogar()" class="btn" type="submit" value="Logar" id="btnLogar"
                                    name="btnLogar" style="width: 100%;"> <br><span id="spinner" class=''></span>
                                <br><br>
                                <p class="border">
                                    Necessita de uma conta? <br>
                                    <a href="/utilizador/Cadastrar" class="txtCriarConta text-decoration-none">Criar
                                        conta</a>
                                </p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>

            <!--COLEÇÃO 2-->
            <div class="col d-flex justify-content-center align-items-center" style="height: auto">
                <img src="/assets/img/icons/music.png" alt="Perfil" width="80%">
            </div>
        </div>

        <div class="row">
            <p class="d-none d-md-block d-lg-block d-xl-block text-justify" style="font-weight: bold; font-size: 10px;">
                Web site oficial da editora musical, para cantores assinantes e cantores independentes, garantimos
                qualidade de produção.</p>
            <p class="d-block  d-md-none d-lg-none d-xl-none text-center" style="font-weight: bold; font-size: 10px;">
                Web site oficial da editora musical, para cantores assinantes e cantores independentes, garantimos
                qualidade de produção.</p>
        </div>
    </div>
</form>

