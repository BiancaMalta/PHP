<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas do Oitavo Ano A</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Personalizado -->
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="table-container">
        <div class="container mt-4">
            <h2 class="text-center mb-4">Notas do Oitavo Ano A</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>1º Semestre</th>
                        <th>2º Semestre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $alunos = array(
                        array("nome"=> "Aline","primeiroSemestre"=> 10, "segundoSemestre"=> 9.5),
                        array("nome"=> "Alfredo","primeiroSemestre"=> 8, "segundoSemestre"=> 5),
                        array("nome"=> "Carla","primeiroSemestre"=> 5, "segundoSemestre"=> 6.5),
                        array("nome"=> "César","primeiroSemestre"=> 9, "segundoSemestre"=> 9),
                        array("nome"=> "Daniel","primeiroSemestre"=> 10, "segundoSemestre"=> 7),
                        array("nome"=> "Esnar","primeiroSemestre"=> 8, "segundoSemestre"=> 6),
                        array("nome"=> "Henzo","primeiroSemestre"=> 6, "segundoSemestre"=> 8),
                        array("nome"=> "Pablo","primeiroSemestre"=> 7, "segundoSemestre"=> 5),
                        array("nome"=> "Wallace","primeiroSemestre"=> 8, "segundoSemestre"=> 7),
                        array("nome"=> "Zulmira","primeiroSemestre"=> 10, "segundoSemestre"=> 6)
                    );

                    foreach ($alunos as $aluno) {
                        echo "<tr>";
                        echo "<td>{$aluno['nome']}</td>";
                        echo "<td>{$aluno['primeiroSemestre']}</td>";
                        echo "<td>{$aluno['segundoSemestre']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
