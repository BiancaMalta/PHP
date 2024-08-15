<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Armazena os dados do formulário em variáveis adequadas
    $nome = $_POST['txtNome'];
    $sobrenome = $_POST['txtSobrenome'];
    $email = $_POST['txtEmail'];
    $formacao = $_POST['txtFormacao'];
    $emprego = $_POST['txtEmprego'];
    
    // Exibe a mensagem de confirmação e os dados cadastrados
    echo "<!DOCTYPE html>";
    echo "<html lang='pt-BR'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<meta http-equiv='X-UA-Compatible' content='ie=edge'>";
    echo "<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>";
    echo "<title>Confirmação de Cadastro</title>";
    echo "</head>";
    echo "<body>";
    echo "<div class='w3-container w3-teal'>";
    echo "<h2>Cadastro Confirmado com Sucesso</h2>";
    echo "</div>";
    echo "<div class='w3-container'>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Sobrenome:</strong> $sobrenome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Formação:</strong> $formacao</p>";
    echo "<p><strong>Descrição Último Emprego:</strong> $emprego</p>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}
?>
