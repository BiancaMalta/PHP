<?php require_once ('verificarAcesso.php');?>
<?php require_once ('cabecalho.php'); ?>

  <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <div class="w3-center">
      <a href="./principal.php" class="w3-red w3-padding w3-button w3-margin-top w3-round-large" style="text-decoration:none;">
        <i class="fa fa-ban" style="font-size:5em"></i>
        <p style="font-weight:bold;">CANCELAR EXCLUSÃO</p>
      </a>
    </div>

    <h1 class="w3-center w3-pink w3-round-large w3-margin">EXCLUIR - ID: <?php echo " ".$_GET['id']?> </h1>
    <form action="excluirAction.php" class="w3-container w" method='post'>
      <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>">
      <br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Nome</label>
      <input name="txtNome" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['nome']?>">
      <br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Apelido</label>
      <input name="txtApelido" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['apelido']?>">
      <br>
      <label class="w3-text-deep-purple" style="font-weight: bold;">Email</label>
      <input name="txtEmail" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['email']?>">
      <br>
      <button name="btnExcluir" class="w3-button w3-deep-purple w3-cell w3-round-large w3-right">
      <i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão.
      </button>
    </form>
  </div>

<?php require_once ('rodape.php'); ?>