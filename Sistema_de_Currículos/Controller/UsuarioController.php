<?php
if (!isset($_SESSION)) {
  session_start();
}

require_once "../Model/Usuario.php";

class UsuarioController {

  // Cadastrar
  public function inserir($nome, $cpf, $dataNascimento, $email, $senha) {
    $usuario = new Usuario();
    $usuario->setNome($nome);
    $usuario->setCPF($cpf);
    $usuario->setDataNascimento($dataNascimento);
    $usuario->setEmail($email);
    $usuario->setSenha($senha);

    $r = $usuario->inserirBD();

    $_SESSION['Usuario'] = serialize($usuario);
    return $r;
  }

  // Login
  public function login($cpf, $senha) {
    $usuario = new Usuario();
    $usuario->carregarUsuario($cpf);
    $verSenha = $usuario->getSenha();

    if ($senha == $verSenha) {
      $_SESSION['Usuario'] = serialize($usuario);
      return true;
    } else {
      return false;
    }
  }

  // Atualizar
  public function atualizar($id, $nome, $cpf, $dataNascimento, $email) {
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($nome);
    $usuario->setCPF($cpf);
    $usuario->setDataNascimento($dataNascimento);
    $usuario->setEmail($email);

    $r = $usuario->atualizarBD();
    $_SESSION['Usuario'] = serialize($usuario);
    return $r;
  }

  // Listar cadastrados
  public function gerarLista() {
    $u = new Usuario();
    return $u->listaCadastrados();
  }

  // Exibir usuário individualmente
  public function exibirUsuarioIndividualmente($idusuario) {
    $u = new Usuario();
    $usuario = $u->exibirUsuario($idusuario);

    if ($usuario) {
      $_SESSION['Usuario'] = serialize($usuario);
    }

    return $usuario;
  }
}
?>
