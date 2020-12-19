<?php
    require_once 'Nadador.php';

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if(empty($nome))
    {
        echo "O nome não pode ser vazio!";
        return;
    }

    if(strlen($nome) < 3)
    {
        echo "O nome deve conter mais que três caracteres!";
        return;
    }

    if(strlen($nome) > 40)
    {
        echo "O nome é muito extenso";
        return;
    }

    if(!is_numeric($idade))
    {
        echo "Informe um número para idade";
        return;
    }

    $novoCompetidor = new Nadador($nome, $idade);
    $novoCompetidor->exibirResumo();
