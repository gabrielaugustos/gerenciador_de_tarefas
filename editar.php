<?php
session_start();
require "banco.php";
require "ajudantes.php";
$exibir_tabela = false;

if (array_key_exists('nome', $_POST) && $_POST['nome'] != '') {
    $tarefa = [
        'id' => $_POST['id'],
        'nome' => $_POST['nome'],
        'descricao' => '',
        'prazo' => '',
        'prioridade' => $_POST['prioridade'],
        'concluida' => 0,
    ];
    if (array_key_exists('descricao', $_POST)) {
        $tarefa['descricao'] = $_POST['descricao'];
    }
    if (array_key_exists('prazo', $_POST)) {
        $tarefa['prazo'] =
            traduz_data_para_banco($_POST['prazo']);
    }
    if (array_key_exists('concluida', $_POST)) {
        $tarefa['concluida'] = $_POST['concluida'];
    }
    editar_tarefa($conexao, $tarefa);

    // Restante do seu código
    /*
    echo "<script>alert('Tarefa Atualizada');
    window.location = 'tarefas.php';
    </script>";
    */
    header('Location: tarefas.php');
    die();
}
$tarefa = buscar_tarefa($conexao, $_GET['id']);
require "template.php";
?>