<div class="container-fluid ">
    <div class="col-12 ">
        <?php require "../app/views/painel/inclusao/menu/telaGrande/menuTelaGrande.php"; ?>
    </div>

    <div class="col d-flex">
        <div class="col-4 d-none d-lg-flex" style="width: 310px;">
            <?php require "../app/views/painel/inclusao/card/card.php"; ?>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="d-none d-lg-flex" style="min-height: 16vh"></div>

                <div class="row bg-white text-dark pb-4 pt-3"
                    style="display: block; flex-wrap: wrap; background: #57489b; height: auto">
                    <center>
                        <div class="row d-table d-md-flex m-2 ">
                            <div class="col m-1 p-3"
                                style="background: #57489b; color: white; border: 3px solid #299; border-radius: 13px">
                                <i class="fas fa-music pt-1 pb-1" style="font-size:30px; color: #299 "></i>
                                <b>Obras</b>
                                <span class="text-white">56</span>
                            </div>

                            <div class="col m-1 p-3"
                                style="background: #57489b; color: white; border: 3px solid #299; border-radius: 13px">
                                <i class="fas fa-microphone pt-1 pb-1" style="font-size:30px; color: #299 "></i>
                                <b>Cantores</b>
                                <span class="text-white">56</span>
                            </div>


                            <div class="col m-1 p-3"
                                style="background: #57489b; color: white; border: 3px solid #299; border-radius: 13px">
                                <i class="fas fa-folder  pt-1 pb-1" style="font-size:30px; color: #299 "></i>
                                <b>Álbuns</b>
                                <span class="text-white">56</span>
                            </div>

                            <div class="col m-1 p-3"
                                style="background: #57489b; color: white; border: 3px solid #299; border-radius: 13px">
                                <i class="fas fa-play pt-1 pb-1" style="font-size:30px; color: #299 "></i>
                                <b>Reproduzidas</b>
                                <span class="text-white">56</span>
                            </div>
                        </div>

                        <div class="row d-table d-md-flex p-4 justify-content-center align-items-center"
                            style="background: #299; border: 3px solid #299; border-radius: 13px">
                            <div class="col m-1"
                                style="height: 30vh; background: #57489b; color: white; border: 3px solid #299; border-radius: 13px">
                                <br><b>Artísta com mais Obras</b>
                                <br>
                                <div class="row d-flex justify-content-center align-items-center" style="height: 100px">
                                    <div class="col-4 text-end">
                                        <?php $caminho = '/assets/img/perfil/foto.jpg'; ?>
                                        <a href="<?php echo $caminho; ?>">
                                            <img class='img-fluid rounded-circle'
                                                style='width: 80px; height: 80px; object-fit: cover; border: 3px solid white'
                                                src="<?php echo $caminho; ?>" alt='Foto do perfil'>
                                        </a> <br>
                                    </div>

                                    <div class="col ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-8">
                                                    <i class="fas fa-user" style="font-size:30px; color: #299 "></i>
                                                    <span>Génio Pró</span>
                                                </div>

                                                <div class="col">
                                                    <i class="fas fa-music" style="font-size:30px; color: #299 "></i>
                                                    <span>120</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col border m-1"
                                style="height: 30vh; background: #57489b; color: white; border: 3px solid #299; border-radius: 13px">
                                <br><b>Obra mais reproduzida</b>
                                <br>
                                <div class="row d-flex justify-content-center align-items-center" style="height: 100px">
                                    <div class="col-4 ">
                                        <i class="fas fa-music d-flex justify-content-end align-items-center"
                                            style="font-size: 50px; width: 80px; height: 100px; object-fit: cover;"></i>
                                    </div>

                                    <div class="col ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-8">
                                                    <i class="fas fa-user" style="font-size:30px; color: #299 "></i>
                                                    <span>Génio Pró</span>
                                                </div>

                                                <div class="col">
                                                    <i class="fas fa-music" style="font-size:30px; color: #299 "></i>
                                                    <span>120</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row d-table d-md-flex pt-2">
                            <div class="container"
                                style="height: auto; background: #57489b; color: white; border: 3px solid #299; border-radius: 13px">
                                <div class="row">
                                    <div class="col">
                                        <div class="row ">
                                            <div class="col pt-2" style="background: #299; border: 3px solid white; border-radius: 13px">
                                                <h4>Músicas novas</h4>
                                                <p>Detalhes sobre as músicas novas e os cantores</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <?php require "../app/views/obra/formulario/buscar.php"; ?>
                                        </div>

                                        <div class="row" style="background: #299; min-height: 5vh;  border: 3px solid white; border-radius: 13px">
                                            <div class="col" >
                                                Está camada apenas mostrará as 4 músicas mais recentes
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row d-table d-md-flex pt-2">
                            <div class="col border m-1" style="height: 30vh">
                                <b>Eventos da empresa</b>
                            </div>

                            <div class="col border m-1" style="height: 30vh">
                                <b>Eventos do cantor</b>
                            </div>
                        </div>
                    </center>
                </div>

                <?php require "../app/views/painel/inclusao/menu/inclusao/botaoMostrarMenu.php"; ?>
            </div>
        </div>
    </div>
</div>