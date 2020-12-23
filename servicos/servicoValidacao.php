<?php
require_once 'servicoMensagemSessao.php';

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro("O nome não pode ser vazio, preencha-o novamente!");
        return false;
    }
    else if(strlen($nome) < 3)
    {
        setarMensagemErro("O nome não pode conter menos que 3 caracteres!");
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro("O nome não pode conter mais que 40 caracteres!");
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro("Informe um valor numérico para a idade e tente novamente!");
        return false;
    }
    else if($idade < 6)
    {
        setarMensagemErro("Não há modalidade para crianças menores de 6 anos!");
        return false;
    }
    return true;
}


