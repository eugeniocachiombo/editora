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
                    style="display: block; flex-wrap: wrap;background: #57489b;height: auto">
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

                        <div class="row d-table d-md-flex pt-2 ">
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
                                            <i class="fas fa-music d-flex justify-content-end align-items-center" style="font-size: 50px; width: 80px; height: 100px; object-fit: cover;"></i>
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
                            <div class="col border" style="height: 30vh">
                                <b>Músicas novas</b>
                                <p>Detalhes sobre a músicas e os cantores</p>
                                <?php require "../app/views/obra/formulario/buscar.php"; ?>
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

                        <div class="row d-table d-md-flex pt-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit impedit a quidem hic
                            animi
                            voluptate magni quam? Exercitationem quod odit fuga consequuntur excepturi repellat odio
                            facere
                            fugiat, doloribus commodi beatae?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae doloribus odio
                            fugit
                            molestias vitae, quibusdam quaerat optio rerum nostrum itaque error aperiam et eius amet
                            doloremque enim! Repudiandae, culpa!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum aspernatur quis
                            molestiae.
                            Deserunt et tempore totam, doloribus doloremque eligendi numquam repellendus molestias
                            consectetur deleniti, impedit vel adipisci alias debitis!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nemo iste, laboriosam
                            veniam aut quia dignissimos! Neque, aliquam ab. Dolor animi iure et tempora ipsa dolores
                            perspiciatis officiis dolorem consectetur!
                        </div>
                    </center>
                </div>

                <?php require "../app/views/painel/inclusao/menu/inclusao/botaoMostrarMenu.php"; ?>
            </div>
        </div>
    </div>
</div>