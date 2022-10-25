<!DOCTYPE html>
<html>

<head>
    <title>Todas disciplinas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h2>Todas as Disciplinas: </h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Carga Horária</th>
                <th>Ementa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "Disciplina.class.php";
            $objDisciplina = new Disciplina();
            $disciplinas = $objDisciplina->buscarTodasDisciplinas();

            foreach ($disciplinas as $dc) {
                echo "<tr>";
                echo "<td>" . $dc["nome"] . "</td>";
                echo "<td>" . $dc["cargaHoraria"] . "</td>";
                echo "<td>" . $dc["ementa"] . "</td>";
                echo "<td><a href='atualizar-disciplina.php?nome={$dc["nome"]}'>Editar</a> | Excluir</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
<style>
    body h2 {
        text-align: center;
        margin-bottom: 40px;
    }
</style>

</html>