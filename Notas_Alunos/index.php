<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Alunos</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="styles.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1 class="text-center mb-4">Cadastro de Alunos</h1>

    <?php
    // Conexão com o banco de dados
    $conexao = new mysqli("localhost", "root", "nova_senha", "pwii");

    // Verifica se a conexão foi bem-sucedida
    if ($conexao->connect_error) {
      die("Connection failed: " . $conexao->connect_error);
    }

    // Mensagem de sucesso ou erro
    if (isset($_GET['msg'])) {
      echo '<div class="alert alert-success alert-custom">' . htmlspecialchars($_GET['msg']) . '</div>';
    }

    // Verifica se a tabela deve ser exibida
    if (isset($_GET['show_table']) && $_GET['show_table'] == 'true') {
      // Consulta os alunos
      $sql = "SELECT * FROM alunoconcluinte";
      $resultado = $conexao->query($sql);

      if ($resultado->num_rows > 0) {
        echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr class="table-primary">';
        echo '<th>ID</th>';
        echo '<th>Nome</th>';
        echo '<th>Nota 1</th>';
        echo '<th>Nota 2</th>';
        echo '<th>Nota 3</th>';
        echo '<th>Nota 4</th>';
        echo '<th>Ações</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($linha = $resultado->fetch_assoc()) {
          echo '<tr>';
          echo '<td>' . $linha['idalunoconcluinte'] . '</td>';
          echo '<td>' . htmlspecialchars($linha['nome']) . '</td>';
          echo '<td>' . $linha['nota1'] . '</td>';
          echo '<td>' . $linha['nota2'] . '</td>';
          echo '<td>' . $linha['nota3'] . '</td>';
          echo '<td>' . $linha['nota4'] . '</td>';
          echo '<td>
                  <form method="post" action="actions.php" class="d-inline">
                    <input type="hidden" name="id" value="' . $linha['idalunoconcluinte'] . '">
                    <input type="submit" name="acao" value="excluir" class="btn btn-danger btn-sm">
                  </form>
                </td>';
          echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
      } else {
        echo '<p>Nenhum aluno encontrado.</p>';
      }

      echo '<a href="index.php" class="btn btn-primary btn-custom">Adicionar Novo Aluno</a>';
    } else {
      echo '<form method="post" action="actions.php">';
      echo '<input type="hidden" name="acao" value="cadastrar">';
      echo '<div class="form-group">';
      echo '<label for="nome">Nome:</label>';
      echo '<input type="text" id="nome" name="nome" class="form-control" required>';
      echo '</div>';
      echo '<div class="form-group">';
      echo '<label for="nota1">Nota 1:</label>';
      echo '<input type="number" id="nota1" name="nota1" class="form-control" step="0.01" required>';
      echo '</div>';
      echo '<div class="form-group">';
      echo '<label for="nota2">Nota 2:</label>';
      echo '<input type="number" id="nota2" name="nota2" class="form-control" step="0.01" required>';
      echo '</div>';
      echo '<div class="form-group">';
      echo '<label for="nota3">Nota 3:</label>';
      echo '<input type="number" id="nota3" name="nota3" class="form-control" step="0.01" required>';
      echo '</div>';
      echo '<div class="form-group">';
      echo '<label for="nota4">Nota 4:</label>';
      echo '<input type="number" id="nota4" name="nota4" class="form-control" step="0.01" required>';
      echo '</div>';
      echo '<button type="submit" class="btn btn-primary">Cadastrar</button>';
      echo '</form>';
      echo '<a href="index.php?show_table=true" class="btn btn-secondary btn-custom">Ver Todos os Alunos</a>';
    }

    $conexao->close();
    ?>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
