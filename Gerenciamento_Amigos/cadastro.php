<?php require_once ('verificarAcesso.php');?>
<?php require_once ('cabecalho.php'); ?>

  <a href="index.php" class="w3-display-topleft">
  <i class="fa fa-arrow-circle-left w3-xlarge w3-deep-purple w3-button w3-round-large w3-margin-left w3-margin-top"> Voltar</i>
  </a>

  <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h1 class="w3-center w3-pink w3-round-large w3-margin">Cadastro de Amigos</h1>
    <form action="cadastroAction.php" class="w3-container" method='post'>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Código</label>
      <input name="txtID" class="w3-input w3-grey w3-border" disabled><br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Nome</label>
      <input name="txtNome" class="w3-input w3-light-grey w3-border"><br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Apelido</label>
      <input name="txtApelido" class="w3-input w3-light-grey w3-border"><br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Email</label>
      <input name="txtEmail" class="w3-input w3-light-grey w3-border"><br>
      <button name="btnAdicionar" class="w3-button w3-pink w3-cell w3-round-large w3-right">
      <i class="w3-xlarge fa fa-user-plus">Adicionar</i> 
      </button>
    </form>
  </div>

<?php require_once ('rodape.php'); ?>