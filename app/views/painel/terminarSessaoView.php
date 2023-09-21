<?php 
if(!empty($_SESSION["processando"])){
    unset($_SESSION["processando"]); 
}
session_destroy(); 
?>
<script>
window.location = "/inicio/index"
</script>