

<?php
require_once '../app/config/db.php';
$chat = new ChatDao();
$chatLista = $chat->BuscarConversaUtilizador( $_SESSION[ 'idUtilizador' ] );
$utilizador = new UtilizadorDao();
$totalUtilizadores = $utilizador->BuscarTotalUtilizadores();
$utilizadoresEncontrados =  array( $totalUtilizadores[ 'count(*)' ] );
$contador = 0;
?>


<div class='container pt-3 mb-3 mt-3'
    style='background: #57489b;min-height: 50vh; border: 8px solid #299; border-radius: 5px'>

    <h1>Conversas <i class='fas fa-comment'></i> </h1>
    <hr>

    <?php

foreach ( $chatLista as $value ) {
    if ( $_SESSION[ 'idUtilizador' ] != $value[ 'idUtilizadorEmissor' ] ) {
        $utilizadoresEncontrados[ $contador ] = $value[ 'idUtilizadorEmissor' ];
        $contador++;
    }

}

$removerDuplicadas = array_unique( $utilizadoresEncontrados );
$novaListaUtilizadores = array_values( $removerDuplicadas );


for ( $i = 0; $i < count( $novaListaUtilizadores ); $i++ ) {
    ?>
    
    <div id="pousarSobre" style='background: white; color: #299; border-radius: 50px; padding-left: 30px; '>
        <?php

    echo '<hr>';
    $emissor = $utilizador->BuscarTodosDadosID( $novaListaUtilizadores[ $i ] );
    ?>
    <a  href="/painel/Conversando/pagina=paginaChat=0=destino=<?php echo $novaListaUtilizadores[ $i ] ?>"
                style='text-decoration: none; color: black;' >
        <div>
            <b>
                <?php echo $emissor[ 'nomeArtisticoUtilizador' ]. '<br>';
    ?>
            </b>
        </div>
        <?php

    $mensagem = $chat->BuscarUltimaMensagem( $_SESSION[ 'idUtilizador' ], $novaListaUtilizadores[ $i ] );
    ?>
        
        <div style="color: #299">
            
                <?php 
                $textoMensagem = openssl_decrypt( $mensagem[ 'textoChat' ], 'aes-256-cbc', '1', 0 ). '<br>';
                
                if(strlen($textoMensagem) > 30){
                    echo substr($textoMensagem, 0, 30)." .........";
                }else{
                    echo $textoMensagem;
                }
                 
               $_SESSION[ 'idUtilizadorDestino' ] = $novaListaUtilizadores[ $i ];
                    ?>
        </div>
        </a>
        <?php echo '<hr>';
    ?>
    </div> <?php
}
?>
</div>