<?php
include_once $_SERVER['DOCUMENT_ROOT'] ."/config.php";
?>
<div class="container" id="resposta"></div>
<form id="formnovo" method="POST" enctype="multipart/form-data">
  
  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Nome:</label>
    <input type="text" class="form-control" name="name">
  </div>
  
<!-- Campos utilizados como rotas do controller e do ajax -->
  <input type="hidden" name="formulario" id="formulario" value="user-controller">
  <input type="hidden" name="local" id="local" value="#resposta">
  <input type="hidden" name="acao" id="acao" value="registro">
  
  <button type="submit" class="btn btn-danger"><i class="bi bi-floppy2"></i> Enviar</button>
</form>
<script src="<?=$js?>formulario.js"></script>