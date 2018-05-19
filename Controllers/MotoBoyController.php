<?php

namespace Controllers;

use DAO\MotoBoyDAO;
use Models\Endereco;
use Models\MotoBoy;

class MotoBoyController
{
    private $m;
    private $mdao;
    private $e;

    public function __construct()
    {
        $this->m  = new MotoBoy();
        $this->mdao = new MotoBoyDAO();
        $this->e = new Endereco();
    }

    public function insert($cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcel, $estado, $placa, $dtadmissao, $salario, $enderecoid)
    {
        $this->m->setCpf($cpf);
        $this->m->setRg($rg);
        $this->m->setNome($nome);
        $this->m->setSexo($sexo);
        $this->m->setDtnasc($datanasc);
        $this->m->setNumfixo($numfixo);
        $this->m->setNumcel($numcel);
        $this->m->setEstado($estado);
        $this->m->setPlaca($placa);
        $this->m->setDtadmissao($dtadmissao);
        $this->m->setSalario($salario);

        $this->e->setId($enderecoid);
        $this->m->setEndereco($this->e);

        $this->mdao->insert($this->m);
    }

    public function update($id, $cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcel, $estado, $placa, $dtadmissao, $salario, $enderecoid)
    {
        $this->m->setId($id);
        $this->m->setCpf($cpf);
        $this->m->setRg($rg);
        $this->m->setNome($nome);
        $this->m->setSexo($sexo);
        $this->m->setDtnasc($datanasc);
        $this->m->setNumfixo($numfixo);
        $this->m->setNumcel($numcel);
        $this->m->setEstado($estado);
        $this->m->setPlaca($placa);
        $this->m->setDtadmissao($dtadmissao);
        $this->m->setSalario($salario);

        $this->e->setId($enderecoid);
        $this->m->setEndereco($this->e);

        $this->mdao->insert($this->m);
    }
}