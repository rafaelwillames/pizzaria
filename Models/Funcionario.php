<?php

namespace Models;

class Funcionario extends Pessoa
{
    protected $cpf;
    protected $nome;
    protected $sobrenome;
    protected $cargo;
    protected $nascionalidade;
    protected $sexo;
    protected $datanasc;
    protected $altura;
    protected $peso;
    protected $email;
    protected $numcelular;
    protected $numfixo;
    protected $numrecado;
    protected $status;
    protected $endereco;

    public function getIdade()
    {
        return parent::getIdade();
    }
    
    

}