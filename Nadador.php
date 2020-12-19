<?php

class Nadador
{
    private string $nome;
    private int $idade;
    private string $categoria;

    public function __construct($nome, $idade)
    {
        $this->setNome($nome);
        $this->setIdade($idade);

        if($this->getIdade() >= 6 && $this->getIdade() <= 12) $this->setCategoria("Infantil");
        else if($this->getIdade() >= 13 && $this->getIdade() <= 17) $this->setCategoria("Adolescente");
        else if($this->getIdade() >= 18) $this->setCategoria("Adulto");
    }

    public function exibirResumo(){
        print "<p>{$this->getNome()} tem {$this->getIdade()} anos e compete na categoria {$this->getCategoria()}.</p>";
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function getIdade(): int
    {
        return $this->idade;
    }
    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function setCategoria($modalidade)
    {
        $this->categoria = $modalidade;
    }
}