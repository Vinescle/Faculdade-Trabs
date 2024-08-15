<?php
include_once $_SERVER['DOCUMENT_ROOT'] ."/config.php";

include_once $controller."user-controller.php";
$busca = $UserTarefa->searchID($_POST['id']);
?>
<div class="container" id="resposta"></div>
<form id="formnovo" method="POST" enctype="multipart/form-data">
  
  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Nome:</label>
    <input type="text" class="form-control" name="name" value="<?=$busca->name?>">
  </div>
<!-- Input com o id do usuário para edição dos campos referentes ao modelo -->
  <input type="hidden" name="id" id="id" value="<?=$busca->id?>">

<!-- Campos utilizados como rotas do controller e do ajax -->
  <input type="hidden" name="formulario" id="formulario" value="user-controller">
  <input type="hidden" name="local" id="local" value="#resposta">
  <input type="hidden" name="acao" id="acao" value="update">
  
  <button type="submit" class="btn btn-danger"><i class="bi bi-floppy2"></i> Atualizar</button>
</form>
<script src="<?=$js?>formulario.js"></script>