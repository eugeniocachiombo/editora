<?php 
    // Receber a uri
    $uri = $_SERVER["REQUEST_URI"];
    $uri = explode("/", $uri);
    $uri = array_values(array_filter($uri));
?>

<!--Lista--> 
<ul type="none" style="padding-top: none; "> 

            <!--PAGINA INICIAL-->      
                <?php if($uri[1] == "Index" || $uri[1] == "index"){?>
                        <a  class="d-flex justify-content-left align-items-center" style="background: #299;border-radius: 30px  "> 
                                <span class="bg-white text-white text-center d-flex justify-content-center align-items-center" style="width: 50px; border-radius: 30px">
                                    <i class="fas fa-home text-dark pt-1 pb-1" style="font-size:30px;"></i> 
                                </span> 
                                    <li><b>Página Inicial</b></li>
                        </a> <hr>
                <?php }else{ ?>
                        <a href="/painel/Index" class="d-flex justify-content-left align-items-center" > 
                                <i class="fas fa-home text-white pt-1 pb-1" style="font-size:30px;margin-left:10px"></i> 
                                <li><b>Página Inicial</b></li>
                        </a> <hr>
                <?php } ?>


            <!--PERFIL-->      
                <?php if($uri[1] == "Perfil" || $uri[1] == "perfil"){?>
                        <a  class="d-flex justify-content-left align-items-center" style="background: #299;border-radius: 30px  "> 
                                <span class="bg-white text-white text-center d-flex justify-content-center align-items-center" style="width: 50px; border-radius: 30px">
                                    <i class="fas fa-user text-dark pt-1 pb-1" style="font-size:30px;"></i> 
                                </span> 
                                    <li><b>Perfil</b></li>
                        </a> <hr>
                <?php }else{ ?>
                        <a href="/painel/Perfil" class="d-flex justify-content-left align-items-center" > 
                                <i class="fas fa-user text-white pt-1 pb-1" style="font-size:30px;margin-left:10px"></i> 
                                <li><b>Perfil</b></li>
                        </a> <hr>
                <?php } ?>



            <!--OBRAS-->      
                <?php if($uri[1] == "Obras" || $uri[1] == "obras"){?>
                        <a  class="d-flex justify-content-left align-items-center" style="background: #299;border-radius: 30px  "> 
                                <span class="bg-white text-white text-center d-flex justify-content-center align-items-center" style="width: 50px; border-radius: 30px">
                                    <i class="fas fa-music text-dark pt-1 pb-1" style="font-size:30px;"></i> 
                                </span> 
                                    <li><b>Obras</b></li>
                        </a> <hr>
                <?php }else{ ?>
                        <a href="/painel/Obras" class="d-flex justify-content-left align-items-center" > 
                                <i class="fas fa-music text-white pt-1 pb-1" style="font-size:30px;margin-left:10px"></i> 
                                <li><b>Obras</b></li>
                        </a> <hr>
                <?php } ?>



            <!--ARTISTAS-->      
                <?php if($uri[1] == "Artistas" || $uri[1] == "artistas"){?>
                        <a  class="d-flex justify-content-left align-items-center" style="background: #299;border-radius: 30px  "> 
                                <span class="bg-white text-white text-center d-flex justify-content-center align-items-center" style="width: 50px; border-radius: 30px">
                                    <i class="fas fa-users text-dark pt-1 pb-1" style="font-size:30px;"></i> 
                                </span> 
                                    <li><b>Artístas</b></li>
                        </a> <hr>
                <?php }else{ ?>
                        <a href="/painel/Artistas" class="d-flex justify-content-left align-items-center" > 
                                <i class="fas fa-users text-white pt-1 pb-1" style="font-size:30px;margin-left:10px"></i> 
                                <li><b>Artístas</b></li>
                        </a> <hr>
                <?php } ?>




            <!--BANDAS-->      
                <?php if($uri[1] == "Bandas" || $uri[1] == "bandas"){?>
                        <a  class="d-flex justify-content-left align-items-center" style="background: #299;border-radius: 30px  "> 
                                <span class="bg-white text-white text-center d-flex justify-content-center align-items-center" style="width: 50px; border-radius: 30px">
                                    <i class="fas fa-guitar text-dark pt-1 pb-1" style="font-size:30px;"></i> 
                                </span> 
                                    <li><b>Bandas</b></li>
                        </a> <hr>
                <?php }else{ ?>
                        <a href="/painel/Bandas" class="d-flex justify-content-left align-items-center" > 
                                <i class="fas fa-guitar text-white pt-1 pb-1" style="font-size:30px;margin-left:10px"></i> 
                                <li><b>Bandas</b></li>
                        </a> <hr>
                <?php } ?>   



            <!--CONVERSAS-->      
                <?php if($uri[1] == "Conversas" || $uri[1] == "conversas"){?>
                        <a  class="d-flex justify-content-left align-items-center" style="background: #299;border-radius: 30px  "> 
                                <span class="bg-white text-white text-center d-flex justify-content-center align-items-center" style="width: 50px; border-radius: 30px">
                                    <i class="fas fa-comments text-dark pt-1 pb-1" style="font-size:30px;"></i> 
                                </span> 
                                    <li><b>Conversas</b></li>
                        </a> <hr>
                <?php }else{ ?>
                        <a href="/painel/Conversas" class="d-flex justify-content-left align-items-center" > 
                                <i class="fas fa-comments text-white pt-1 pb-1" style="font-size:30px;margin-left:10px"></i> 
                                <li><b>Conversas</b></li>
                        </a> <hr>
                <?php } ?>          




            <!--FINANCAS-->      
                <?php if($uri[1] == "Financas" || $uri[1] == "financas"){?>
                        <a  class="d-flex justify-content-left align-items-center" style="background: #299;border-radius: 30px  "> 
                                <span class="bg-white text-white text-center d-flex justify-content-center align-items-center" style="width: 50px; border-radius: 30px">
                                    <i class="fas fa-coins text-dark pt-1 pb-1" style="font-size:30px;"></i> 
                                </span> 
                                    <li><b>Finanças</b></li>
                        </a> <hr>
                <?php }else{ ?>
                        <a href="/painel/Financas" class="d-flex justify-content-left align-items-center" > 
                                <i class="fas fa-coins text-white pt-1 pb-1" style="font-size:30px;margin-left:10px"></i> 
                                <li><b>Finanças</b></li>
                        </a> <hr>
                <?php } ?>   




            <!--ACESSOS-->      
                <?php if($uri[1] == "Acessos" || $uri[1] == "acessos"){?>
                        <a  class="d-flex justify-content-left align-items-center" style="background: #299;border-radius: 30px  "> 
                                <span class="bg-white text-white text-center d-flex justify-content-center align-items-center" style="width: 50px; border-radius: 30px">
                                    <i class="fas fa-lock text-dark pt-1 pb-1" style="font-size:30px;"></i> 
                                </span> 
                                    <li><b>Acessos</b></li>
                        </a> <hr>
                <?php }else{ ?>
                        <a href="/painel/Acessos" class="d-flex justify-content-left align-items-center" > 
                                <i class="fas fa-lock text-white pt-1 pb-1" style="font-size:30px;margin-left:10px"></i> 
                                <li><b>Acessos</b></li>
                        </a> <hr>
                <?php } ?>  




            <!--LOCALIDADES-->      
                <?php if($uri[1] == "Localidades" || $uri[1] == "localidades"){?>
                        <a  class="d-flex justify-content-left align-items-center" style="background: #299;border-radius: 30px  "> 
                                <span class="bg-white text-white text-center d-flex justify-content-center align-items-center" style="width: 50px; border-radius: 30px">
                                    <i class="fas fa-map-marker-alt text-dark pt-1 pb-1" style="font-size:30px;"></i> 
                                </span> 
                                    <li><b>Localidades</b></li>
                        </a> <hr>
                <?php }else{ ?>
                        <a href="/painel/Localidades" class="d-flex justify-content-left align-items-center" > 
                                <i class="fas fa-map-marker-alt text-white pt-1 pb-1" style="font-size:30px;margin-left:10px"></i> 
                                <li><b>Localidades</b></li>
                        </a> <hr>
                <?php } ?> 



            
            <!--SOBRE--> 
                <a data-bs-toggle="modal" data-bs-target="#sobreModal" class="d-none d-lg-flex justify-content-left align-items-center" style="cursor: pointer"> 
                        <i class="fas fa-building text-white pt-1 pb-1" style="font-size:30px;margin-left:10px"></i> 
                        <li><b>Sobre</b></li>
                </a><hr class="d-none d-md-flex">
                
</ul> 








