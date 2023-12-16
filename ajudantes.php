<?php
function traduz_prioridade($codigo)
{
    /*
    if ($codigo == 1){
        $prioridade = "Baixa";        
    }
    else if($codigo == 2){
        $prioridade = "Média";        
    }
    else if($codigo == 3){
        $prioridade = "Alta";
    }
    */

    $prioridade = '';
    switch ($codigo) {
        case 1:
            $prioridade = 'Baixa';
            break;
        case 2:
            $prioridade = 'Média';
            break;
        case 3:
            $prioridade = 'Alta';
            break;
    }
    return $prioridade;
}

function traduz_data_para_banco($data)
{
    if ($data == "") {
        return "";
    }
    $dados = explode("/", $data);
    $data_banco = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
    return $data_banco;
}

function traduz_data_para_exibir($data)
{
    if ($data == "" or $data == "0000-00-00") {
        return "";
    }
    $dados = explode("-", $data);
    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
    return $data_exibir;
}


?>