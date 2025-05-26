<?php 

if(!isset($_SESSION)) {
  session_start();
}

class FormacaoAcadController{

    // Inserir
    public function inserir($inicio, $fim, $descricao, $idusuario) {
      require_once '../Model/FormacaoAcad.php';

      // Garantir que o ano esteja no formato correto (YYYY)
      $inicio = substr($inicio, 0, 4); // pega apenas os 4 primeiros caracteres
      $fim = substr($fim, 0, 4);       // idem

      $formacao = new FormacaoAcad();
      $formacao->setInicio($inicio);
      $formacao->setFim($fim);
      $formacao->setDescricao($descricao);
      $formacao->setIdUsuario($idusuario);
      $r = $formacao->inserirBD();
      return $r;
    }


    // Excluir
    public function remover($id) {
      require_once '../Model/FormacaoAcad.php';
      $formacao = new FormacaoAcad();
      $r = $formacao->excluirBD($id);
      return $r;
    }

    // Gerar lista
    public function gerarLista($idusuario) {
      require_once '../Model/FormacaoAcad.php';
      $formacao = new FormacaoAcad();
      return $results = $formacao->listaFormacoes($idusuario);
    }

}

?>