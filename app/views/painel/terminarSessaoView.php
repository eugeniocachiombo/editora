<?php
if ( !empty( $_SESSION[ 'processando' ] ) ) {
    unset( $_SESSION[ 'processando' ] );
}
session_destroy();
?>
<script>
    localStorage.clear("cookies");
    window.location = '/inicio/index';
</script>