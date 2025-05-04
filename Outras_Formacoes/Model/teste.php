<?php
require_once 'OutrasFormacoes.php';
require_once 'Usuario.php';

// Criando o usuário de teste
$testuser = new Usuario();
$testuser->setNome("João Teste");
$testuser->setEmail("joao.teste@example.com");

// Inserindo o usuário no banco de dados
if ($testuser->inserirBD()) {
  echo "Usuário criado com sucesso!<br>";
} else {
  echo "Erro ao criar usuário.<br>";
}

$formacao = new OutrasFormacoes();
$formacao->setIdUsuario(1); // Id de um usuário existente
$formacao->setInicio('2023-01-01');
$formacao->setFim('2023-06-01');
$formacao->setDescricao('Curso de Cibersegurança');

if ($formacao->inserirBD()) {
  echo "Inserido com sucesso!";
} else {
  echo "Erro ao inserir.";
}
?>
