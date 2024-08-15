<form id="formnovo" method="POST" enctype="multipart/form-data">
  
  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Nome:</label>
    <input type="text" class="form-control" name="nome">
  </div>

  <div class="mb-3">
    <label for="nomeCliente" class="form-label">CPF:</label>
    <input type="number" class="form-control" name="cpf">
  </div>

  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Telefone Fixo:</label>
    <input type="tel" class="form-control" name="telefoneFixo">
  </div>

  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Celular:</label>
    <input type="tel" class="form-control" name="telefoneCelular">
  </div>

  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Logradouro:</label>
    <input type="text" class="form-control" name="logradouro">
  </div>

  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Número:</label>
    <input type="number" class="form-control" name="numero">
  </div>

  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Complemento:</label>
    <input type="text" class="form-control" name="complemento">
  </div>

  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Bairro:</label>
    <input type="text" class="form-control" name="bairro">
  </div>

  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Cidade:</label>
    <input type="text" class="form-control" name="cidade">
  </div>

  <div class="mb-3">
    <label for="nomeCliente" class="form-label">Estado:</label>
    <input type="text" class="form-control" name="estado">
  </div>
  
  <div class="mb-3">
    <label for="nomeCliente" class="form-label">CEP:</label>
    <input type="number" class="form-control" name="cep" requered>
  </div>

  <input type="hidden" name="formulario" id="formulario" value="clientes-controller">
  <input type="hidden" name="local" id="local" value="#conteudo">
  <input type="hidden" name="acao" id="acao" value="registro">
  
  <button type="submit" class="btn btn-danger"><i class="bi bi-floppy2"></i> Enviar</button>
</form>