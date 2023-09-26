<!--HEADER HTML-->
    <?php require_once "../app/views/default/htmlHead.php"; ?>
    <title><?php echo $title ?></title>

<!--VERIFICAR SESSÃO-->
<?php require_once "../app/core/verificarSessao.php";?>

<!--LINK CSS-->
    <link rel="stylesheet" href="/assets/css/painel.css">

<!--Menu tela pequena e cabeçalho-->
    <div class="d-lg-none">
        <?php require_once "../app/views/painel/inclusao/menu/telaPequena/menuTelaPequena.php"; ?>
    </div>

<!--HEADER-->
    <div class="d-lg-none">
        <?php require_once "../app/views/default/header.php"; ?>
    </div>

<!--MAIN--> <!--#O ARQUIVO PODE SER ALTERADO-->
 <?php require_once "../app/views/painel/estrutura/index.php";?>

<!--Rodapé -->
    <div class="d-lg-none">
        <!--FOOTER-->
        <?php require_once "../app/views/default/footer.php"; ?>
    </div>

<!--FOOTER HTML-->
    <?php require_once "../app/views/default/htmlFooter.php"; ?>

<!-- Modal -->
<div class="modal fade text-dark" id="sobreModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sobreModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sobreModalLabel">Sobre</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <?php require "../app/views/default/footer.php"; ?>
      </div>
    </div>
  </div>
</div>