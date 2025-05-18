<?php 

if(!isset($_SESSION)) {
  session_start();
}

// Definir o caminho base para as views
$viewPath = "../View/";

// Função para incluir um arquivo de forma segura
function includeFile($file) {
  global $viewPath;
  $fullPath = $viewPath . $file;
  if (file_exists($fullPath)) {
      include_once $fullPath;
      return true;
  } else {
      echo "Erro: Arquivo '$fullPath' não encontrado.";
      return false;
  }
}

// Verificar qual ação foi solicitada com base no botão pressionado
if(isset($_POST["btnPrimeiroAcesso"])) {
  include_once "../View/primeiroAcesso.php";
} 
elseif(isset($_POST["btnCadastrar"])) {
  require_once "../Controller/UsuarioController.php";
  $uController = new UsuarioController();
  // Verificar se todos os campos necessários existem
  if (isset($_POST["txtNome"]) && isset($_POST["txtCPF"]) && 
      isset($_POST["txtEmail"]) && isset($_POST["txtSenha"])) {
    if ($uController->inserir(
      $_POST["txtNome"],
      $_POST["txtCPF"],
      $_POST["txtEmail"],
      $_POST["txtSenha"]
    )) {
      includeFile("../View/cadastroRealizado.php");
    } else {
      includeFile("../View/cadastroNaoRealizado.php");
    }
  } else {
    echo "Erro: Dados de formulário incompletos.";
  }
} 
elseif(isset($_POST["btnLogin"])) {
  require_once "../Controller/UsuarioController.php";
  $uController = new UsuarioController();
  // Verificar se todos os campos necessários existem
  if (isset($_POST["txtLogin"]) && isset($_POST["txtSenha"])) {
    if($uController->login($_POST["txtLogin"], $_POST["txtSenha"])) {
      includeFile("../View/principal.php");
    } else {
      includeFile("../View/cadastroNaoRealizado.php");
    }
  } else {
    echo "Erro: Dados de login incompletos.";
  }
} 
elseif(isset($_POST["btnCadRealizado"])) {
  includeFile("../View/principal.php");
} 
elseif(isset($_POST["btnCadNRealizado"])) {
  includeFile("../View/primeiroAcesso.php");
} 
elseif(isset($_POST["btnAtualizar"])) {
  require_once "../Controller/UsuarioController.php";
  $uController = new UsuarioController();
  if (isset($_POST["txtID"]) && isset($_POST["txtNome"]) && isset($_POST["txtCPF"]) && isset($_POST["txtEmail"])) {
    if ($uController->atualizar(
      $_POST["txtID"],
      $_POST["txtNome"],
      $_POST["txtCPF"],
      $_POST["txtEmail"]        
    )) {
      includeFile("../View/atualizacaoRealizada.php");
    } else {
      includeFile("../View/operacaoNaoRealizada.php");
    }
  } else {
    echo "Erro: Dados de atualização incompletos.";
  }
} 
elseif(isset($_POST["btnAddFormacao"])) {
  require_once "../Controller/FormacaoAcadController.php";
  include_once "../Model/Usuario.php";
  $fController = new FormacaoAcadController();
  if (isset($_POST["txtInicioFA"]) && isset($_POST["txtFimFA"]) && isset($_POST["txtDescFA"]) && 
      isset($_SESSION["Usuario"])) {
    if ($fController->inserir(
      date("Y-m-d", strtotime($_POST["txtInicioFA"])),
      date("Y-m-d", strtotime($_POST["txtFimFA"])),
      $_POST["txtDescFA"],
      unserialize($_SESSION["Usuario"])->getID()
      ) != false
    ) {
      includeFile("../View/cadastroRealizado.php");
    } else {
      includeFile("../View/cadastroNaoRealizado.php");
    }
  } else {
    echo "Erro: Dados de formação acadêmica incompletos ou usuário não logado.";
  }
} 
elseif(isset($_POST["btnExcluirFA"])) {
  require_once "../Controller/FormacaoAcadController.php";
  include_once "../Model/Usuario.php";
  $fController = new FormacaoAcadController();
  if (isset($_POST["id"])) {
    if ($fController->remover($_POST["id"]) == true) {
      includeFile("../View/informacaoExcluida.php");
    } else {
      includeFile("../View/operacaoNaoRealizada.php");
    }
  } else {
    echo "Erro: ID da formação acadêmica não fornecido.";
  }
} 
elseif(isset($_POST["btnAddEP"])) {
  require_once "../Controller/experienciaProfissionalController.php";
  include_once "../Model/Usuario.php";
  $epController = new ExperienciaProfissionalController();
  if (isset($_POST["txtInicioEP"]) && isset($_POST["txtFimEP"]) && isset($_POST["txtEmpEP"]) && 
      isset($_POST["txtDescEP"]) && isset($_SESSION["Usuario"])) {
    if ($epController->inserir(
      date("Y-m-d", strtotime($_POST["txtInicioEP"])),
      date("Y-m-d", strtotime($_POST["txtFimEP"])),
      $_POST["txtEmpEP"],
      $_POST["txtDescEP"],
      unserialize($_SESSION["Usuario"])->getID()
      ) != false
    ) {
      includeFile("../View/cadastroRealizado.php");
    } else {
      includeFile("../View/operacaoNaoRealizada.php");
    }
  } else {
    echo "Erro: Dados de experiência profissional incompletos ou usuário não logado.";
  }
} 
elseif(isset($_POST["btnExcluirEP"])) {
  require_once "../Controller/experienciaProfissionalController.php";
  include_once "../Model/Usuario.php";
  $epController = new ExperienciaProfissionalController();
  if (isset($_POST["idEP"])) {
    if ($epController->remover($_POST["idEP"]) == true) {
      includeFile("../View/informacaoExcluida.php");
    } else {
      includeFile("../View/operacaoNRealizada.php");
    }
  } else {
    echo "Erro: ID da experiência profissional não fornecido.";
  }
} 
elseif(isset($_POST["btnAddOF"])) {
  require_once "../Controller/outrasFormacoesController.php";
  include_once "../Model/Usuario.php";
  $ofController = new outrasFormacoesController();
  if (isset($_POST["txtInicioOF"]) && isset($_POST["txtFimOF"]) && isset($_POST["txtDescOF"]) && 
      isset($_SESSION["Usuario"])) {
    if ($ofController->inserir(
      date("Y-m-d", strtotime($_POST["txtInicioOF"])),
      date("Y-m-d", strtotime($_POST["txtFimOF"])),
      $_POST["txtDescOF"],
      unserialize($_SESSION["Usuario"])->getID()
      ) != false
    ) {
      includeFile("../View/cadastroRealizado.php");
    } else {
      includeFile("../View/operacaoNaoRealizada.php");
    }
  } else {
    echo "Erro: Dados de outras formações incompletos ou usuário não logado.";
  }
} 
elseif(isset($_POST["btnExcluirOF"])) {
  require_once "../Controller/outrasFormacoesController.php";
  include_once "../Model/Usuario.php";
  $ofController = new outrasFormacoesController();
  if (isset($_POST["idoutrasformacoes"])) {
    if ($ofController->remover($_POST["idoutrasformacoes"]) == true) {
      includeFile("../View/informacaoExcluida.php");
    } else {
      includeFile("../View/operacaoNaoRealizada.php");
    }
  } else {
    echo "Erro: ID de outras formações não fornecido.";
  }
}
else {
  // Caso nenhum botão conhecido tenha sido pressionado
  includeFile("login.php");
  // Registrar informações para debug
  echo "<div style='background-color: #f8f9fa; padding: 10px; margin-top: 20px; border: 1px solid #ccc;'>";
  echo "<strong>Debug Info:</strong><br>";
  echo "Caminho atual: " . dirname(__FILE__) . "<br>";
  echo "POST variables: ";
  print_r($_POST);
  echo "</div>";
}

?>