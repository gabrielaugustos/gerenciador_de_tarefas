<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'sistematarefas';
$bdSenha = 'gabriel';
$bdBanco = 'tarefas';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno()) {
    echo "Problemas para conectar no banco. Erro: ";
    echo mysqli_connect_error();
    die();
}

function buscar_tarefas($conexao)
{
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $tarefas = [];
    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa)
{
    if ($tarefa['prazo'] == '') {
        $prazo = 'NULL';
    } else {
        $prazo = "'{$tarefa['prazo']}'";
    }
    $sqlGravar = "
        INSERT INTO tarefas
        (nome, descricao, prioridade, prazo)
        VALUES
        (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
            {$tarefa['prioridade']},
            {$prazo}
        )
    ";
    mysqli_query($conexao, $sqlGravar);
}