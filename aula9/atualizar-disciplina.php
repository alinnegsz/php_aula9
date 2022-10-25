<!DOCTYPE html>
<html>

<head>
    <title>Editar disciplina</title>
    <style>
        input,
        textarea {
            display: block;
        }
    </style>
</head>

<body>
    <?php
    $nome = $_GET["nome"];
    ?>
    <h2>Atualizar Disciplina</h2>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">

        <label for="carga">Carga horária:</label>
        <input type="text" name="carga" id="carga">

        <label for="Ementa">Ementa:</label>
        <textarea name="ementa" id="ementa" cols="30" rows="5">
            </textarea>
        <button type="submit">Enviar</button>

    </form>
</body>

</html>