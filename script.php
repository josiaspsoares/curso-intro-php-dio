<?php
    session_start();
    require_once 'Nadador.php';

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if(empty($nome))
    {
        $_SESSION['mensagem-de-erro'] = "O nome não pode ser vazio, preencha-o novamente!";
        header('location: index.php');
        return;
    }
    else if(strlen($nome) < 3)
    {
        $_SESSION['mensagem-de-erro'] = "O nome não pode conter menos que 3 caracteres!";
        header('location: index.php');
        return;
    }
    else if(strlen($nome) > 40)
    {
        $_SESSION['mensagem-de-erro'] = "O nome não pode conter mais que 40 caracteres!";
        header('location: index.php');
        return;
    }
    else if(!is_numeric($idade))
    {
        $_SESSION['mensagem-de-erro'] = "Informe um valor numérico para a idade e tente novamente!";
        header('location: index.php');
        return;
    }

    $novoCompetidor = new Nadador($nome, $idade);

    $_SESSION['mensagem-de-sucesso'] = $novoCompetidor->exibirResumo();
    header('location: index.php');

