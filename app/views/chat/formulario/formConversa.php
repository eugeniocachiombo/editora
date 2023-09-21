<?php
require_once '../app/config/db.php';
$destino = $_SERVER[ 'REQUEST_URI' ];
$destino = explode( 'destino=', $destino );
$_SESSION[ 'idUtilizadorDestino' ] = 1;
//$_SESSION[ 'idUtilizadorDestino' ] = $destino[ 1 ];

$utilizadorDestino = new UtilizadorDao();
$utilizadorDestino = $utilizadorDestino->BuscarTodosDadosID( $_SESSION[ 'idUtilizadorDestino' ] );
?>

<!--CABEÇALHO DA PAGINAÇÃO-->
<?php require '../app/views/chat/paginacao/headPaginacao.php';
?>

<div class='container pt-3 mb-3 mt-3'
    style='background: #57489b;min-height: 50vh; border: 8px solid #299; border-radius: 5px'>

    <h1>Conversa <i class='fas fa-comment'></i> </h1>

    <label class='mb-5 px-2' style='background: #299; width: 100%; border-radius: 30px'>
        <i class='fas fa-user pe-2'></i>
        <b><?php echo $utilizadorDestino[ 'nomeArtisticoUtilizador' ];
?></b>
    </label>

    <?php
if ( !empty( $lista ) ) {
    foreach ( $lista as $value ) {

        if ( $value[ 'idUtilizadorEmissor' ] == $_SESSION[ 'idUtilizador' ] ) {
            ?>
    <center>
        <div class='textoEmissor col col-md-7 mb-3 d-flex justify-content-end'>
            <div class='bg-info p-2' style=' min-heimax-height: auto;border-radius: 20px; width: 60%'>
                <?php echo openssl_decrypt( $value[ 'textoChat' ], 'aes-256-cbc', '1', 0 );
            ?>
            </div>

            <form action='/chat/Eliminar' class='d-flex justify-content-center align-items-center' method='post'
                style='background: none; border: none; '>
                <input type='hidden' name='idChat' id='idChat' value="<?php echo $value[ 'idChat' ] ?>">
                <button id='btnSubmit' name='btnSubmit' style='background: none; border: none; '>
                    <i class='fas fa-trash-alt px-2'
                        style='background: none; border: none; font-size: 20px; color: white'></i>
                </button>
            </form>
        </div>
    </center>
    <?php
        } else {
            ?>
    <center>
        <div class='textoReceptor col col-md-7  mb-3 d-flex justify-content-left'>
            <form action='/chat/Eliminar' class='d-flex justify-content-center align-items-center' method='post'
                style='background: none; border: none; '>
                <input type='hidden' name='idChat' id='idChat' value="<?php echo $value[ 'idChat' ] ?>">
                <button id='btnSubmit' name='btnSubmit' style='background: none; border: none; '>
                    <i class='fas fa-trash-alt pe-2'
                        style='background: none; border: none; font-size: 20px; color: white'></i>
                </button>
            </form>

            <div class='bg-alert p-2 '
                style=' background: #299; min-heimax-height: auto;border-radius: 20px; width: 60%'>
                <?php echo openssl_decrypt( $value[ 'textoChat' ], 'aes-256-cbc', '1', 0 );
            ?>
            </div>
        </div>
    </center>
    <?php
        }

    }

} else {
    echo "<h1 class='text-center'> Precisa iniciar uma conversa </h1> ";
}
?>

    <!--RODAPÉ DA PAGINAÇÃO-->
    <?php require '../app/views/chat/paginacao/footerPaginacao.php';
?>

    <center>
        <form action='/chat/Enviar' method='post' class=' d-block justify-content-center align-items-center'
            style='padding-top: 5%; width: 100%; height: 40vh'>

            <textarea class='form-control' name='textoChat' id='textoChat' cols='10' rows='10'
                style='width: 60%;height: 150px;color: #299;background: white;font-weight: bold;font-size:20px'></textarea>

            <div class='col pt-3 mb-3'>
                <input name='btnSubmit' class='btn' type='submit' value='Enviar' id='btnSubmit' style='width: 60%;'>
                <br><span id='spinner' class=''></span>
                <br>
            </div>
        </form>
    </center>

</div>