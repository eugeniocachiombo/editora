<?php 
if ( empty( $_SESSION[ 'idUtilizador' ] ) ) {
    ?>
        <script>
                    Swal.fire({
                            title: 'Erro de sessão!',
                            text: "Pretende iniciar sessão?",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Sim, pretendo',
                            cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            localStorage.clear("cookies");
                            window.location = "/login";
                        }else{
                            window.location = "/Impossivel visualizar esta página ";
                        }
                    });
            
        </script>
    <?php
}
?>
