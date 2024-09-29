<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>
  <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" id="eProfissional">
  <?php
    require_once 'conexaoBD.php';
    $sql = "DELETE FROM amigo WHERE idamigo = '".$_POST['txtID'] ."';";
    if ($conexao->query($sql) === TRUE) {
      echo '
      <a href="listar.php">
      <h1 class="w3-button w3-pink">Amigo Excluido com sucesso! </h1>
      </a>
      ';
    } else {
      echo '
      <a href="listar.php">
      <h1 class="w3-button w3-pink">ERRO! </h1>
      </a>
      ';
    }
    $conexao->close();
  ?>
  </div>
<?php require_once ('rodape.php'); ?>