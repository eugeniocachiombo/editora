<?php
if ( empty( $_SESSION[ 'idUtilizador' ] ) ) {
    ?>
        <script>
                window.location = '/login/Index';
        </script>
    <?php
}
?>