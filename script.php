<?php
    include 'Nadador.php';
    include 'servicos/servicoValidacao.php';

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    header('location: index.php');

    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        $novoCompetidor = new Nadador($nome, $idade);
        setarMensagemSucesso($novoCompetidor->exibirResumo());
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }




