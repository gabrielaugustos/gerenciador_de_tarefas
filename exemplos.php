<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>

<body>
    <h1>Gerenciador de Tarefas</h1>
    <form>
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" placeholder="digite a tarefa" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>

    <?php

    
    $lista_tarefas = [];
    if (array_key_exists('nome', $_GET)) {
        $lista_tarefas[] = $_GET['nome'];
    }
    

    // if (array_key_exists('nome', $_GET)) {
    //     if($_GET['nome'] != ''){
    //         $_SESSION['lista_tarefas'][] = $_GET['nome'];
    //     }
    // }
    // $lista_tarefas = [];
    // if (array_key_exists('lista_tarefas', $_SESSION)) {
    //     $lista_tarefas = $_SESSION['lista_tarefas'];
    // }

    ?>

    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php
        foreach ($lista_tarefas as $tarefa): ?>
            <tr>
                <td>
                    <?php echo $tarefa, " - concluido?"; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>