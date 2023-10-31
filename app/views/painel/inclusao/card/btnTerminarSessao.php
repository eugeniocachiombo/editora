<center>
<div class="pb-4" style="margin-top: 40px; ">
    <p id="terminarSessao" onClick="Clique()" class="form-control text-center text-white " style="cursor: pointer; width: 180px; background: #299; margin-top: 10px">
        Terminar Sessão
    </p>
</div>
<?php $_SESSION["processando"] = "/painel/terminarSessao"; ?>
</center>


<script>
        function Clique(){
            Swal.fire({
                        title: 'Tens a certeza?',
                        text: "Você está terminando a sessão",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, tenho',
                        cancelButtonText: "Cancelar"
            }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                        'Sessão Terminada!',
                        'Sessão Terminada Com Sucesso',
                        'success'
                        );

                        setTimeout(() => {
                            window.location = "/painel/Carregando"
                        }, 2000);
                    }
            });
        }
       
</script>