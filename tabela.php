<?php
//Onde todas as tarefas serão exibidas 
?>

<table>
    <tr>
        <th style="border: solid 1px #333;">Tarefa</th>
        <th style="border: solid 1px #333;">Descricao</th>
        <th style="border: solid 1px #333;">Prazo</th>
        <th style="border: solid 1px #333;">Prioridade</th>
        <th style="border: solid 1px #333;">Concluída</th>
        <th style="border: solid 1px #333;">Opções</th>
    </tr>
    <?php foreach ($lista_tarefas as $tarefa): ?>
        <tr>
            <td style="border-right: solid 1px #333; border-left: solid 1px #333;" class="nome">
                <?php echo $tarefa['nome']; ?>
            </td>
            <td style="border-right: solid 1px #333;" class="descricao">
                <?php echo trim($tarefa['descricao']); ?>
            </td>
            <td style="border-right: solid 1px #333;">
                <?php echo traduz_data_para_exibir($tarefa['prazo']); ?>
            </td>
            <td style="border-right: solid 1px #333;" class="prioridade">
                <?php echo traduz_prioridade($tarefa['prioridade']); ?>
            </td>
            <td style="border-right: solid 1px #333;" class="concluida">
                <?php echo traduz_concluida($tarefa['concluida']); ?>
            </td>
            <td style="text-align:center;"
                class="editar">
                <!-- A célula com os links para
                 editar e remover tarefas -->
                <a href="editar.php?id=<?php echo $tarefa['id']; ?>" style="border: solid 1px #777; border-radius:3px; text-decoration:none; background:#336699;color: #FFF; padding:0px 7px;">
                    Editar
                </a>
                <span style="margin: 0 5px;">&nbsp;</span>
                <a href="remover.php?id=<?php echo $tarefa['id']; ?>" style="border: solid 1px red; border-radius:3px; text-decoration:none; background:#ff6666;color: #FFF; padding:0px 7px;">
                        Remover
                    </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>