<?php
// Conexão com o banco de dados
$conexao = new mysqli("localhost", "root", "nova_senha");

// Verifica se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

// Cria o banco de dados se ele não existir
$sql = "CREATE DATABASE IF NOT EXISTS pwii";
if ($conexao->query($sql) !== TRUE) {
    die("Erro ao criar o banco de dados: " . $conexao->error);
}

// Seleciona o banco de dados
$conexao->select_db("pwii");

// Cria a tabela se ela não existir
$sql = "CREATE TABLE IF NOT EXISTS alunoconcluinte (
    idalunoconcluinte INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    nota1 FLOAT NOT NULL,
    nota2 FLOAT NOT NULL,
    nota3 FLOAT NOT NULL,
    nota4 FLOAT NOT NULL,
    PRIMARY KEY (idalunoconcluinte)
)";
if ($conexao->query($sql) !== TRUE) {
    die("Erro ao criar a tabela: " . $conexao->error);
}

// Insere registros iniciais se a tabela estiver vazia
$sql = "SELECT COUNT(*) AS total FROM alunoconcluinte";
$resultado = $conexao->query($sql);
$linha = $resultado->fetch_assoc();

if ($linha['total'] == 0) {
    // Insere alguns registros iniciais
    $sql = "INSERT INTO alunoconcluinte (nome, nota1, nota2, nota3, nota4) VALUES
        ('Eduarda', '10', '10', '9', '10'),
        ('Paulo', '10', '9', '8', '9'),
        ('Igo', '10', '8', '10', '10'),
        ('Guilherm', '10', '9', '8', '7'),
        ('Henrique', '9', '9', '8', '7'),
        ('Nilson', '10', '9', '10', '9'),
        ('Ana', '9', '9', '8', '8'),
        ('Amanda', '8', '9', '9', '8'),
        ('Carlos', '6', '6', '5', '6'),
        ('Pedro', '8', '8', '8', '7')";
        
    if ($conexao->query($sql) !== TRUE) {
        die("Erro ao inserir registros iniciais: " . $conexao->error);
    }
}

// Verifica qual ação está sendo requisitada
if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    if ($acao == 'cadastrar') {
        // Cadastrar novo aluno
        if (isset($_POST['nome']) && isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3']) && isset($_POST['nota4'])) {
            $nome = $_POST['nome'];
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];

            $sql = "INSERT INTO alunoconcluinte (nome, nota1, nota2, nota3, nota4) 
                    VALUES ('$nome', '$nota1', '$nota2', '$nota3', '$nota4')";

            if ($conexao->query($sql) === TRUE) {
                header("Location: index.php?msg=Aluno cadastrado com sucesso");
            } else {
                echo "Erro: " . $sql . "<br>" . $conexao->error;
            }
        }

    } elseif ($acao == 'atualizar') {
        // Atualizar as notas do aluno
        if (isset($_POST['id']) && isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3']) && isset($_POST['nota4'])) {
            $id = $_POST['id'];
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $nota4 = $_POST['nota4'];

            $sql = "UPDATE alunoconcluinte SET 
                      nota1 = '$nota1', 
                      nota2 = '$nota2', 
                      nota3 = '$nota3', 
                      nota4 = '$nota4' 
                    WHERE idalunoconcluinte = $id";

            if ($conexao->query($sql) === TRUE) {
                header("Location: index.php?msg=Notas atualizadas com sucesso");
            } else {
                echo "Erro: " . $sql . "<br>" . $conexao->error;
            }
        }

    } elseif ($acao == 'excluir') {
        // Excluir aluno
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM alunoconcluinte WHERE idalunoconcluinte = $id";

            if ($conexao->query($sql) === TRUE) {
                header("Location: index.php?msg=Aluno excluído com sucesso");
            } else {
                echo "Erro: " . $sql . "<br>" . $conexao->error;
            }
        }
    }
}

// Fechar conexão
$conexao->close();
?>
