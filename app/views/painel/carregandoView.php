<!--HEADER HTML-->
<?php
include_once "../app/views/default/htmlHead.php"; ?>

<style>
    .imagem {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    img {
        animation: fade 2s ease-in-out infinite;
        max-width: 250px;
        opacity: 0;
    }

    @keyframes fade {
        0%, 100% {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
    }
</style>


<div class="d-flex justify-content-center align-items-center" style="height: 85vh; background: #57489b">
            <div class="imagem">
                <img src="/assets/img/icons/slogan.png" alt="Imagem com fade">
            </div>
</div>

<script>
    setTimeout(() => {
       window.location = "<?php echo $_SESSION["processando"]; ?>";
    }, 4000);
</script>

<!--FOOTER HTML-->
<?php include_once "../app/views/default/htmlFooter.php"; ?>